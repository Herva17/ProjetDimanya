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
    </style>
</head>

<body>
    <?php
    include_once "../connexion.php";
    $img1 = "";
    $img2 = "";
    $img3 = "";
    // Verifier que le bouton a été clique
    if (isset($_POST['Ajouter'])) {
        

        $img1 = $_FILES['img1']['name'];
        $img2 = $_FILES['img2']['name'];
        $img3 = $_FILES['img3']['name'];

        $upload1 = "../../img/" . $img1;
        $upload2 = "../../img/" . $img2;
        $upload3 = "../../img/" . $img3;

        move_uploaded_file($_FILES["img1"]["tmp_name"], $upload1);
        move_uploaded_file($_FILES["img2"]["tmp_name"], $upload2);
        move_uploaded_file($_FILES["img3"]["tmp_name"], $upload3);

        $Tem1 = $_POST['temoignage1'];
        $Tem2 = $_POST['temoignage2'];
        $Tem3 = $_POST['temoignage3'];

        $req = "INSERT INTO temoignage(id, photocl1, photocl2, photocl3, temoignagecl1, temoignagecl2, temoignagecl3) VALUES (0,'$img1','$img2','$img3','$Tem1','$Tem2','$Tem3')";
        $execution=mysqli_query($Con, $req);
        if ($execution) {
            header("location:../temoignage.php");
        } else {
            $message = " Temoignage Ajouté ";
        }
    } else {
        // Si non
        $message = "veillez remplir tous les champs!";
    }
    //  }
    // }
    ?>

    <div class="form">
        <a href="../temoignage.php" class="back_btn"><img src="" alt="">Retour</a>
        <h2>Ajouter le temoignage</h2>
        <p class="Erreur_message">
            <!-- veuillez remplir tous les champs ! -->
            <?php
            // si la variable message existe affichons son contenu
            if (isset($message)) {
                echo $message;
            }
            ?>
        </p>
        <form action="ajouteTemoignage.php" method="POST" enctype="multipart/form-data">
            <label>Client 1</label>
            <input type="file" name="img1" required>
            <label>Client 2</label>
            <input type="file" name="img2" required>
            <label>Client 3</label>
            <input type="file" name="img3" required>
            <label>Temoignage 1</label>
            <input type="text" name="temoignage1" required autocomplete="off">
            <label>Temoignage 2</label>
            <input type="text" name="temoignage2" required autocomplete="off">
            <label>Temoignage 3</label>
            <input type="text" name="temoignage3" required autocomplete="off">
            <input type="submit" value="Ajouter" name="Ajouter">
        </form>
    </div>
</body>

</html>