<?php
require_once 'config/config.php';
require_once 'config/autoload.php';
error_reporting(E_ALL);
ini_set("display_errors", 1);

// On récupère l'action demandée par l'utilisateur.
// Si aucune action n'est demandée, on affiche la page d'accueil.
$action = Utils::request('action', 'home');

// Try catch global pour gérer les erreurs
try {
    // Pour chaque action, on appelle le bon contrôleur et la bonne méthode.
    switch ($action) {
        // Pages accessibles à tous.
        case 'home':
            $bookController = new BookController();
            $bookController->showHome();
            break;

        case 'books':
            $bookController = new BookController();
            $bookController->showBooks();
            break;

        case 'account':
            $userController = new UserController();
            $userController->showAccount();
            break;    

        case 'login':
            $userController = new UserController();
            $userController->showLogin();
            break;    
        
        case 'messages':
            $messageController = new MessageController();
            $messageController->showMessages();
            break;    

        case 'connectUser': 
            $userController = new UserController();
            $userController->connectUser();
            break;

        case 'register': 
            $userController = new UserController();
            $userController->showRegisterForm();
            break;

        case 'registerUser': 
            $userController = new UserController();
            $userController->registerUser();
            break;

        case 'updateAccount': 
            $userController = new UserController();
            $userController->updateAccount();
            break;

        case 'updateImage': 
            $userController = new UserController();
            $userController->uploadUserImage();
            break;

        case 'editBook': 
            $bookController = new BookController();
            $bookController->showEditBookForm();
            break;

        case 'deleteBook': 
            $bookController = new BookController();
            $bookController->deleteBook();
            break;

        case 'updateBook':
            $bookController = new BookController();
            $bookController->updateBook();
            break;

        case 'bookDetails':
            $bookController = new BookController();
            $bookController->showBookDetails();
            break;

        case 'profile':
            $userController = new UserController();
            $userController->showUserProfile($_SESSION['user_id']);
            break;

        case 'sendMessage' :
            $messageController = new MessageController();
            $messageController->sendMessage();
            break;
            
        default:
            throw new Exception("La page demandée n'existe pas.");
    }
} catch (Exception $e) {
    // En cas d'erreur, on affiche la page d'erreur.
    $errorView = new View('Erreur');
    $errorView->render('errorPage', ['errorMessage' => $e->getMessage()]);
}            
?>

