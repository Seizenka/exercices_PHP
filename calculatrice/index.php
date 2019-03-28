<?php
    //Première possibilité : if...else 

    //note : echo '<script>alert
    $nbr1 = $_GET['nombre1'];
    $nbr2 = $_GET['nombre2'];
    $result = $_GET['resultat'];




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
        Premier nombre : <input name="nombre1" size=25 type="number"/>
        <select name="méthode">
            <option value="addition">+</option>
            <option value="soustraction">-</option>
            <option value="division">/</option>
            <option value="multiplication">x</option>
        </select>
        Deuxième nombre : <input name="nombre2" size=25 type="number"/><p></p>
        <input type=submit value="resultat" name="resultat"/>
    </form>
</body>
</html>