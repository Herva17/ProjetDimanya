<?php

//Connexion à la base de données
include_once "../connexion.php";

//On recupere les Id dans les liens
$Id = $_GET["ID"];
//Requette de suppression
$req= " DELETE FROM temoignage WHERE id= $Id ";
$execution=mysqli_query($Con, $req);
if($execution){
// Redirection vers la page d'accueil
header("Location:ajouteTemoignage.php");
}

