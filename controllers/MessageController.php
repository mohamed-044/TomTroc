<?php 

class MessageController 
{
    /**
     * Affiche la page d'accueil.
     * @return void
     */
    public function showMessages()
    {
        // Vérifie que l'utilisateur est connecté
        $userController = new UserController();
        $userController->checkIfUserIsConnected();

        if (!isset($_GET['id'])) {
            header("Location: index.php?action=messages");
            exit;
        }

        $senderId = (int) $_SESSION['user_id'];
        $receiverId = (int) $_GET['id'];

        $userManager = new UserManager();
        $messageManager = new MessageManager();

        $receiver = $userManager->getUserById($receiverId);
        $sender = $userManager->getUserById($senderId);

        $messages = $messageManager->getMessagesBetweenUsers($senderId, $receiverId);
        $lastMessage = !empty($messages) ? end($messages) : null;

        $conversations = $messageManager->getConversationsForUser($senderId);

        foreach ($conversations as &$conv) {
            $conv['user'] = $userManager->getUserById($conv['partner']);
            $conv['lastMessage'] = $messageManager->getLastMessageBetweenUsers($senderId, $conv['partner']);
        }

        $view = new View("messages");
        $view->render("messages", [
            "receiver" => $receiver,
            "sender" => $sender,
            "messages" => $messages,
            "lastMessage" => $lastMessage,
            "receiverId" => $receiverId,
            "conversations" => $conversations
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

        $messages = $messageManager->getMessagesBetweenUsers($senderId, $receiverId);
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
                $errors[] = "Le contenu du message ne peut pas être vide.";
            }

            if (!empty($errors)) {
                $view = new View("messages");
                $view->render("messages", [
                    "errors" => $errors,
                    "receiverId" => $receiverId,
                    "content" => $content
                ]);
                return;
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
            $errors[] = "Message non trouvé.";
        }
        $view = new View("Détails du message");
        $view->render("messageDetails", ['message' => $message]);
    }
    
    public function showConversations()
    {
        if (!isset($_SESSION['user_id'])){
            header("Location: index.php?action=login");
            exit; }
        
        $senderId = $_SESSION['user_id'];

        $userManager = new UserManager();
        $messageManager = new MessageManager();

        $conversations = $messageManager->getConversationsForUser($senderId);

        foreach ($conversations as &$conv) {
            $conv['user'] = $userManager->getUserById($conv['partner']);
            $conv['lastMessage'] = $messageManager->getLastMessageBetweenUsers($senderId, $conv['partner']);
        }

        $view = new View("messages");
        $view->render("messages", [
            "conversations" => $conversations,
            "receiver" => null,
            "messages" => [],
            "lastMessage" => null,
            "receiverId" => null
        ]);
    }

}