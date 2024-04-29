<?php 

namespace App\Controllers; 

Class LivreControl extends BaseController 
{
    public function index() : string 
    {
        $session = session(); 
        $templates = 
        view('templates\header.php', [
            'loggedIn' => $session -> get('loggedIn'), 
            'name' => $session -> get ('username')
        ]) . view('templates\footer.php'); 
        return $templates;  
    }
}