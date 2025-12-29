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
            $books = $bookManager->getAllBooks();
            $view = new View("Livres à l'échange");
            $view->render("exchangeBooks", ['books' => $books]);
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
            throw new Exception("Livre non trouvé.");
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
            throw new Exception("Livre non trouvé.");
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

        $bookId = (int)$_POST['id'];

        $bookManager = new BookManager();
        $book = $bookManager->getBookById($bookId);

        if (!$book) {
            throw new Exception("Livre non trouvé.");
        }

        $book->setTitle($_POST['title']);
        $book->setAuthor($_POST['author']);
        $book->setDescription($_POST['description']);
        $book->setStatus($_POST['status']);

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
            throw new Exception("Livre non trouvé.");
        }
        $view = new View("Détails du livre");
        $view->render("detailBook", ['book' => $book]);
        }
}