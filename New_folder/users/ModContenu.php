<?php

//Connexion à la base de données

include_once "../connexion.php";
//On recupere les Id dans les liens
$Id = $_GET['ID'];
//Requette d'ajout
$req = mysqli_query($Con, "SELECT * FROM contenusslider WHERE ID= $Id ");
$row = mysqli_fetch_assoc($req);
// Verifier que le bouton a été clique

if (isset($_POST['button'])) {
    //Extraction des informations envoyés par des variables par la methode POST
      $experience=htmlspecialchars($_POST['experience']);
      $titre1=htmlspecialchars($_POST['titre1']);
      $titre2=htmlspecialchars($_POST['titre2']);
      $membres=htmlspecialchars($_POST['membres']);
      $projets=htmlspecialchars($_POST['Nprojets']);
      $client=htmlspecialchars($_POST['clientsS']);
      $req="UPDATE contenusslider SET Experience='$experience',TitreSlider1='$titre1',TitreSlider2='$titre2',membres='$membres',Nprojets='$projets',clientsS='$client'";
      $execution=mysqli_query($Con,$req);
    if ($execution) {
            header("location:../setting_site.php");
        } else {
            $message = "Utilisateur non modifie";
        }
    } 

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier</title>
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
        input[type="text"] {
            height: 40px;
        }
    </style>
</head>

<body>

    <div class="form">
        <a href="../setting_site.php" class="back_btn"><img src="" alt="">Retour</a>
        <h2>CONTENU SITE</h2>
        <p class="Erreur_message">
            <?php
            if (isset($message)) {
                echo $message;
            }
            ?>
        </p>
        <form action="" method="POST">
            <label>Année d'experience</label>
            <input type="text" name="experience" value="<?= $row['Experience'] ?>">
            <label>Titre Slider1</label>
            <input type="text" name="titre1" value="<?= $row['TitreSlider1'] ?>">
            <label>Titre Slider2</label>
            <input type="text" name="titre2" value="<?= $row['TitreSlider2'] ?>">
            <label>Membres</label>
            <input type="text" name="membres" value="<?= $row['membres'] ?>">
            <label>Projets</label>
            <input type="text" name="Nprojets" value="<?= $row['Nprojets'] ?>">
            <label>Clients</label>
            <input type="text" name="clientsS" value="<?= $row['clientsS'] ?>">
            <input type="submit" value="Modifier" name="button">
        </form>
    </div>
</body>

</html>