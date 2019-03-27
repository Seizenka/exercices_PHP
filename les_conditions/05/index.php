<?php
    echo "<h1>Les conditions - Exercice 5</h1>";

    /*<?php
  echo ($maVariable != 'Homme') ? 'C\'est une développeuse !!!' : 'C\'est un développeur !!!';
?>*/

 $maVariable = $_GET["femme"];
 if(isset($_GET["envoyer"])){
     if($maVariable == "femme"){
        echo "C'est une développeuse !!!";
     } else{
         echo "C'est un développeur";
     }
 }

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHP - Les conditions - Exercice 5</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<form action="index.php" method="GET">
    Vous êtes un homme ou une femme ? : <input name="femme" size=25 type="text"/><p></p>
    <input type=submit value="envoyer" name="envoyer"/>
</form>
    
</body>
</html>