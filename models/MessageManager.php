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
}