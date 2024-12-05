<?php
session_start();
include_once "connexion.php"; //  la connexion à la base de données

if (isset($_POST['valider'])) {
    if (empty($_POST['pseudo']) || empty($_POST['mdp'])) {
        ?>
           <p style="color: red;">Veiller remplir tous les champs svp!</p> 
            <?php
    } else {
        $nom = $_POST['pseudo'];
        $pass = $_POST['mdp'];

        // Utilisation de requête préparée pour éviter les injections SQL
        $requete = "SELECT * FROM users WHERE NomUtilisateur=? AND MotDePasse=?";
        $stmt = mysqli_prepare($Con, $requete);

        // Liaison des paramètres et exécution de la requête
        mysqli_stmt_bind_param($stmt, "ss", $nom, $pass);
        mysqli_stmt_execute($stmt);
        $resultat = mysqli_stmt_get_result($stmt);

        if (mysqli_num_rows($resultat) > 0) {
            // Utilisateur authentifié
            $_SESSION['pseudo'] = $nom; // Stockage du nom d'utilisateur en session
            
            // Affichage de la barre de progression circulaire et redirection après 10 secondes
            echo <<<HTML
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        .progress-circle-wrapper {
            width: 80px; /* Largeur et hauteur réduites */
            height: 80px; /* Largeur et hauteur réduites */
            position: relative;
            margin: 50px auto;
        }
        .progress-circle {
            width: 100%;
            height: 100%;
            background-color: #f3f3f3;
            border-radius: 50%;
            position: absolute;
            clip: rect(0px, 80px, 80px, 40px); /* Ajustement du clip pour une taille plus petite */
            animation: spin 10s linear infinite;
        }
        .progress-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            font-size: 14px; /* Taille du texte ajustée */
            color: #333;
        }
        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }
    </style>
</head>
<body>
    <div class="progress-circle-wrapper">
        <div class="progress-circle"></div>
        <div class="progress-text"></div>
    </div>

    <script>
        setTimeout(function() {
            window.location.href = 'accueil.php'; // Rediriger vers la page d'accueil
        }, 10000); // Attendre 10 secondes
    </script>
</body>
</html>
HTML;

            exit(); // Arrêter l'exécution du script PHP après l'affichage de la page de redirection
        } else {
            ?>
           <p style="color: red;">Nom d'utilisateur ou mot de passe incorrect!</p> 
            <?php
        }
    }
}
?>
