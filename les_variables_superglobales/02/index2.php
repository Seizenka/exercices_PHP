<?php
echo "<h1>PHP - Les variables superglobales - Exercice 2</h1>";
    session_start();
    echo '<p class="prenom">Votre prenom est : '.$_SESSION['prenom'].'</p>';
    echo '<p class="nom">Votre nom est : '.$_SESSION['nom'].'</p>';
    echo '<p class="age">Vous avez : '.$_SESSION['age'].' ans.</p>';

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHP - Les variables superglobales - Exercice 2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    
</body>
</html>