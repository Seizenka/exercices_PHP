<?php
    echo "<h1>La calculatrice</h1>";

    //Première possibilité : if...else//

    $nbr1 = $_GET['nombre1'];
    $nbr2 = $_GET['nombre2'];
    $operator = $_GET['méthode'];//Operateur qui comprend l'addition - soustracteur - division - multiplication
    
    /*if(isset($_GET['resultat'])){
        //Déclarer lorsque l'un des champs est vide
        if($nbr1 == "" || $nbr2 == ""){
            echo '<script langage="javascript">alert("L\'un des champs est vide");</script>';
        }
        elseif($operator == "addition"){
            //On configure l'addition
            $result = $nbr1 + $nbr2;
            echo $result;
        }
        elseif($operator == "soustraction"){
            //On configure la soustraction
            $result = $nbr1 - $nbr2;
            echo $result;
        }
        elseif($operator == "division"){
            //On configure la division
            $result = $nbr1 / $nbr2;
            echo $result;
        }
        elseif($operator == "multiplication"){
            //On configure la multiplication
            $result = $nbr1 * $nbr2;
            echo $result;
        }
    }*/

    //Première méthode if...else fonctionnelle

    //Deuxième possibilité : switch//

    switch($operator){
        case "addition":
            $result = $nbr1 + $nbr2;
            echo $result;
            break;
        //Addition fonctionne

        case "soustraction":
            $result = $nbr1 - $nbr2;
            echo $result;
            break;
        //Soustraction fonctionne

        case "division":
            $result = $nbr1 / $nbr2;
            echo $result;
            break;
        //Division fonctionne

        case "multiplication":
            $result = $nbr1 * $nbr2;
            echo $result;
            break;
        //Multiplication fonctionne
    }

    //Deuxième méthode switch fonctionnelle

    //Troisième possibilité function//

/*if(isset($_GET['resultat'])){
    function operateur($operator){
         function addition($nbr1, $nbr2){
             $result = $_GET['nombre1'] + $_GET['nombre2'];
             echo $result;
         }
         addition();
         //On configure l'addition

         function soustraction($nbr1, $nbr2){
             $result = $_GET['nombre1'] - $_GET['nombre2'];
             echo $result;
         }
         soustraction();
         //On configure la soustraction

         function division($nbr1, $nbr2){
             $result = $_GET['nombre1'] / $_GET['nombre2'];
             echo $result;
         }
         division();
         //On configure la division

         function multiplication($nbr1, $nbr2){
             $result = $_GET['nombre1'] * $_GET['nombre2'];
             echo $result;
         }
         multiplication();
         //On configure la multiplication
    }
    operateur();
}*/
    //Troisième méthode function fonctionnelle

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