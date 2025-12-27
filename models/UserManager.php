<?php

/** 
 * Classe UserManager pour gérer les requêtes liées aux users et à l'authentification.
 */

class UserManager extends AbstractEntityManager 
{
    /**
     * Récupère un user par son id.
     * @param int $id
     * @return ?User
     */
    public function getUserById(int $id) : ?User 
    {
        $sql = "SELECT * FROM user WHERE id = :id";
        $result = $this->db->query($sql, ['id' => $id]);
        $user = $result->fetch();
        if ($user) {
            return new User($user);
        }
        return null;
    }

    /**
     * Récupère un user par son login.
     * @param string $login
     * @return ?User
     */
    public function getUserByLogin(string $login) : ?User 
    {
        $sql = "SELECT * FROM user WHERE login = :login";
        $result = $this->db->query($sql, ['login' => $login]);
        $user = $result->fetch();
        if ($user) {
            return new User($user);
        }
        return null;
    }

    /**
     * Met à jour un user.
     * @param User $user
     * @return void
     */
    public function updateUser(User $user) : void 
    {
        $sql = "UPDATE user SET login = :login, password = :password, name = :name, image = :image WHERE id = :id";
        $this->db->query($sql, [
            'login' => $user->getLogin(),
            'password' => $user->getPassword(),
            'name' => $user->getName(),
            'image' => $user->getImage(),
            'id' => $user->getId()
        ]);
    }

    public function createUser(User $user) : void 
    {
        $sql = "INSERT INTO user (login, password, name) VALUES (:login, :password, :name)";
        $this->db->query($sql, [
            'login' => $user->getLogin(),
            'password' => $user->getPassword(),
            'name' => $user->getName(),
        ]);
    }
}