<?php 

class UserController 
{
    /**
     * Affiche la page de compte.
     * @return void
     */
    public function showAccount() : void
    {
        $userManager = new UserManager();
        $user = $userManager->getUserByLogin('User');

        $view = new View("Compte");
        $view->render("accountPage", ['user' => $user]);
    }

    /**
     * Affiche la page de connexion.
     * @return void
     */
    public function showLogin() : void
    {
        $view = new View("Connexion");
        $view->render("connectionForm");
    }    
}