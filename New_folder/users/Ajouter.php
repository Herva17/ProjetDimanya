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
    // Verifier que le bouton a été clique

    if (isset($_POST['button'])) {
        $Nom = $_POST['Nom'];
        $mail = $_POST['mail'];
        $pass = $_POST['pass'];

        //Requette d'ajout
        $req = "INSERT INTO users(id,NomUtilisateur,AdresseMail,MotDePasse)VALUES(0, '$Nom','$mail','$pass')";
        $execution = mysqli_query($Con, $req);

        if ($execution) {
            header("location:../user.php");
        } else {
            $message = " Utilisateur non ajouté ";
        }
    } else {
        // Si non
        $message = "veillez remplir tous les champs!";
    }

    ?>
    <div class="form">
        <a href="../user.php" class="back_btn"><img src="" alt="">Retour</a>
        <h2>Ajouter l'utilisateur</h2>
        <p class="Erreur_message">
            <!-- veuillez remplir tous les champs ! -->
            <?php
            // si la variable message existe affichons son contenu
            if (isset($message)) {
                echo $message;
            }
            ?>
        </p>
        <form action="" method="POST">
            <label>Nom Utilisateur</label>
            <input type="text" name="Nom">
            <label>Adresse mail</label>
            <input type="text" name="mail">
            <label>Mot de passe</label>
            <input type="text" name="pass">
            <input type="submit" value="Ajouter" name="button">
        </form>
    </div>
</body>

</html>