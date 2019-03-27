<?php
    echo "<h1>Les tableaux - Exercice 3</h1>";

    $department['01'] = 'Ain';
    $department['03'] = 'Allier';
    $department['07'] = 'Ardèche';
    $department['15'] = 'Cantal';
    $department['26'] = 'Drôme';
    $department['38'] = 'Isère';
    $department['42'] = 'Loire';
    $department['43'] = 'Haute-Loire';
    $department['63'] = 'Puy-de-Dôme';
    $department['69'] = 'Rhône';
    $department['73'] = 'Savoie';
    $department['74'] = 'Haute-Savoie';

    echo "<p>".$department['69'].""."</p>";

    $department['57'] = 'Moselle';
    asort($department);
    foreach($department as $key => $value){
        echo "<p>"."Le département ".$value." a le numéro ".$key.""."</p>";
    }
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHP - Les tableaux - Exercice 3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    
</body>
</html>