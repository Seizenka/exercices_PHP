<?php
    echo "<h1>La calculatrice</h1>";
    //Première possibilité : if...else 

    //note : echo '<script>alert

    $nbr1 = $_GET['nombre1'];
    $nbr2 = $_GET['nombre2'];
    $operator = $_GET['méthode'];
    
    if(isset($_GET['resultat'])){
        //Déclarer lorsque l'un des champs est vide
        if($nbr1 == "" || $nbr2 == ""){
            echo '<script langage="javascript">alert("L\'un des champs est vide");</script>';
        }elseif($operator == "addition"){
            $result = $nbr1 + $nbr2;
            echo $result;
        }
    }






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
            <option name="addidtion" value="addition">+</option>
            <option name="soustraction" value="soustraction">-</option>
            <option name="division" value="division">/</option>
            <option name="multiplication" value="multiplication">x</option>
        </select>
        Deuxième nombre : <input name="nombre2" size=25 type="number"/><p></p>
        <input type=submit value="resultat" name="resultat"/>
    </form>
</body>
</html>