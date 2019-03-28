<?php
    echo "<h1>PHP - Les formulaires - Exercice 5.</h1>";
    
    if(isset($_GET['envoyer'])){
        $nom = $_GET['nom'];
        $prenom = $GET['prenom'];
        $genre = $_GET['genre'];

        if($genre == "Femme"){
            echo "Vous êtes une femme et vous vous appelez ".$nom.$prenom;
        }

        if($genre == "Homme"){
            echo "Vous êtes un homme et vous vous appelez ".$nom.$prenom;
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHP - Les formulaires - Exercice 5</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<form action="index.php" method="GET">
    <select name="genre">
    <option value="Homme">Homme</option>
    <option value="Femme">Femme</option>
    </select><p></p>
    Votre nom : <input name="nom" size=25 type="text"/><p></p>
    Votre prenom : <input name="prenom" size=25 type="text"/><p></p>
    <input type=submit value="envoyer" name="envoyer"/>
</form>
</body>
</html>