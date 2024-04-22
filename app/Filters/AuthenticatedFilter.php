<?php
namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

/**
 * Filtre d'authentification - filtre les requêtes non-authentifiées (utilisateur non-connecté)
 */
class AuthenticatedFilter implements FilterInterface
{
   /**
    * Avant d'exécuter une route qui applique ce filtre, on executera cette méthode 
    */ 
    public function before(RequestInterface $request, $args = null)
    {
        // on récupère la session
        $session = session();
        // si la session possède un attribut loggedIn et qu'i vaut 'true', on exécute la requête
        if ($session->has('loggedIn') && $session->get('loggedIn') == true) {
            return $request;
        } else {
            // sinon, on redirige vers la page de login
            return redirect()->to('login'); 
        }
    }

    /**
     * On doit définir les 2 méthodes même si on n'en n'utilise qu'une
     */
    public function after(RequestInterface $request, ResponseInterface $response, $args = null)
    {   
    }
}