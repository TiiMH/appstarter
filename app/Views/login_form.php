<h1>Se connecter</h1>
<?php
if(isset($background) && $background==true) {
        
}
?>
<form method="POST" action="/login">
        <label for="login">matricule abonné / identifiant
                admin</label>
        <input id="login" name="login" type="text" />
        <label for="password">nom abonné / mot de passe admin
        </label>
        <input id="password" name="password" type="password" />
        <button type="submit">Se connecter</button>
</form>