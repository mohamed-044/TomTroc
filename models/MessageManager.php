<?php

/** 
 * Classe MessageManager pour gérer les requêtes liées aux messages.
 */

class MessageManager extends AbstractEntityManager 
{
    /**
     * Récupère tous les messages.
     * @return array
     */
    public function getAllMessages() : array
    {
        $sql = "SELECT * FROM message";
        $result = $this->db->query($sql);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * Ajoute un message.
     * @param int $senderId
     * @param int $receiverId
     * @param string $content
     * @return void
     */
    public function addMessage(int $senderId, int $receiverId, string $content) : void 
    {
        $sql = "INSERT INTO message (sender_id, receiver_id, content, sent_at) VALUES (:sender_id, :receiver_id, :content, NOW())";
        $this->db->query($sql, [ 'sender_id' => $senderId, 'receiver_id' => $receiverId, 'content' => $content
        ]);
    }

    /**
     * Récupère les messages entre deux utilisateurs.
     * @param int $userId1
     * @param int $userId2
     * @return array
     */
    public function getMessagesBetweenUsers(int $userId1, int $userId2) : array
    {
        $sql = "SELECT * FROM message WHERE (sender_id = :user1 AND receiver_id = :user2) OR (sender_id = :user2 AND receiver_id = :user1) ORDER BY sent_at ASC";
        $result = $this->db->query($sql, ['user1' => $userId1, 'user2' => $userId2]);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * Crée un nouveau message.
     * @param int $senderId
     * @param int $receiverId
     * @param string $content
     * @return void
     */
    public function createMessage(int $conversationId, int $senderId, string $content) : void 
    {
        $sql = "INSERT INTO message (conversation_id, sender_id, content, sent_at) VALUES (:conversation_id, :sender_id, :content, NOW())";
        $this->db->query($sql, ['conversation_id' => $conversationId, 'sender_id' => $senderId, 'content' => $content
        ]);
    }

    /**
     * Récupère un message par son id.
     * @param int $id
     * @return ?array
     */
    public function getMessageById(int $id) : ?array
    {
        $sql = "SELECT * FROM message WHERE id = :id";
        $result = $this->db->query($sql, ['id' => $id]);
        $message = $result->fetch();
        return $message ? $message : null;
    }

    /**
     * Récupère une conversation par son id.
     * @param int $id
     * @return ?array
     */
    public function getConversationById(int $id) : ?array
    {
        $sql = "SELECT * FROM conversation WHERE id = :id";
        $result = $this->db->query($sql, ['id' => $id
        ]);
        $conversation = $result->fetch();
        return $conversation ? $conversation : null;
    }
}