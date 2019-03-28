<?php
echo "<h1>Les paramètres d'URL - Exercice 1</h1>";

//1
    if(isset($_GET['nom'])){
        $nom = $_GET['nom'];
        $prenom = $_GET['prenom'];
        echo $nom."".$prenom;
    }
    else{
        echo "Inexistant";
    }

//2

    if(isset($_GET['age'])){
        $age = $_GET['age'];
        echo $age;
    }
    else{
        echo "Age n'ixexsistant";
    }

//3

    if(isset($_GET['date_debut'])){
        $dateDebut = $_GER['date_debut'];
        echo $dateDebut. "";
    }
    
    if(isset($_GET['date_fin'])){
        $dateFin = $_GET['date_fin'];
        echo $dateFin;
    }

//4

    if(isset($_GET['langage'])){
        $langage = $_GET['langage'];
        echo $langage;
    }

    if(isset($_GET['serveur'])){
        $serveur = $_GET['serveur'];
        echo $serveur;
    }

//5

    if(isset($_GET['semaine'])){
        $semaine = $_GET['semaine'];
        echo $semaine;
    }

//6

    if(isset($_GET['batiment'])){
        $batiment = $_GET['batiment'];
        echo $batiment;
    }

    if(isset($_GET['salle'])){
        $salle = $_GET['salle'];
        echo $salle;
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHP - Les paramètres d'URL - Exercice 1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    
</body>
</html>