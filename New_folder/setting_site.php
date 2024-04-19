<!Doctype HTML>
<html>

<head>
    <title></title>
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
        <a href="setting_site.php" class="icon-a"><i class="fa fa-list-alt icons"></i>SettingContenu</a>
        <a href="temoignage.php" class="icon-a"><i class="fa fa-shopping-bag icons"></i>Temoignage</a>
        <a href="#" class="icon-a"><i class="fa fa-tasks icons"></i> Images</a>

    </div>
    <div id="main">

        <div class="head">
            <div class="col-div-6">
                <span style="font-size:30px;cursor:pointer; color: white;" class="nav">☰ Dashboard</span>
                <span style="font-size:30px;cursor:pointer; color: white;" class="nav2">☰ Dashboard</span>
            </div>

            <div class="col-div-6">
                <div class="profile">

                    <img src="" class="pro-img" />
                    <p>Admin<span>DimanyaWorld</span></p>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>

        <div class="clearfix"></div>
        <br />

        <div class="col-div-3">
            <div class="box">
                <p>67<br /><span>NewsLetters</span></p>
                <i class="fa fa-users box-icon"></i>
            </div>
        </div>
        <div class="col-div-3">
            <div class="box">
                <p>88<br /><span>Messages</span></p>
                <i class="fa fa-list box-icon"></i>
            </div>
        </div>
        <div class="col-div-3">
            <div class="box">
                <p>99<br /><span>Orders</span></p>
                <i class="fa fa-shopping-bag box-icon"></i>
            </div>
        </div>
        <div class="col-div-3">
            <div class="box">
                <p>78<br /><span>Tasks</span></p>
                <i class="fa fa-tasks box-icon"></i>
            </div>
        </div>
        <div class="clearfix"></div>
        <br /><br />
        <div class="col-div-8">
            <div class="box-8">
                <div class="content-box">
                    <p>Contenu Slider </p>
                    <br />
                    <table>
                        <tr>
                            <th>ID</th>
                            <th>EXPERIENCE</th>
                            <th>SLIDER 1</th>
                            <th>SLIDER 2</th>
                            <th>MEMBRES</th>
                            <th>PROJETS</th>
                            <th>CLIENTS</th>
                            <th>MODIFICATION</th>
                        </tr>
                        <?php
                        //  Faire inclure la page connexion
                        include_once "connexion.php";
                        //Requette pour afficher la liste des employés
                        $req = mysqli_query($Con, " SELECT * FROM  contenusslider");
                        if (mysqli_num_rows($req) == 0) {
                            //S'il n'existe pas d'employe dans la base de données, alors on affiche ce message
                            echo "Aucune nouvelle n'a été ajoutée";
                        } else {
                            // Affichons la liste des employeurs
                            while ($rows = mysqli_fetch_assoc($req)) {
                        ?>
                                <tr>
                                    <th><?= $rows["id"] ?></th>
                                    <th><?= $rows["Experience"] ?></th>
                                    <th><?= $rows["TitreSlider1"] ?></th>
                                    <th><?= $rows["TitreSlider2"] ?></th>
                                    <th><?= $rows["membres"] ?></th>
                                    <th><?= $rows["Nprojets"] ?></th>
                                    <th><?= $rows["clientsS"] ?></th>
                                    <!-- Nous allons mettre l'id de chaque employe dans ce lien -->
                                    <th><a href="users/ModContenu.php? ID=<?= $rows["id"] ?>"><button type="submit" name="Send" class="bouton">Modifier</button></a></th>
                                </tr>
                        <?php
                            }
                        }
                        ?>


                    </table>
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