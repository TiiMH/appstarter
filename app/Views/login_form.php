
<?php
if(isset($background) && $background==true) {
        
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <style>
        /* CSS pour la mise en page */
        body {
            font-family: Arial, sans-serif;
            background-color: <?php echo isset($background) && $background == true ? '#f4f4f4' : '#fff'; ?>;
        }
        .container {
            width: 300px;
            margin: 0 auto;
            padding: 20px;
            background-color: <?php echo isset($background) && $background == true ? '#fff' : '#fff'; ?>;
            border-radius: 5px;
            margin-top: 100px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        input[type="text"], input[type="password"], input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Se connecter</h2>
        <form action="/attempt-login" method="post">
            <label for="login">matricule abonné / identifiant admin</label>
            <input id="login" name="username" type="text" />
            <label for="password">nom abonné / mot de passe admin</label>
            <input id="password" name="password" type="password" />
            <button type="submit">Se connecter</button>
            <a href="page.html">pagehtml</a>
        </form>
    </div>
</body>
</html>
