<?php
require "new_folder/connexion.php";
if (isset($_POST['envoye'])) {
    // Vérifier si les champs sont vides
    if (empty($_POST['Nom']) || empty($_POST['mail']) || empty($_POST['objet']) || empty($_POST['message'])) {
?>
        <script>
            let afficher = () => {
                alert("Veillez remplir tous les champs");
            }

            button.addEventListener("click", afficher);
        </script>
        <?php
    } else {
        // Si les champs ne sont pas vides, vous pouvez traiter les données du formulaire ici
        $nom = htmlspecialchars ($_POST['Nom']);
        $mail = htmlspecialchars ($_POST['mail']);
        $objet = htmlspecialchars($_POST['objet']);
        $message = htmlspecialchars($_POST['message']);

        // Vous pouvez ajouter ici le code pour enregistrer les données dans une base de données, envoyer un email, etc.
        $req = " INSERT INTO messages(id, Nom, Email, Objet, Message) VALUES(0,'$nom','$mail',' $objet',' $message')";
        $Execution = mysqli_query($Con, $req);
        if ($Execution) {
           echo"La demande a été soumise avec succes";
        } else {
        ?>
            <script>
                let afficheur = () => {
                    alert("Une erreur est survenue");
                }

                button.addEventListener("click", afficheur);
            </script>
<?php
        }
    }
}
?>