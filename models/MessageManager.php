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
        $sql = "INSERT INTO message (sender_id, receiver_id, content, created_at) VALUES (:sender_id, :receiver_id, :content, NOW())";
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
        $sql = "SELECT * FROM message WHERE (sender_id = :user1 AND receiver_id = :user2) OR (sender_id = :user2 AND receiver_id = :user1) ORDER BY created_at ASC";
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
    public function createMessage(int $senderId, string $content, int $receiverId) : void 
    {
        $sql = "INSERT INTO message (sender_id, receiver_id, content, created_at) VALUES (:sender_id, :receiver_id, :content, NOW())";
        $this->db->query($sql, ['sender_id' => $senderId, 'receiver_id' => $receiverId, 'content' => $content, 'created_at' => time()
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
     * Récupère le dernier partenaire de conversation d'un utilisateur.
     * @param int $userId
     * @return ?int
     */
    public function getLastMessageUser(int $userId) : ?int
    {
        $sql = "SELECT CASE  WHEN sender_id = :id THEN receiver_id  ELSE sender_id  END AS partner FROM message WHERE sender_id = :id OR receiver_id = :id ORDER BY created_at DESC LIMIT 1";
        $result = $this->db->query($sql, ['id' => $userId]);
        $row = $result->fetch(PDO::FETCH_ASSOC);
        return $row ? (int)$row['partner'] : null;
    }

}