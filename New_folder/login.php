<?php
include_once "connexion.php";
if (isset($_POST['valider'])) {
    $nom = $_POST['pseudo'];
    $pass = $_POST['mdp'];

    $requete = "SELECT * FROM users WHERE NomUtilisateur='$nom' AND MotDePasse='$pass'";
    $resultat = mysqli_query($Con, $requete);

    if ($resultat->num_rows > 0) {
        header('location:accueil.php');
    } else {
        ?>
       <script>
        alert("Il y'a une erreur veille saisir encore ");
       </script>
        <?php
    }
}

?>