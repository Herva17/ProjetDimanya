<?php
Session_start();
include_once "connexion.php";
if (isset($_POST['valider'])) {
    if (empty($_POST['pseudo']) || empty($_POST['mdp'])) {
        echo "Champs invalides";
    } else {
        $nom = $_POST['pseudo'];
        $pass = $_POST['mdp'];

        $requete = "SELECT * FROM users WHERE NomUtilisateur='$nom' AND MotDePasse='$pass'";
        $resultat = mysqli_query($Con, $requete);

        if ($resultat->num_rows > 0) {

            header('location:accueil.php');
            $_SESSION['mdp'] = $pass;
        } else {
?>
            <script>
                let afficher = () => {
                    alert("Il y'a une erreur dans vos saisis veillez saisir encore svp! ");
                }

                button.addEventListener("click", afficher);
            </script>
<?php
        }
    }
}

?>