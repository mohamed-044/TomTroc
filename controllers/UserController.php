<?php 

class UserController 
{
    /**
     * Affiche la page de compte.
     * @return void
     */
    public function showAccount() : void
    {
        // On vérifie que l'utilisateur est connecté.
        $this->checkIfUserIsConnected();
        
        $userManager = new UserManager();
        $user = $userManager->getUserById($_SESSION['user_id']);

        $view = new View("Compte");
        $view->render("accountPage", ['user' => $user]);
    }

    /**
     * Affiche la page de connexion.
     * @return void
     */
    public function showLogin() : void
    {
        $view = new View("Connexion");
        $view->render("connectionForm");
    }    

     /**
     * Vérifie que l'utilisateur est connecté.
     * @return void
     */
    private function checkIfUserIsConnected() : void
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
            if (empty($login) || empty($password)) {
                throw new Exception("Tous les champs sont obligatoires. 1");
            }

            // On vérifie que l'utilisateur existe.
            $userManager = new UserManager();
            $user = $userManager->getUserByLogin($login);
            if (!$user) {
                throw new Exception("L'utilisateur demandé n'existe pas.");
            }

            // On vérifie que le mot de passe est correct.
            if ($password !== $user->getPassword()) {
                throw new Exception("Le mot de passe est incorrect.");
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
        // Code pour télécharger et enregistrer l'image de l'utilisateur.
        $userManager = new UserManager();
        $user = $userManager->getUserByLogin($_SESSION['user']);
        $user->setImage($_FILES['image']['name']);
        $userManager->updateUser($user);
        Utils::redirect("account");
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
            if (empty($login) || empty($password) || empty($name)) {
                throw new Exception("Tous les champs sont obligatoires.");
            }

            // On vérifie que l'utilisateur n'existe pas déjà.
            $userManager = new UserManager();
            $existingUser = $userManager->getUserByLogin($login);
            if ($existingUser) {
                throw new Exception("Ce login est déjà utilisé.");
            }

            // On crée le nouvel utilisateur.
            $newUser = new User([
                'login' => $login,
                'password' => $password,
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
}