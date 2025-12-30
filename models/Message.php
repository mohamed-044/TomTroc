<?php

class Message {
    private $id;
    private $senderId;
    private $receiverId;
    private $content;
    private $created_at;
    private $conversationId;

    public function __construct($id, $senderId, $receiverId, $content, $created_at, $conversationId) {
        $this->id = $id;
        $this->senderId = $senderId;
        $this->receiverId = $receiverId;
        $this->content = $content;
        $this->created_at = $created_at;
        $this->conversationId = $conversationId;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getSenderId() {
        return $this->senderId;
    }

    public function setSenderId($senderId) {
        $this->senderId = $senderId;
    }

    public function getReceiverId() {
        return $this->receiverId;
    }

    public function setReceiverId($receiverId) {
        $this->receiverId = $receiverId;
    }

    public function getContent() {
        return $this->content;
    }

    public function setContent($content) {
        $this->content = $content;
    }

    public function getCreatedAt() {
        return $this->created_at;
    }

    public function setCreatedAt($created_at) {
        $this->created_at = $created_at;
    }

    public function getConversationId() {
        return $this->conversationId;
    }

    public function setConversationId($conversationId) {
        $this->conversationId = $conversationId;
    }
}