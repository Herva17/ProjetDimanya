<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		.voir {
			width: 700px;
		}
	</style>
</head>

<body>
	<?php
	include_once("connexion.php");
	$req = mysqli_query($Con, " SELECT * FROM  actualite where id = 10");
	if (mysqli_num_rows($req) == 0) {
		echo "Aucune donnée n'a été trouvée";
	} else {
		while ($rows = mysqli_fetch_assoc($req)) {
	?>
			<h1><?= $rows["Titre"] ?></h1>
			<p><?= $rows["description"] ?></p>
			<img src="../img/<?= $rows["Images"] ?>" alt="Actualité" class="voir" />
			<div class="actions">
		<?php
		}
	}

		?>
</body>

</html>