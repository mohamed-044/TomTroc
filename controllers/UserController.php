<?php 

class UserController 
{
    /**
     * Affiche la page de compte.
     * @return void
     */
    public function showAccount() : void
    {
        $this->checkIfUserIsConnected();
        $userManager = new UserManager();
        $user = $userManager->getUserById($_SESSION['user_id']);
        $bookManager = new BookManager();
        $books = $bookManager->getBooksByUserId($user->getId());
        $view = new View("Compte");
        $view->render("accountPage", [
            'user' => $user,
            'books' => $books
        ]);
    }


    /**
     * Affiche la page de connexion.
     * @return void
     */
    public function showLogin() : void
{
    if (isset($_SESSION['user_id'])) {
        header("Location: index.php?action=account");
        exit;
    }

    $view = new View("Connexion");
    $view->render("connectionForm");
}
 

     /**
     * Vérifie que l'utilisateur est connecté.
     * @return void
     */
    public function checkIfUserIsConnected() : void
    {
        // On vérifie que l'utilisateur est connecté.
        if (!isset($_SESSION['user_id'])) {
            Utils::redirect("login");
        }
    }

    /**
     * Affichage du formulaire de connexion.
     * @return void
     */
    public function displayConnectionForm() : void 
    {
        $view = new View("Connexion");
        $view->render("connectionForm");
    }

    /**
     * Connexion de l'utilisateur.
     * @return void
     */
    public function connectUser() : void 
    {
        try {
            // On récupère les données du formulaire.
            $login = Utils::request("login");
            $password = Utils::request("password");

            // On vérifie que les données sont valides.
            if (empty($login)) { 
                $errors[] = "L'adresse mail est obligatoire.";
            }
            if (empty($password)) { 
                $errors[] = "Le mot de passe est obligatoire."; 
            }
            
            // On vérifie que l'utilisateur existe.
            $userManager = new UserManager();
            $user = $userManager->getUserByLogin($login);
            if (!$user || !password_verify($password, $user->getPassword())) {
                $errors[] = "Identifiants incorrects."; 
            }

            // Si erreurs → on renvoie vers la vue avec les erreurs 
            if (!empty($errors)) { 
                $view = new View("Connexion"); 
                $view->render("connectionForm", [ "errors" => $errors, "login" => $login ]); 
                return; 
            }
            // On connecte l'utilisateur.
            $_SESSION['user_id'] = $user->getId();

            // On redirige vers la page de profil.
            Utils::redirect("account");
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage(); // Temporary debug
            exit;
        }
    }

    /**
     * Déconnexion de l'utilisateur.
     * @return void
     */
    public function disconnectUser() : void 
    {
        // On déconnecte l'utilisateur.
        unset($_SESSION['user_id']);

        // On redirige vers la page d'accueil.
        Utils::redirect("home");
    }

    /**
     * Image de l'utilisateur.
     * @return void
     */
    public function uploadUserImage() : void 
    {
        // On vérifie que l'utilisateur est connecté.
        $this->checkIfUserIsConnected();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Code pour télécharger et enregistrer l'image de l'utilisateur.
            $userManager = new UserManager();
            $user = $userManager->getUserById($_SESSION['user_id']);

            if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
                $imageName = $_FILES['image']['name'];
                $tmpName = $_FILES['image']['tmp_name'];
                $destination = './img/' . $imageName;
                if (move_uploaded_file($tmpName, $destination)) {
                    $user->setImage($imageName);
                    $userManager->updateUser($user);
                } else {
                    $errors[] = "Erreur lors du téléchargement de l'image.";
                }
            } else {
                $errors[] = "Aucune image valide n'a été téléchargée.";
            }

            Utils::redirect("account");
        } else {
            // Afficher le formulaire de téléchargement d'image.
            $view = new View("Modifier l'image");
            $view->render("updateImageForm");
        }
    }

    /**
     * Affichage du formulaire d'inscription.
     * @return void
     */
    public function showRegisterForm() : void 
    {
        $view = new View("Inscription");
        $view->render("registrationForm");
    }

    /**
     * Enregistrement d'un nouvel utilisateur.
     * @return void
     */
    public function registerUser() : void 
    {
        try {
            // On récupère les données du formulaire.
            $login = Utils::request("login");
            $password = Utils::request("password");
            $name = Utils::request("name");

            // On vérifie que les données sont valides.
            if (empty($login)) { 
                $errors[] = "L'adresse mail est obligatoire.";
            }
            if (empty($password)) { 
                $errors[] = "Le mot de passe est obligatoire."; 
            }
            if (empty($name)) { 
                $errors[] = "Le pseudo est obligatoire."; 
            }

            // Si erreurs → on renvoie vers la vue avec les erreurs 
            if (!empty($errors)) { $view = new View("Inscription"); 
               $view->render("registrationForm", [ "errors" => $errors, "login" => $login, "name" => $name ]); 
               return; }

            // On vérifie que l'utilisateur n'existe pas déjà.
            $userManager = new UserManager();
            $existingUser = $userManager->getUserByLogin($login);
            if ($existingUser) {
                $errors[] = "Ce login est déjà utilisé."; 
                $view = new View("Inscription"); 
                $view->render("registrationForm", [ "errors" => $errors, "login" => $login, "name" => $name ]); 
                return;
            }

            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            // On crée le nouvel utilisateur.
            $newUser = new User([
                'login' => $login,
                'password' => $hashedPassword,
                'name' => $name
            ]);
            // Code pour enregistrer le nouvel utilisateur dans la base de données.
            $userManager->createUser($newUser);

            // On redirige vers la page de connexion.
            Utils::redirect("login");
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage(); // Temporary debug
            exit;
        }
    }

    public function updateAccount() : void 
    {
        try {
            // On vérifie que l'utilisateur est connecté.
            $this->checkIfUserIsConnected();

            // On récupère les données du formulaire.
            $login = Utils::request("login");
            $password = Utils::request("password");
            $name = Utils::request("name");

            // On vérifie que les données sont valides.
            if (empty($login) || empty($password) || empty($name)) {
                $errors[] = "Tous les champs sont obligatoires.";
            }

            // On met à jour les informations de l'utilisateur.
            $userManager = new UserManager();
            $user = $userManager->getUserById($_SESSION['user_id']);
            $user->setLogin($login);
            $user->setPassword(password_hash($password, PASSWORD_DEFAULT));
            $user->setName($name);
            $userManager->updateUser($user);

            // On redirige vers la page de compte.
            Utils::redirect("account");
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage(); // Temporary debug
            exit;
        }
    }

    public function updateImagePath(int $userId, string $imagePath) : void 
    {
        $userManager = new UserManager();
        $user = $userManager->getUserById($userId);
        if ($user) {
            $user->setImage($imagePath);
            $userManager->updateUser($user);
        }
    }

    public function showUserProfile(int $userId) : void 
    {
        $userManager = new UserManager();
        $bookManager = new BookManager();

        $user = $userManager->getUserById($userId);
        if (!$user) {
            $errors[] = "Utilisateur non trouvé.";
            $view = new View("Erreur");
            $view->render("errorPage", ['errors' => $errors]);
            return;
        }

        // Récupérer les livres de l'utilisateur
        $books = $bookManager->getBooksByUserId($userId);

        $view = new View("Profil utilisateur");
        $view->render("profile", [
            'user' => $user,
            'books' => $books
        ]);
    }
}