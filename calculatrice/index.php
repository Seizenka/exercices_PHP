<?php
    //Première possibilité : if...else 

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHP - La calculatrice</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <form name="calculatrice" action="index.php" method="GET">
    Votre identifiant : <input name="login" size=25 type="number"/><p></p>
    Votre mot de passe : <input name="password" size=25 type="number"/><p></p>
    <input type=submit value="envoyer" name="envoyer"/>
    </form>
</body>
</html>