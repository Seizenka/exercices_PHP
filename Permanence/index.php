<?php

    if (isset($_POST['envoyer'])) { 
        if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['mail'])){
            echo 'test';
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $mail = $_POST['mail'];
            //trim
            $nom = trim($nom);
            $prenom = trim($prenom);
            $mail = trim($mail);
            //valide
            $mail = filter_val($mail, FILTER_VALIDATE_EMAIL);
            //sanitize
            $nom = filter_var($nom, FILTER_SANITIZE_STRING);
            $prenom = filter_var($prenom, FILTER_SANITIZE_STRING);
            $mail= filter_var($nom, FILTER_SANITIZE_MAIL);
            if(isset($nom) && isset($prenom) && isset($mail)){
                $subject = "Exercice de permanence sur le formulaire - sanitisation et l'envoi du mail";
                $text = $nom;
                $text .= $prenom;
                $text .= $mail;
                mail("caesteckercassandra@gmail.com", $subject, $text); //Fonction du mail
                echo $subject;
                echo $text;
            }

        }
        else {
            echo 'fail';
        }
    }

?>

<!-- Note: 

    - La fonction trim : supprimer les espaces avant et après
    - $variable = nouvelle variable
      $variable .= autre variable
      .= concaténation de variable s'il y en a plusieurs
    - Possibilité de raccourcir le code dans un tableau directement
    - La fonction mail existe pour l'envoi des mails
    -->

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Permanence : formulaire // sanitisation</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />

</head>

<body>

    <form action="index.php" method="POST" name="form" class="form">
        Votre nom : <input type="text" placeholder="nom" name="nom" class="nom" required>
        <p></p>
        Votre prénom: <input type="text" placeholder="prenom" name="prenom" class="prenom" required>
        <p></p>
        Votre adresse mail: <input type="text" placeholder="mail" name="mail" class="mail" required>
        <input type="submit" name="envoyer" class="envoyer">
    </form>

</body>

</html>