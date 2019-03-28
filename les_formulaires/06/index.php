<?php
    echo "<h1>PHP - Les formulaires - Exercice 6.</h1>";
    
    if(isset($_GET['envoyer'])){
        $nom = $_GET['nom'];
        $prenom = $GET['prenom'];
        $genre = $_GET['genre'];

        if(empty($nom) || empty($prenom)){
            '<form action="index.php" method="GET">
            <select name="genre">
            <option value="Homme">Homme</option>
            <option value="Femme">Femme</option>
            </select><p></p>
            Votre nom : <input name="nom" size=25 type="text"/><p></p>
            Votre prenom : <input name="prenom" size=25 type="text"/><p></p>
            <input type=submit value="envoyer" name="envoyer"/>
        </form>';
        }
        else{
            echo $genre." ".$nom." ".$prenom;
            echo '<form action="index.php" method="GET" style="display=none;>';
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHP - Les formulaires - Exercice 6</title>
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