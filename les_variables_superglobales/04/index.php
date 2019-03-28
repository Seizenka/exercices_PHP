<?php
     echo "<h1>PHP - Les variables superglobales - Exercice 4</h1>";
    if(isset($_GET['recuperation'])){
        if(isset($_COOKIE['username']) AND isset($_COOKIE['password'])){
            echo '<p>Votre login est : '.$_COOKIE['username'].'</p>';
            echo '<p>Votre mot de passe est : '.$_COOKIE['password'].'</p>';
        }
    }
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHP - Les variables superglobales - Exercice 4</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<form name="login" action="index.php" method="GET">
    <input type=submit value="recuperation" name="recuparation"/>
</form>
</body>
</html>