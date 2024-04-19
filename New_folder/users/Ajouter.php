<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DimanyaWorld</title>
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
            <input type="submit" value="Ajouter" name="button" id="button">
            <?php
            include_once "../connexion.php";
            // Verifier que le bouton a été clique

            if (isset($_POST['button'])) {
                if (empty($_POST['Nom']) || empty($_POST['mail']) || empty($_POST['pass'])) {
                    $message = " Utilisateur non ajouté ";
                } else {
                    $Nom = htmlspecialchars( $_POST['Nom']);
                    $mail =htmlspecialchars(  $_POST['mail']);
                    $pass =htmlspecialchars(   $_POST['pass']) ;

                    //Requette d'ajout
                    $req = "INSERT INTO users(id,NomUtilisateur,AdresseMail,MotDePasse)VALUES(0, '$Nom','$mail','$pass')";
                    $execution = mysqli_query($Con, $req);

                    if ($execution) {
                        header("location:../user.php");
                    } else {
                        $message = " Utilisateur non ajouté ";
                    }
                }
            }
            ?>
        </form>
    </div>
</body>

</html>