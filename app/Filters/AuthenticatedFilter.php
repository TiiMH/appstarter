<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class AuthenticatedFilter implements FilterInterface
{
    public function before(RequestInterface $request, $args = null)
    {
        // On recupere la session 
        $session = session();
        // si la session possede un attribut 'loggedIn' et qu'il vaut 'true', on execute la requete 
        if ($session->has('loggedIn') && $session->get('loggedIn') == true) {
            return $request;
        } else {
            //sinon on redirige vers la page de login 
            return redirect()->to('login');
        }
    }

    // On doit definir les 2 methodes meme si on n'en utilise qu'une 

    public function after(RequestInterface $request, ResponseInterface $response, $args = null)
    {
    }
}
