<?php 

class BookController 
{
    /**
     * Affiche la page d'accueil.
     * @return void
     */
    public function showHome() : void
    {
        $bookManager = new BookManager();
        $books = $bookManager->getAllBooks();

        $view = new View("Accueil");
        $view->render("main", ['books' => $books]);
    }
    /**
     * Affiche la page des livres à l'échange.
     * @return void
     */
    public static function showBooks() : void
    {
        try {
            $bookManager = new BookManager();
            $search = $_GET['q'] ?? null;

            if (!empty($search)) {
                $books = $bookManager->searchBooks($search);
            } else {
                $books = $bookManager->getAllBooks();
            }

            $view = new View("Livres à l'échange");
            $view->render("exchangeBooks", ['books' => $books, 'search' => $search]);

        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
            exit;
        }
    }

    /**
     * Affiche le formulaire d'édition d'un livre.
     * @return void
     */
    public function showEditBookForm() : void
    {
        $userController = new UserController();
        $userController->checkIfUserIsConnected();
        $bookId = isset($_GET['id']) ? (int)$_GET['id'] : -1;
        $bookManager = new BookManager();
        $book = $bookManager->getBookById($bookId);
        if (!$book) {
            $errors[] = "Livre non trouvé.";
        }

        if (!empty($errors)) {
            $view = new View("Erreur");
            $view->render("errorPage", ['errors' => $errors]);
            return;
        }

        $view = new View("Édition du livre");
        $view->render("editBookForm", ['book' => $book]);
    }
    
    /**
     * Supprime un livre.
     * @return void
     */
    public function deleteBook() : void
    {
        $userController = new UserController();
        $userController->checkIfUserIsConnected();
        $bookId = isset($_GET['id']) ? (int)$_GET['id'] : -1;
        $bookManager = new BookManager();
        $book = $bookManager->getBookById($bookId);
        if (!$book) {
            $errors[] = "Livre non trouvé.";
        }
        $bookManager->deleteBook($bookId);
        header("Location: index.php?action=books");
        exit;
    }

    /**
     * Met à jour un livre.
     * @return void
     */
    public function updateBook() : void
    {
        $userController = new UserController();
        $userController->checkIfUserIsConnected();

        $errors = [];

        // Sécurisation des données
        $bookId = (int)($_POST['id'] ?? 0);
        $title = trim($_POST['title'] ?? '');
        $author = trim($_POST['author'] ?? '');
        $description = trim($_POST['description'] ?? '');
        $status = trim($_POST['status'] ?? '');

        // Vérification du livre
        $bookManager = new BookManager();
        $book = $bookManager->getBookById($bookId);

        if (!$book) {
            $errors[] = "Livre non trouvé.";
        }

        // Vérification que l'utilisateur est bien propriétaire du livre
        if ($book && $book->getUserId() !== $_SESSION['user_id']) {
            $errors[] = "Vous n'êtes pas autorisé à modifier ce livre.";
        }

        // Validation des champs
        if ($title === '') {
            $errors[] = "Le titre est obligatoire.";
        }
        if ($author === '') {
            $errors[] = "L'auteur est obligatoire.";
        }
        if ($description === '') {
            $errors[] = "La description est obligatoire.";
        }
        if (!in_array($status, ["true", "false"])) {
            $errors[] = "Statut invalide.";
        }

        // Si erreurs → réaffichage du formulaire
        if (!empty($errors)) {
            $view = new View("Modifier un livre");
            $view->render("editBookForm", [
                "errors" => $errors,
                "book" => $book
            ]);
            return;
        }

        // Mise à jour
        $book->setTitle($title);
        $book->setAuthor($author);
        $book->setDescription($description);
        $book->setStatus($status);

        $bookManager->updateBook($book);

        header("Location: index.php?action=account");
        exit;
    }


    /**
     * Affiche les détails d'un livre.
     * @return void
     */
    public function showBookDetails() : void
    {
        $bookId = isset($_GET['id']) ? (int)$_GET['id'] : -1;
        $bookManager = new BookManager();
        $book = $bookManager->getBookById($bookId);
        if (!$book) {
            $errors[] = "Livre non trouvé.";
        }
        $view = new View("Détails du livre");
        $view->render("detailBook", ['book' => $book]);
    }

    /**
     * Affiche le formulaire de modification de l'image d'un livre.
     * @return void
     */
    public function editBookImage() : void
    {
        $userController = new UserController();
        $userController->checkIfUserIsConnected();

        $bookId = isset($_GET['id']) ? (int)$_GET['id'] : -1;
        $bookManager = new BookManager();
        $book = $bookManager->getBookById($bookId);

        if (!$book) {
            $errors[] = "Livre non trouvé.";
        }

        $view = new View("Modifier l'image du livre");
        $view->render("updateBookImage", ['book' => $book]);
    }

    /**
     * Met à jour l'image d'un livre.
     * @return void
     */
    public function updateBookImage() : void
    {
        $userController = new UserController();
        $userController->checkIfUserIsConnected();

        $bookId = isset($_GET['id']) ? (int)$_GET['id'] : -1;
        $bookManager = new BookManager();
        $book = $bookManager->getBookById($bookId);

        if (!$book) {
            $errors[] = "Livre non trouvé.";
        }

        if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
            $uploadDir = __DIR__ . '/../img/';
            $uploadedFile = $_FILES['image'];
            $fileExtension = pathinfo($uploadedFile['name'], PATHINFO_EXTENSION);
            $newFileName = 'book_' . $bookId . '.' . $fileExtension;
            $destination = $uploadDir . $newFileName;

            if (move_uploaded_file($uploadedFile['tmp_name'], $destination)) {
                $book->setImage($newFileName);
                $bookManager->updateBookImage($bookId, $newFileName);
                header("Location: index.php?action=account");
                exit;
            } else {
                $errors[] = "Erreur lors du téléchargement de l'image.";
            }
        } else {
            $errors[] = "Aucun fichier téléchargé ou erreur de téléchargement.";
        }
    }
}