<?php
echo "<h1>Les paramètres d'URL - Exercice 1</h1>";
    if(isset($_GET['nom'])){
        $nom = $_GET['nom'];
        $prenom = $_GET['prenom'];
        echo $nom."".$prenom;
    }
    else{
        echo "Inexistant";
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