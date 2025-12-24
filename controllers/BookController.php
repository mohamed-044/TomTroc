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
}

