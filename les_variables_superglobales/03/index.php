<?php
    echo "<h1>PHP - Les variables superglobales - Exercice 3</h1>";

    if(isset($_GET['envoyer'])){
        setcookie('username', $_GET['login'], false);
        setcookie('password', $_GET['password'], false);
    }

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHP - Les variables superglobales - Exercice 3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <form name="login" action="index.php" method="GET">
    Votre identifiant : <input name="login" size=25 type="text"/><p></p>
    Votre mot de passe : <input name="password" size=25 type="text"/><p></p>
    <input type=submit value="envoyer" name="envoyer"/>
</form>
</body>
</html>