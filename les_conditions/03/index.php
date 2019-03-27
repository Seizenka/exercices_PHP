<?php
echo "<h1>Les conditions - Exercice 3</h1>";

/* 
    Vous êtes un homme et vous êtes majeur
    Vous êtes un homme et vous êtes mineur
    Vous êtes une femme et vous êtes majeur
    Vous êtes une femme et vous êtes mineur
*/
if(isset($_GET['envoyer'])){
    $age = $_GET['age'];
    $genre = $_GET['genre'];
    if($genre == "Femme" AND $age >= 18){
        echo "Vous êtes une femme et vous êtes majeure";
    }elseif($genre == "Femme" AND $age < 18){
        echo "Vous êtes une femme et vous êtes mineur";
    }
    if($genre == "Homme" AND $age >= 18){
        echo "Vous êtes un homme et vous êtes majeur";
    }elseif($genre == "Homme" AND $age < 18){
        echo "Vous êtes un homme et vous êtes mineur";
    }
}
   


?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHP - Les conditions - Exercice 3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    
<form action="index.php" method="GET">
    Entrez votre âge : <input name="age" size=25 type="number"/>
    <select name="genre">
    <option value="Homme">Homme</option>
    <option value="Femme">Femme</option>
    </select>
    <input type=submit value="submit" name="submit"/>
</form>
    

</body>
</html>