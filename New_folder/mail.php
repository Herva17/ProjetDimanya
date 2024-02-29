<?php
include_once "connexion.php";
// if(empty($_POST['mail'])){
//    ?>
   <script>
//       alert("Veillez inserer votre mail svp!");
//    </script>
   <?php
 if(isset($_POST['Send'])){
   $mail= $_POST['email'];
   $req= "INSERT INTO newsletters(id, newletter)Values(0,'$mail')";
   $execute = mysqli_query($Con, $req);
   if($execute){
      ?>
   <script>
      alert("Votre mail a éte envoyé avec succes");
   </script>
   <?php
   } else if(empty($_POST['mail'])) {
      ?>
      <script>
         alert("Veillez inserer votre mail svp!");
      </script>
      <?php
   }
}
?>