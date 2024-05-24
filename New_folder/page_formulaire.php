<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="style.css" />
  <style>
    label {
      font-size: 30px;
    }

    input {
      font-size: 20px;
    }

    .modifier {
      background-color: #042447;
      width: 150px;
      height: 40px;
      border-radius: 10px;
      color: aliceblue;
      font-size: 30px;
    }
  </style>
</head>

<body>
  <form action="" method="POST" enctype="multipart/form-data"><br>
    <label for="">Titre</label>
    <textarea name="titre" id="" cols="30" rows="10"></textarea><br>
    <label for="">Description</label>
    <textarea name="description" id="" cols="30" rows="10"></textarea><br><br>
    <input type="file" name="imges" required /> <br><br>
    <button class="modifier" name="ajouter">Publier</button>
    <?php
    include_once("connexion.php");
    $imges = "";
    // Verifier que le bouton a été clique
    $Id = $_GET['ID'];
    //Requette d'ajout
    $req = mysqli_query($Con, "SELECT * FROM actualite WHERE ID= $Id ");
    $row = mysqli_fetch_assoc($req);
    // Verifier que le bouton a été clique
    if (isset($_POST['ajouter'])) {
      $titre = htmlspecialchars($_POST['titre']);
      $description = htmlspecialchars($_POST['description']);


      $imges = $_FILES['imges']['name'];
      $upload1 = "../img/" . $imges;

      move_uploaded_file($_FILES["imges"]["tmp_name"], $upload1);

      $req = "UPDATE actualite set Titre='$titre',description='$description',Images='$imges' WHERE id= '$Id'";
      $execution = mysqli_query($Con, $req);
      if ($execution) {
        header("location:./Actualite.php");
      } else {
        echo "Modification non effectuée";
      }
      // } else {
      //   // Si non
      //   echo "Non effectuer";
    }
    ?>
  </form>
</body>

</html>