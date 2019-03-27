<?php
echo "<h1>Les conditions - Exercice 4</h1>";

$magnitude = $_GET['magnitude'];

        switch ($magnitude) {
            case '1':
                echo('Micro-séisme impossible à ressentir.');
                break;
            case '2':
                echo('Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.');
                break;
            case '3':
                echo('Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.');
            case '4';
                echo('Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.');
            case '5';
                echo('Séisme capable d\'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.');
            case '6';
                echo('Fort séisme capable d\'engendrer des destructions majeures sur une large distance (180 km) autour de l\'épicentre.');
            case '7';
                echo('Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.');
            case '8';
                echo('Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.');
            case '9';
                echo('Séisme capable de tout détruire sur une très vaste zone.');
                break;
            default:
                echo('Séisme de la mort qui tue');
        }

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHP - Les conditions - Exercice 4</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>

<form action="index.php" method="GET">
    Définissez la magnitude : <input name="magnitude" size=25 type="number"/><p></p>
    <input type=submit value="envoyer" name="envoyer"/>
</form>
    
</body>
</html>