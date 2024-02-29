<?php

//Connexion à la base de données

include_once "../connexion.php";
//On recupere les Id dans les liens
$Id = $_GET['ID'];
//Requette d'ajout
$req = mysqli_query($Con, "SELECT * FROM users WHERE ID= $Id ");
$row = mysqli_fetch_assoc($req);
// Verifier que le bouton a été clique

if (isset($_POST['button'])) {
    //Extraction des informations envoyés par des variables par la methode POST
    extract($_POST);
    //Verification que tous les champs ont été remplis
    if (isset($Nom) && isset($mail) && $pass) {
        //Requette de modification
        $req = mysqli_query($Con, " UPDATE users SET NomUtilisateur='$Nom',AdresseMail ='$mail',MotDePasse='$pass' WHERE Id='$Id'");

        if ($req) {
            header("location:../user.php");
        } else {
            $message = "Utilisateur non modifie";
        }
    } else {
        // Si non
        $message = "veillez remplir tous les champs!";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        body {
            background-color: rgb(8, 8, 55);
        }
        h2{
         color:rgb(11, 11, 57);
        }

        input[type="submit"] {
            margin-top: 25px;
            background-color: rgb(11, 11, 57);
            border: 1px solid rgb(12, 12, 45);
            cursor: pointer;
            color: #FFF;
            text-transform: uppercase;


        }
    </style>
</head>

<body>

    <div class="form">
        <a href="../user.php" class="back_btn"><img src="" alt="">Retour</a>
        <h2>Modifier l'utlisateur:</h2>
        <p class="Erreur_message">
            <?php
            if (isset($message)) {
                echo $message;
            }
            ?>
        </p>
        <form action="" method="POST">
            <label>Nom utulisateur</label>
            <input type="text" name="Nom" value="<?= $row['NomUtilisateur'] ?>">
            <label>Adresse mail</label>
            <input type="text" name="mail" value="<?= $row['AdresseMail'] ?>">
            <label>Mot de passe</label>
            <input type="text" name="pass" value="<?= $row['MotDePasse'] ?>">
            <input type="submit" value="Modifier" name="button">
        </form>
    </div>
</body>

</html>