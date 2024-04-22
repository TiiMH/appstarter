<?php
namespace App\Controllers;

Class Connection extends BaseController
{
    public function index(): string 
    {
         $template = 
            view ('templates/header.php').
            view ('login_form').
            view ('templates/footer.php');
          return $template;   
    }
    public function attemptLogin() 
    {
        // on créé une instance de Abonne qui va permettre d'appeler sa méthode
        $abonneModel = new \App\Models\Abonne();
        // on teste le mot de passe (si c'est celui de l'admin)
        $values = $this->request->getPost(['login', 'password']);
        if (!empty($values) && $values['login'] == APP_ADMIN_LOGIN &&
        $values['password'] == APP_ADMIN_PASSWORD) 
        {
            return $this->loginUser();
        } 
        /* Si ce n'est pas l'admin, on appelle la méthode de récupération d'un abonné 
            à partir de la saisie de l'utilisateur */
        $rechercheAbonne = $abonneModel -> getAbonneByMatricule($values['login']);
        /* On vérifie qu'on a bien récupéré un abonné et que son nom
            corresponde au mot de passe tapé par l'utilisateur */
        if (isset($rechercheAbonne) && $rechercheAbonne['nom_abonne'] === $values['password']){
            return redirect()->to("home");
        }
        else 
        {
            // sinon on s'est trompé : on redirige vers le login
            return redirect()->to('/login');
        }
            
    }

    /**
     * Retrouve une ligne de la table abonne par son matricule_abonne
     */

     private function loginUser(?object $user = null)
     {
        $session = session();
        $session->set([
            'username' => isset($user) ? ($user['nom_abonne'] . strtoupper($user['nom_abonne'])) : 'Administrator',
            'loggedIn' => true
        ]);
        return redirect()->to("home");
     }
}