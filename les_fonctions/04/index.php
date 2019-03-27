<?php
    echo "<h1>PHP le fonctions - Exercie 4</h1>";

    function compare($premierNbr , $deuxiemeNbr){
        if($premierNbr > $deuxiemeNbr){
            echo "Le premier nombre est plus grand que le deuxième";
        } else if($premierNbr < $deuxiemeNbr){
            echo "Le premier nombre est plus petit que le deuxième";
        } else if($premierNbr == $deuxiemeNbr){
            echo "Les deux nombres sont identiques";
        }
    }
    compare(8,8);
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHP - Les fonctions - Exercice 4</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    
</body>
</html>