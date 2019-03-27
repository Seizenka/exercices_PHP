<?php
    echo "<h1>PHP le fonctions - Exercie 7</h1>";

    /* 
    Vous êtes un homme et vous êtes majeur
    Vous êtes un homme et vous êtes mineur
    Vous êtes une femme et vous êtes majeur
    Vous êtes une femme et vous êtes mineur
*/

    function ageGenre($age , $genre){
        $homme = "Homme";
        $femme = "Femme";

        if($age >= 18 AND $genre === $homme){
            echo "Vous êtes un homme et vous êtes majeur";
        } 
        else if($age < 18 AND $genre === $homme){
            echo "Vous êtes un homme et vous êtes mineur";
        } 
        
        if($age >= 18 AND $genre === $femme){
            echo "Vous êtes une femme et vous êtes majeure";
        } 
        else if($age < 18 AND $genre === $femme){
            echo "Vous êtes une femme et vous êtes mineure";
        }
    }

    ageGenre(21 , "Femme");

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHP - Les fonctions - Exercice 7</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    
</body>
</html>