<?php
    echo "<h1>PHP - Les variables superglobales - Exercice 1</h1>";
    
    $userAgent = $_SERVER['HTTP_USER_AGENT'];
    $userIP = $_SERVER['REMOTE_ADDR'];
    $serverName = $_SERVER['SERVER_NAME'];

    echo '<p class="agent"> Le navigateur est : '.$userAgent. '</p>';
    echo '<p class="ip"> L\'adresse IP est : '.$userIP. '</p>';
    echo '<p class="server"> Le serveur actuel est : '.$serverName. '</p>';
    

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHP - Les variables superglobales - Exercice 1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    
</body>
</html>