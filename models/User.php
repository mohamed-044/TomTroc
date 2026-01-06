<?php

/**
 * Entité User : un user est défini par son id, un login et un password.
 */ 
class User extends AbstactEntity 
{
    private string $login = "";
    private string $password = "";
    private string $name = "";
    private string $image = "";
    private dateTime $dateCreated;

    /**
     * Constructor to initialize from DB data.
     * @param array $data : associative array from DB fetch.
     */
    public function __construct(array $data = []) {
        $this->id = (int) ($data['id'] ?? -1);
        $this->setLogin($data['login'] ?? '');
        $this->setPassword($data['password'] ?? '');
        $this->setName($data['name'] ?? '');
        $this->setImage($data['image'] ?? '');
        $this->dateCreated = isset($data['date_created']) ? new DateTime($data['date_created']) : new DateTime();
    }

    /**
     * Setter pour le login.
     * @param string $login
     */
    public function setLogin(string $login) : void 
    {
        $this->login = $login;
    }

    /**
     * Getter pour le login.
     * @return string
     */
    public function getLogin() : string 
    {
        return $this->login;
    }

    /**
     * Setter pour le password.
     * @param string $password
     */
    public function setPassword(string $password) : void 
    {
        $this->password = $password;
    }

    /**
     * Getter pour le password.
     * @return string
     */
    public function getPassword() : string 
    {
        return $this->password;
    }

    /**
     * Setter pour le name.
     * @param string $name
     */
    public function setName(string $name) : void 
    {
        $this->name = $name;
    }

    /**
     * Getter pour le name.
     * @return string
     */
    public function getName() : string 
    {
        return $this->name;
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
     * Getter pour la date d'inscription en années.
     * @return ?string
     */
    public function getJoinDate() : string 
    {
        $now = new DateTime();
        $interval = $now->diff($this->dateCreated);
        return (string)$interval->y;
    }
}