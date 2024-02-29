<?php 
// Connexion à la base de données

include_once"connexion.php";
$Id=$_GET["ID"];
//Requette de suppression
// $req= mysqli_query($Con, "DELETE FROM newsletters WHERE id= $Id " );
$req= " DELETE FROM messages WHERE id= $Id ";
$execution=mysqli_query($Con, $req);
if($execution){
// Redirection vers la page d'accueil
header("Location:Messages.php");
}
?>