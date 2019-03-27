<?php
echo "<h1>Les conditions - Exercice 7</h1>";
/* <?php
  echo ($maVariable == false) ? 'c\'est pas bon !!!' : 'c\'est ok !!';
?>  */

    $maVariable = false;
    if(isset($_GET["envoyer"])){
        if($maVariable == "false"){
            echo "C'est pas bon !";
        } else{
            echo "C'est ok !";
        }
    }

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHP - Les conditions - Exercice 7</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<form action="index.php" method="GET">
    False or True ? <input name="false" size=25 type="text"/><p></p>
    <input type=submit value="envoyer" name="envoyer"/>
</form>
</body>
</html>