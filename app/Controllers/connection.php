<?php

namespace App\Controllers;

class Connection extends BaseController
{
    public function index(): string
    {
        return view('templates/header',['background'=>true]). view('login_form').view('templates/footer');
    }

    public function attemptLogin()
    {

        // on créé une instance de  abonne qui va permettre d'appeler sa méthode
        $abonneModel = new \App\Models\Abonne();
        // on teste le mot de passe passe (si c'est celui de ladmin)
        $values = $this->request->getPost(['login', 'password']);
        if (
            !empty($values) && $values['login'] == APP_ADMIN_LOGIN &&
            $values['password'] == APP_ADMIN_PASSWORD
        ) {
            return $this->loginUser();
        } /*si ça n'est pas l'admin, on appelle la méthode de récupération d'un abonne 
        à partir de la saisie de lutilisateur */
        if (isset($rechercheAbonne) && $rechercheAbonne['nom_abonne'] === $values['password'])
            return $this->loginUser($rechercheAbonne);
        else {
            // sinon on s'est trompé : on redirige vers le login
            return redirect()->to("/login");
        }
    }
    /**
     * Méthode qui enregistre en session l'utilisateur connecté
     */

    private function loginUser($user = null)
     {
        $session = session();
        $session->set([
            'username' => isset ($user) ? ($user['nom_abonne'] . strtoupper($user['nom_abonne'])) : 'Administrator',
            'loggedIn' => true
        ]);
        return redirect()->to("/home");
    }
}
