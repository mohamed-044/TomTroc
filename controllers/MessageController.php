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
}