<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHP - Les variables - Exercice 1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h1>Les variables - Exercice 1</h1>

    <?php
 $prenom = 'Cassandra';
 $nom = 'Caestecker';
 $age = 21;
 echo "Bonjour $prenom, enfant de la famille $nom ayant atteint de level $age !";
 var_dump($prenom);
 var_dump($nom);
 var_dump($age);
 ?>
    
</body>
</html>