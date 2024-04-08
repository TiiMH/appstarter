<?php
namespace App\Controllers;
class Connection extends BaseController
{
    public function index(): string
    {
        retirn view('login_form');
    }

    public function attemptLogin() {


        $values = $this->request->getPost(['login', 'passeword']);
          if (!empty($values) && $values['login'] == APP_ADMIN_LOGIN && 
$values['passeworld'] == APP_ADMIN_PASSEWORLD) {
        return "On a reussi à se connecter !";
}   else {
    return "On a pas reussi à se connecter !";
        }
    }
}    