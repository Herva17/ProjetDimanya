<?php 
// Connexion à la base de données

include_once"connexion.php";
$Id=$_GET["ID"];// $req= mysqli_query($Con, "DELETE FROM newsletters WHERE id= $Id " );
$req= " DELETE FROM users WHERE id= $Id ";
$execution=mysqli_query($Con, $req);
if($execution){
// Redirection vers la page d'accueil
header("Location:user.php");
}

//Requette de suppression
?>