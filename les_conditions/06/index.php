<?php
echo "<h1>Les conditions - Exercice 6</h1>";
/* <?php
  echo ($monAge >= 18) ? 'Tu es majeur' : 'Tu n\'es pas majeur';
?>
*/
    $monAge = $_GET["age"];
    if(isset($_GET["envoyer"])){
        if($monAge >= 18){
            echo "Tu es majeur";
        } else{
            echo "Tu n'es pas majeur";
        }
    }

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHP - Les Conditions - Exercice 6</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<form action="index.php" method="GET">
    Entrez votre âge : <input name="age" size=25 type="number"/><p></p>
    <input type=submit value="envoyer" name="envoyer"/>
</form>
</body>
</html>