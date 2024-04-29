<?php 

namespace App\Controllers;

Class AbonnesControl extends BaseController 
{
    public function index(): string
   {
    
    $session = session(); 
    $template = 
    view('templates\header.php', [
        'loggedIn' => $session -> get ('loggedIn'),
        'name' => $session -> get ('username')
    ]) . view('abonnes') . view('templates\Side_bar.php').
    view ('templates\footer.php'); 
    return $template; 
   }
}

