<?php

class Message {
    private $id;
    private $senderId;
    private $receiverId;
    private $content;
    private $is_read;
    private $created_at;

    public function __construct($id, $senderId, $receiverId, $content, $is_read, $created_at) {
        $this->id = $id;
        $this->senderId = $senderId;
        $this->receiverId = $receiverId;
        $this->content = $content;
        $this->is_read = $is_read;
        $this->created_at = $created_at;
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

    public function getIsRead() {
        return $this->is_read;
    }

    public function setIsRead($is_read) {
        $this->is_read = $is_read;
    }

    public function getCreatedAt() {
        return $this->created_at;
    }

    public function setCreatedAt($created_at) {
        $this->created_at = $created_at;
    }
}