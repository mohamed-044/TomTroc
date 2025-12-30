<?php 

class MessageController 
{
    /**
     * Affiche la page d'accueil.
     * @return void
     */
    public function showMessages() : void
    {
        $messageManager = new MessageManager();
        $messages = $messageManager->getAllMessages();

        $view = new View("Messagerie");
        $view->render("messages", ['messages' => $messages]);
    }
    
    public function sendMessage() : void
    {
        $userController = new UserController();
        $userController->checkIfUserIsConnected();

        $receiverId = isset($_GET['id']) ? (int)$_GET['id'] : -1;
        $senderId = $_SESSION['user_id'];

        $messageManager = new MessageManager();
        $messages = $messageManager->getMessagesBetweenUsers($senderId, $receiverId);

        $view = new View("Messagerie");
        $view->render("messages", [
            'messages' => $messages,
            'receiverId' => $receiverId
        ]);
    }

    public function processSendMessage() : void
    {
        $userController = new UserController();
        $userController->checkIfUserIsConnected();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $receiverId = (int)$_POST['receiver_id'];
            $content = trim($_POST['content']);

            if (empty($content)) {
                throw new Exception("Le contenu du message ne peut pas être vide.");
            }

            $messageManager = new MessageManager();
            $messageManager->addMessage($_SESSION['user_id'], $receiverId, $content);

            Utils::redirect("sendMessage&id=" . $receiverId);
        }
    }


    public function showMessageDetails() : void
    {
        $userController = new UserController();
        $userController->checkIfUserIsConnected();
        $messageId = isset($_GET['id']) ? (int)$_GET['id'] : -1;
        $messageManager = new MessageManager();
        $message = $messageManager->getMessageById($messageId);
        if (!$message) {
            throw new Exception("Message non trouvé.");
        }
        $view = new View("Détails du message");
        $view->render("messageDetails", ['message' => $message]);
    }
    
}