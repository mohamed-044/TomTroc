<?php 

class MessageController 
{
    /**
     * Affiche la page d'accueil.
     * @return void
     */
    public function showMessages() : void
    {
        $userController = new UserController();
        $userController->checkIfUserIsConnected();

        $senderId = $_SESSION['user_id'];
        $messageManager = new MessageManager();
        $userManager = new UserManager();

        // Trouver le dernier utilisateur avec qui on a parlé
        $receiverId = $messageManager->getLastMessageUser($senderId);

        if ($receiverId) {
            $receiver = $userManager->getUserById($receiverId);
            $messages = $messageManager->getMessagesBetweenUsers($senderId, $receiverId);
            $lastMessage = !empty($messages) ? end($messages) : null;
        } else {
            // Aucun message encore
            $receiver = null;
            $messages = [];
            $lastMessage = null;
        }

        $view = new View("Messagerie");
        $view->render("messages", [
            'receiver' => $receiver,
            'receiverId' => $receiverId,
            'messages' => $messages,
            'lastMessage' => $lastMessage
        ]);
    }

    
    public function sendMessage()
    {
        $senderId = $_SESSION['user_id'];
        $receiverId = $_GET['id'];

        $userManager = new UserManager();
        $messageManager = new MessageManager();

        $receiver = $userManager->getUserById($receiverId);
        $sender = $userManager->getUserById($senderId);

        // Récupérer tous les messages
        $messages = $messageManager->getMessagesBetweenUsers($senderId, $receiverId);

        // Récupérer le dernier message
        $lastMessage = !empty($messages) ? end($messages) : null;

        $view = new View("messages");
        $view->render("messages", [
            "receiver" => $receiver,
            "sender" => $sender,
            "messages" => $messages,
            "lastMessage" => $lastMessage,
            "receiverId" => $receiverId
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