<?php 
//   connexion à la base de données 
$Con= mysqli_connect("localhost","root","","dbdimanyaworld");
if(!$Con){
echo"Vous n'étez pas connecte à la base de données";
}

?>