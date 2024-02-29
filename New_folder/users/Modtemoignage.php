<?php

//Connexion à la base de données

include_once "../connexion.php";
$img1 = "";
$img2 = "";
$img3 = "";
//On recupere les Id dans les liens
$Id = $_GET['ID'];
//Requette d'ajout
$req = mysqli_query($Con, "SELECT * FROM temoignage WHERE ID= $Id ");
$row = mysqli_fetch_assoc($req);
// Verifier que le bouton a été clique

if (isset($_POST['button'])) {
    //Extraction des informations envoyés par des variables par la methode POST

    //  $experience=$_POST['photocl1'];
    //  $titre1=$_POST['photocl2'];
    //  $titre2=$_POST['photocl3'];
    $img1 = $_FILES['img1']['name'];
    $img2 = $_FILES['img2']['name'];
    $img3 = $_FILES['img3']['name'];

    $upload1 = "../../img/" . $img1;
    $upload2 = "../../img/" . $img2;
    $upload3 = "../../img/" . $img3;

    move_uploaded_file($_FILES["img1"]["tmp_name"], $upload1);
    move_uploaded_file($_FILES["img2"]["tmp_name"], $upload2);
    move_uploaded_file($_FILES["img3"]["tmp_name"], $upload3);

    $membres = $_POST['temoignage1'];
    $projets = $_POST['temoignage2'];
    $client = $_POST['temoignage3'];

    $req = "UPDATE temoignage SET photocl1='$img1',photocl2='$img2',photocl3='$img3',temoignagecl1='$membres',temoignagecl2='$projets',temoignagecl3='$client'";
    $execution = mysqli_query($Con, $req);
    if ($execution) {
        header("location:../temoignage.php");
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

        h2 {
            color: rgb(11, 11, 57);
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

        input[type="file"] {
            background-color: seashell;
            font-size: 15px;
            color: black;

        }
    </style>
</head>

<body>

    <div class="form">
        <a href="../temoignage.php" class="back_btn"><img src="" alt="">Retour</a>
        <h2>CONTENU SITE</h2>
        <p class="Erreur_message">
            <?php
            if (isset($message)) {
                echo $message;
            }
            ?>
        </p>
        <form action="Modtemoignage.php" method="POST" enctype="multipart/form_data">
            <label>Prémier Client</label>
            <input type="file" name="img1"  required>
            <label>Sécond Client</label>
            <input type="file" name="img2"  required>
            <label>Troisieme Client</label>
            <input type="file" name="img3"  required>

            <label>Temoignage Client 1</label>
            <input type="text" name="temoignage1" value="<?= $row['temoignagecl1'] ?> " required autocomplete="off">
            <label>Temoignage Client 2</label>
            <input type="text" name="temoignage2" value="<?= $row['temoignagecl2'] ?>" required autocomplete="off">
            <label>Temoignage Client 3</label>
            <input type="text" name="temoignage3" value="<?= $row['temoignagecl3'] ?>" required autocomplete="off">
            <input type="submit" value="Modifier" name="button">
        </form>
    </div>
</body>

</html>