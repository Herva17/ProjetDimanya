<!Doctype HTML>
<html>

<head>
	<title>DimanyaWorld</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>


<body>

	<div id="mySidenav" class="sidenav">
		<p class="logo"><span>D</span>imanyaWorld</p>
		<a href="accueil.php" class="icon-a"><i class="fa fa-dashboard icons"></i> Dashboard</a>
		<a href="NewsLetters.php" class="icon-a"><i class="fa fa-users icons"></i> NewsLetters</a>
		<a href="Messages.php" class="icon-a"><i class="fa fa-list icons"></i> Messages</a>
		<a href="user.php" class="icon-a"><i class="fa fa-user icons"></i>Users</a>
		<a href="setting_site.php" class="icon-a"><i class="fa fa-list-alt icons"></i> SettingContenu</a>
		<a href="temoignage.php" class="icon-a"><i class="fa fa-shopping-bag icons"></i>Temoignage</a>
		<a href="Actualite.php" class="icon-a"><i class="fa fa-tasks icons"></i>Actualite</a>


	</div>
	<div id="main">

		<div class="head">
			<div class="col-div-6">
				<span style="font-size:30px;cursor:pointer; color: white;" class="nav">☰ Dashboard</span>
				<span style="font-size:30px;cursor:pointer; color: white;" class="nav2">☰ Dashboard</span>
			</div>

			<div class="col-div-6">
				<div class="profile">

				<a href="index.php"><img src="../img/Herve.jpg" class="pro-img"/></a>	
						<p>Admin<span>DimanyaWorld</span></p>
					</a>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>

		<div class="clearfix"></div>
		<br />
		<div class="col-div-3">
			<div class="box">
				 <?php
				 require_once("./connexion.php");
				 $sql = "SELECT COUNT(*) as total FROM newsletters";
				 $result = $Con->query($sql);
		 
				 if ($result->num_rows > 0) {
					 // Afficher le nombre d'étudiants
					 $row = $result->fetch_assoc();
				 ?>
				<p><?=$row["total"]?><br /><span>NewsLetters</span></p>
				<?php
					 }
					 ?>
				
				<i class="fa fa-users box-icon"></i>
			</div>
		</div>
		<div class="col-div-3">
			<div class="box">
			<?php
				 require_once("./connexion.php");
				 $sql = "SELECT COUNT(*) as total FROM messages";
				 $result = $Con->query($sql);
		 
				 if ($result->num_rows > 0) {
					 // Afficher le nombre d'étudiants
					 $row = $result->fetch_assoc();
				 ?>
				<p><?=$row["total"]?><br /><span>Messages</span></p>
				<?php
					 }
					 ?>
				<i class="fa fa-list box-icon"></i>
			</div>
		</div>
		<div class="col-div-3">
			<div class="box">
			<?php
				 require_once("./connexion.php");
				 $sql = "SELECT COUNT(*) as total FROM actualite";
				 $result = $Con->query($sql);
		 
				 if ($result->num_rows > 0) {
					 // Afficher le nombre d'étudiants
					 $row = $result->fetch_assoc();
				 ?>
				<p><?=$row["total"]?><br /><span>Actualite</span></p>
				<?php
					 }
					 ?>
				<i class="fa fa-shopping-bag box-icon"></i>
			</div>
		</div>
		<div class="col-div-3">
			<div class="box">
			<?php
				 require_once("./connexion.php");
				 $sql = "SELECT COUNT(*) as total FROM Users";
				 $result = $Con->query($sql);
		 
				 if ($result->num_rows > 0) {
					 // Afficher le nombre d'étudiants
					 $row = $result->fetch_assoc();
				 ?>
				<p><?=$row["total"]?><br /><span>Users</span></p>
				<?php
					 }
					 ?>
				<i class="fa fa-tasks box-icon"></i>
			</div>
		</div>
		<div class="clearfix"></div>
		<div class="clearfix"></div>
		<br><br>
		<h1 class="titre">Nos Actualites</h1>
		<hr> <br><br><br>
		<div class="pageActualite">

			<div class="actualite1">
				<?php
				$req = mysqli_query($Con, "SELECT * FROM actualite where id = 10");
				if (mysqli_num_rows($req) == 0) {
					echo "Aucune donnée n'a été trouvée";
				} else {
					while ($rows = mysqli_fetch_assoc($req)) {
				?>
						<img src="../img/<?= $rows["Images"] ?>" alt="Actualité" />
						<div class="actions">
							<a href="page_formulaire.php? ID=<?= $rows["id"] ?>" class="modifier">Modifier</a>
							<a href="voir4.php? ID=<?= $rows["id"] ?>" class="modifier">Voir plus</a>
						</div>
			</div>
	<?php
					}
				}
	?>
	<div class="actualite2">
		<?php
		$req = mysqli_query($Con, "SELECT * FROM actualite where id = 9");
		if (mysqli_num_rows($req) == 0) {
			echo "Aucune donnée n'a été trouvée";
		} else {
			while ($rows = mysqli_fetch_assoc($req)) {
		?>
				<img src="../img/<?= $rows["Images"] ?>" alt="Actualité" />
				<div class="actions">
					<a href="page_formulaire.php? ID=<?= $rows["id"] ?>" class="modifier">Modifier</a>
					<a href="voir3.php? ID=<?= $rows["id"] ?>" class="modifier">Voir plus</a>
				</div>
	</div>
<?php
			}
		}
