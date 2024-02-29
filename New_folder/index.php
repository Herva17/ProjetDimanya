<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="css/style.css">
    <style>

    </style>
</head>

<body>
    <div class="container">
        <div class="form">
            <div class="log"> <img src="../img/DIMANYA_LOGO3.jpg" alt=""></div>
            <form action="" method="POST">
                <h1>DimanyaWorld</h1><br><br>
                <label for="username">Utilisateur</label><br>
                <input type="text" id="username " name="pseudo"><br>
                <label for="password">Mot de passe</label><br>
                <input type="password" id="possword" name="mdp"><br>
                <input type="submit" value="Se connecter" name="valider"><br>
                <?php
                include "login.php";
                ?>

                <a href="">for get possword</a><br>
                <a href="">vous n'avez pas de compte</a>
            </form>

        </div>

    </div>
</body>

</html>