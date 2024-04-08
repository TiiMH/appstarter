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
        $values = $this->request->getPost(['login', 'password']);
        if (!empty($values) && $values['login'] == APP_ADMIN_LOGIN &&
        $values['password'] == APP_ADMIN_PASSWORD) 
        {
            return redirect()->to('/home');
        } 
        else 
        {
            return redirect()->to('/login');
        }
            
    }
}
