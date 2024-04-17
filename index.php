<?php
session_start();
$_SESSION['personnage'] = "none";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="JDR,jeu,d&d,accueil">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Accueil grotte&reptile</title>
</head>

<body>
    <?php
    include "./assets/include/header.php";
    ?>

    <main>
        <div class="banniere">
            <h1>Grotte&Reptile</h1>
            <div class="explication">
                <h2>QUELQUES EXPLICATION</h2>
                <p>Bienvenue sur le site Grotte&Reptile inspirer de l'univers de donjon&dragon vous pourrez sur ce site crée votre personnage fantasy et partir a l'aventure.
                    Vous pourrez devenir riche, celebre ou bien noble, les divers scenario et choix pourront vous y emmener. Amusez vous a guerroyer pour votre fortune.
                </p>
                <div>
                    <img src="./assets/images/pixel1.png" alt="">
                    <img src="./assets/images/pixel2.png" alt="">
                    <img src="./assets/images/pixel3.png" alt="">
                </div>
            </div>
            <div class="explication2">
                <h2>CREATION DE PERSONNAGE</h2>
                <p>Crée le personnages que vous souhaitez! Plusieur races et classe sont a votre disposition afin de permettre de multiple tentative. Vous pourrez retrouver votre
                    personnage dans la page profil.
                </p>
                <br>
                <div>
                    <div class="explimg">
                        <img src="./assets/images/humain/homme_guerrier_humain.jpg" alt="">
                        <img src="./assets/images/elfe/femme_archer_elfe.jpg" alt="">
                        <img src="./assets/images/nain/homme_mage_nain.jpg" alt="">
                    </div>
                    <div class="explimg">
                        <img src="./assets/images/demi-animal/femme_dompteur_demi-animal.jpg" alt="">
                        <img src="./assets/images/demi-demon/homme_pretre_demon.jpg" alt="">
                        <img src="./assets/images/demi-orc/femme_voleur_orc.jpg" alt="">
                    </div>


                </div>
                <a href="./creation.php"><button class="btn">Crée votre personnage</button></a>
            </div>
            <div class="explication3">
                <h2>AVENTURES</h2>
                <p>Vous avez crée votre personnage et souhaitez l'essayer ? La page aventure vous permettra de faire vivre votre personnage a travers divers scenario!
                </p>
                <br>
                <div>
                    <div class="explimg">
                        <img src="./assets/images/monstre/petit/fée.jpg" alt="">
                        <img src="./assets/images/monstre/petit/kobold.jpg" alt="">
                        <img src="./assets/images/monstre/moyen/loup_garou.jpg" alt="">
                    </div>
                    <div class="explimg">
                        <img src="./assets/images/monstre/moyen/elem_feu.jpg" alt="">
                        <img src="./assets/images/monstre/gros/minotaure.jpg" alt="">
                        <img src="./assets/images/monstre/boss/dragon.jpg" alt="">
                    </div>


                </div>
                <a href="./aventure.php"><button class="btn">Partez a l'aventure</button></a>
            </div>
            <div class="explication4">
                <h2>VOTRE PROFIL</h2>
                <p>Si vous souhaitez changer vos informations ou bien retrouver vos personnages crée votre profil vous permettra d'y acceder.
                </p>
                <a href="./profil.php"><button class="btn">Verifiez votre profil</button></a>
            </div>
        </div>
        <br><br><br><br>
    </main>

    <?php
    include "./assets/include/footer.php";
    ?>
</body>

</html>