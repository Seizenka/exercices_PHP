<?php
echo "<h1>PHP - Les variables superglobales - Exercice 2</h1>";

    session_start();
    $_SESSION['prenom'] = "Cassandra";
    $_SESSION['nom'] = "Caestecker";
    $_SESSION['age'] = "21";
    echo '<a href="index2.php> Veuillez cliquer ici</a> pour afficher le contenu';
?>