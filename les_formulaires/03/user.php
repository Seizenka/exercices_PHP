<?php
    echo "<h1>PHP - Les formulaires - Exercice 1.</h1>";
    $nom = $_GET["nom"];
    $prenom = $_GET['prenom'];
    echo $nom." ".$prenom; 
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHP - Les formulaires - Exercice 1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    
<form action="user.php" method="GET">
    Votre nom ? <input name="nom" size=25 type="text"/><p></p>
    Votre prénom ? <input name="prenom" size=25 type="text"/><p></p>
    <input type=submit value="envoyer" name="envoyer"/>
</form>
</body>
</html>