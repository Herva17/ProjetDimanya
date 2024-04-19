<?php
include_once "connexion.php";
// if(empty($_POST['mail'])){
//    ?>
   <script>
//       alert("Veillez inserer votre mail svp!");
//    </script>
   <?php
 if(isset($_POST['Send'])){
   if(empty($_POST['email'])){
      echo"Veillez inserer votre mail svp!";
   } else{
      $mail= $_POST['email'];
      $req= "INSERT INTO newsletters(id, newletter)Values(0,'$mail')";
      $execute = mysqli_query($Con, $req);
      if($execute){
       echo"Votre mail a été envoyer avec succès";
      } else {
         echo"une erreur s'est produite";
      }
   } 
   }  
?>