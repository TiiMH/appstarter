<!DOCTYPE html>
<html lang="fr">

<head>

<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets\styles.css">
    <title>Achete-ton-livre-et-fais-pas-chier.com </title>
</head>

<header>
        <h1>Book King</h1>
        <?php if (isset($loggedIn) && $loggedIn == true) : ?> 
            <span>Bonjour, <?= esc($name) ?></span> 
        <?php endif ?>  
        <nav>
            <ul>
                <li><a href="#">Menu</a></li>
                <li><a href="#">Gestion des Abonnés</a></li>
                <li><a href="#">Gestion des Livres</a></li>
                <li><a href="#">Gestion des Exemplaires</a></li>
                <li><a href="#">Gestion des Emprunts</a></li>
                <li><a href="#">Gestion des Retours</a></li>
                <li><a href="#">Gestion des Demandes</a></li>
            </ul>
        </nav>
    </header>
<body>

