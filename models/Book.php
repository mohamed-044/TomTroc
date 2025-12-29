<?php

/**
 * Entité Book, un book est défini par les champs
 * id, id_user, title, author, status, description, image
 */
 class Book extends AbstactEntity 
 {
    protected int $id = -1;
    private int $userId = 0;
    private string $title = "";
    private string $author = "";
    private string $status = "";
    private string $description = "";
    private string $image = "";
    private string $userName = "";
    private string $userImage = "";

    /**
     * Setter pour l'id de l'utilisateur. 
     * @param int $idUser
     */
    public function setUserId(int $userId) : void 
    {
        $this->userId = $userId;
    }

    /**
     * Getter pour l'id de l'utilisateur.
     * @return int
     */
    public function getUserId() : int 
    {
    return $this->userId;
    }


    /**
     * Setter pour le titre.
     * @param string $title
     */
    public function setTitle(string $title) : void 
    {
        $this->title = $title;
    }

    /**
     * Getter pour le titre.
     * @return string
     */
    public function getTitle() : string 
    {
        return $this->title;
    }

    /**
     * Setter pour l'auteur.
     * @param string $author
     */
    public function setAuthor(string $author) : void 
    {
        $this->author = $author;
    }

    /**
     * Getter pour l'auteur.
     * @return string
     */
    public function getAuthor() : string 
    {
        return $this->author;
    }

    /**
     * Setter pour le statut.
     * @param string $status
     */
    public function setStatus(string $status) : void 
    {
        $this->status = $status;
    }

    /**
     * Getter pour le statut.
     * @return string
     */
    public function getStatus() : string 
    {
        return $this->status;
    }

    /**
     * Setter pour la description.
     * @param string $description
     */
    public function setDescription(string $description) : void 
    {
        $this->description = $description;
    }

    /**
     * Getter pour la description.
     * @return string
     */
    public function getDescription() : string 
    {
        return $this->description;
    }

    /**
     * Setter pour l'image.
     * @param string $image
     */
    public function setImage(string $image) : void 
    {
        $this->image = $image;
    }

    /**
     * Getter pour l'image.
     * @return string
     */
    public function getImage() : string 
    {
        return $this->image;
    }

    /**
     * Setter pour le nom d'utilisateur.
     * @param string $userName
     */
    public function setUserName(string $userName) : void 
    {
        $this->userName = $userName;
    }

    /**
     * Getter pour le nom d'utilisateur.
     * @return string
     */
    public function getUserName() : string 
    {
        return $this->userName;
    }
    
    /**
     * Getter pour l'id.
     * @return int
     */
    public function getId() : int
    {
    return $this->id;
    }

    /** 
     * Setter pour l'id.
     * @param int $id
     * @return void
     */
    public function setId(int $id) : void
    {
        $this->id = $id;
    }

    /**
     * Setter pour l'image d'utilisateur.
     * @param string $userImage
     */
    public function setUserImage(string $userImage) : void
    {
        $this->userImage = $userImage;
    }
    /**
     * Getter pour l'image d'utilisateur.
     * @return string
     */
    public function getUserImage() : string
    {
        return $this->userImage;
    }
}