?>
<div class="actualite3">
	<?php
	$req = mysqli_query($Con, "SELECT * FROM actualite where id = 8");
	if (mysqli_num_rows($req) == 0) {
		echo "Aucune donnée n'a été trouvée";
	} else {
		while ($rows = mysqli_fetch_assoc($req)) {
	?>
			<img src="../img/<?= $rows["Images"] ?>" alt="Actualité" />
			<div class="actions">
				<a href="page_formulaire.php? ID=<?= $rows["id"] ?>" class="modifier">Modifier</a>
				<a href="voir2.php? ID=<?= $rows["id"] ?>" class="modifier">Voir plus</a>
			</div>
</div>
<?php
		}
	}
?>

<div class="actualite4">
	<?php
	include_once("connexion.php");
	$req = mysqli_query($Con, " SELECT * FROM  actualite where id = 7");
	if (mysqli_num_rows($req) == 0) {
		echo "Aucune donnée n'a été trouvée";
	} else {
		while ($rows = mysqli_fetch_assoc($req)) {
	?>

			<img src="../img/<?= $rows["Images"] ?>" alt="Actualité" />
			<div class="actions">
				<a href="page_formulaire.php? ID=<?= $rows["id"] ?>" class="modifier">Modifier</a>
				<a href="voir.php? ID=<?= $rows["id"] ?>" class="modifier">Voir plus</a>
		<?php
		}
	}

		?>
			</div>
</div>
		</div>


		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script>
			$(".nav").click(function() {
				$("#mySidenav").css('width', '70px');
				$("#main").css('margin-left', '70px');
				$(".logo").css('visibility', 'hidden');
				$(".logo span").css('visibility', 'visible');
				$(".logo span").css('margin-left', '-10px');
				$(".icon-a").css('visibility', 'hidden');
				$(".icons").css('visibility', 'visible');
				$(".icons").css('margin-left', '-8px');
				$(".nav").css('display', 'none');
				$(".nav2").css('display', 'block');
			});

			$(".nav2").click(function() {
				$("#mySidenav").css('width', '300px');
				$("#main").css('margin-left', '300px');
				$(".logo").css('visibility', 'visible');
				$(".icon-a").css('visibility', 'visible');
				$(".icons").css('visibility', 'visible');
				$(".nav").css('display', 'block');
				$(".nav2").css('display', 'none');
			});
		</script>

</body>


</html>