<?php
include_once("../connexion.php");
$imges = "";
// Verifier que le bouton a été clique
if (isset($_POST['Ajouter'])) {
    

   

    $titre = htmlspecialchars($_POST['titre']);
    $description= htmlspecialchars($_POST['description']);

    $imges = $_FILES['imges']['name'];
    $upload1 = "../img/" . $imges;

    move_uploaded_file($_FILES["imges"]["tmp_name"], $upload1);

    $req = "INSERT INTO actualite(id,Titre,description) VALUES (0,'$titre','$description','$imges')";
    $execution=mysqli_query($Con, $req);
    if ($execution) {
        header("location:../Actualite.php");
    } else {
        echo"enregistrement effectuer";
    }
} else {
    // Si non
    echo"Non effectuer";
}