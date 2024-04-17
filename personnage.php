<?php
session_start();
if (!isset($_SESSION["mail"])) {
    header("Location: ./connexion.php");
}

if (!empty($_POST["envoie2"])) {
    include  "./assets/include/connexionbdd.php";
    $personnage = $_SESSION["personnage"];
    $sql = "DELETE FROM `personnages` WHERE `personnages`.`nompersonnage` = :personnage ";
    $suppresion = $connexion->prepare($sql);
    $suppresion->bindParam(":personnage", $personnage, PDO::PARAM_STR);
    $suppresion->execute();
    $_SESSION['personnage'] = "none";
    header("Location: ./profil.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="personnage,statistique,JDR,RPG">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Personnage</title>
</head>

<body>
    <?php
    include "./assets/include/header.php";
    ?>

    <main>
        <div class="banniere">
            <h1>Personnage</h1>
            <div class="fichePerso">
                <div class="perso">
                    <?php
                    include "./assets/include/connexionbdd.php";
                    $personnage = $_SESSION["personnage"];
                    if ($personnage != "none") {
                        $sql = "SELECT * FROM personnages WHERE nompersonnage='$personnage'";
                        $requete = $connexion->query($sql);
                        $personnages = $requete->fetch();
                        switch ($personnages["genre"]) {
                            case "homme":
                                switch ($personnages["race"]) {
                                    case "humain":
                                        switch ($personnages["classe"]) {
                                            case "guerrier":
                                                echo "<img src='./assets/images/humain/homme_guerrier_humain.jpg'>";
                                                break;
                                            case "archer":
                                                echo "<img src='./assets/images/humain/homme_archer_humain.jpg'>";
                                                break;
                                            case "mage":
                                                echo "<img src='./assets/images/humain/homme_mage_humain.jpg'>";
                                                break;
                                            case "dompteur":
                                                echo "<img src='./assets/images/humain/homme_dompteur_humain.jpg'>";
                                                break;
                                            case "pretre":
                                                echo "<img src='./assets/images/humain/homme_pretre_humain.jpg'>";
                                                break;
                                            case "voleur":
                                                echo "<img src='./assets/images/humain/homme_voleur_humain.jpg'>";
                                                break;
                                        }
                                        break;
                                    case "elfe":
                                        switch ($personnages["classe"]) {
                                            case "guerrier":
                                                echo "<img src='./assets/images/elfe/homme_guerrier_elfe.jpg'>";
                                                break;
                                            case "archer":
                                                echo "<img src='./assets/images/elfe/homme_archer_elfe.jpg'>";
                                                break;
                                            case "mage":
                                                echo "<img src='./assets/images/elfe/homme_mage_elfe.jpg'>";
                                                break;
                                            case "dompteur":
                                                echo "<img src='./assets/images/elfe/homme_dompteur_elfe.jpg'>";
                                                break;
                                            case "pretre":
                                                echo "<img src='./assets/images/elfe/homme_pretre_elfe.jpg'>";
                                                break;
                                            case "voleur":
                                                echo "<img src='./assets/images/elfe/homme_voleur_elfe.jpg'>";
                                                break;
                                        }
                                        break;
                                    case "nain":
                                        switch ($personnages["classe"]) {
                                            case "guerrier":
                                                echo "<img src='./assets/images/nain/homme_guerrier_nain.jpg'>";
                                                break;
                                            case "archer":
                                                echo "<img src='./assets/images/nain/homme_archer_nain.jpg'>";
                                                break;
                                            case "mage":
                                                echo "<img src='./assets/images/nain/homme_mage_nain.jpg'>";
                                                break;
                                            case "dompteur":
                                                echo "<img src='./assets/images/nain/homme_dompteur_nain.jpg'>";
                                                break;
                                            case "pretre":
                                                echo "<img src='./assets/images/nain/homme_pretre_nain.jpg'>";
                                                break;
                                            case "voleur":
                                                echo "<img src='./assets/images/nain/homme_voleur_nain.jpg'>";
                                                break;
                                        }
                                        break;
                                    case "demi-animal":
                                        switch ($personnages["classe"]) {
                                            case "guerrier":
                                                echo "<img src='./assets/images/demi-animal/homme_guerrier_demi-animal.jpg'>";
                                                break;
                                            case "archer":
                                                echo "<img src='./assets/images/demi-animal/homme_archer_demi-animal.jpg'>";
                                                break;
                                            case "mage":
                                                echo "<img src='./assets/images/demi-animal/homme_mage_demi-animal.jpg'>";
                                                break;
                                            case "dompteur":
                                                echo "<img src='./assets/images/demi-animal/homme_dompteur_demi-animal.jpg'>";
                                                break;
                                            case "pretre":
                                                echo "<img src='./assets/images/demi-animal/homme_pretre_demi-animal.jpg'>";
                                                break;
                                            case "voleur":
                                                echo "<img src='./assets/images/demi-animal/homme_voleur_demi-animal.jpg'>";
                                                break;
                                        }
                                        break;
                                    case "demi-orc":
                                        switch ($personnages["classe"]) {
                                            case "guerrier":
                                                echo "<img src='./assets/images/demi-orc/homme_guerrier_orc.jpg'>";
                                                break;
                                            case "archer":
                                                echo "<img src='./assets/images/demi-orc/homme_archer_orc.jpg'>";
                                                break;
                                            case "mage":
                                                echo "<img src='./assets/images/demi-orc/homme_mage_orc.jpg'>";
                                                break;
                                            case "dompteur":
                                                echo "<img src='./assets/images/demi-orc/homme_dompteur_orc.jpg'>";
                                                break;
                                            case "pretre":
                                                echo "<img src='./assets/images/demi-orc/homme_pretre_orc.jpg'>";
                                                break;
                                            case "voleur":
                                                echo "<img src='./assets/images/demi-orc/homme_voleur_orc.jpg'>";
                                                break;
                                        }
                                        break;
                                    case "demi-demon":
                                        switch ($personnages["classe"]) {
                                            case "guerrier":
                                                echo "<img src='./assets/images/demi-demon/homme_guerrier_demon.jpg'>";
                                                break;
                                            case "archer":
                                                echo "<img src='./assets/images/demi-demon/homme_archer_demon.jpg'>";
                                                break;
                                            case "mage":
                                                echo "<img src='./assets/images/demi-demon/homme_mage_demon.jpg'>";
                                                break;
                                            case "dompteur":
                                                echo "<img src='./assets/images/demi-demon/homme_dompteur_demon.jpg'>";
                                                break;
                                            case "pretre":
                                                echo "<img src='./assets/images/demi-demon/homme_pretre_demon.jpg'>";
                                                break;
                                            case "voleur":
                                                echo "<img src='./assets/images/demi-demon/homme_voleur_demon.jpg'>";
                                                break;
                                        }
                                        break;
                                }
                                break;
                            case "femme":
                                switch ($personnages["race"]) {
                                    case "humain":
                                        switch ($personnages["classe"]) {
                                            case "guerrier":
                                                echo "<img src='./assets/images/humain/femme_guerrier_humain.jpg'>";
                                                break;
                                            case "archer":
                                                echo "<img src='./assets/images/humain/femme_archer_humain.jpg'>";
                                                break;
                                            case "mage":
                                                echo "<img src='./assets/images/humain/femme_mage_humain.jpg'>";
                                                break;
                                            case "dompteur":
                                                echo "<img src='./assets/images/humain/femme_dompteur_humain.jpg'>";
                                                break;
                                            case "pretre":
                                                echo "<img src='./assets/images/humain/femme_pretre_humain.jpg'>";
                                                break;
                                            case "voleur":
                                                echo "<img src='./assets/images/humain/femme_voleur_humain.jpg'>";
                                                break;
                                        }
                                        break;
                                    case "elfe":
                                        switch ($personnages["classe"]) {
                                            case "guerrier":
                                                echo "<img src='./assets/images/elfe/femme_guerrier_elfe.jpg'>";
                                                break;
                                            case "archer":
                                                echo "<img src='./assets/images/elfe/femme_archer_elfe.jpg'>";
                                                break;
                                            case "mage":
                                                echo "<img src='./assets/images/elfe/femme_mage_elfe.jpg'>";
                                                break;
                                            case "dompteur":
                                                echo "<img src='./assets/images/elfe/femme_dompteur_elfe.jpg'>";
                                                break;
                                            case "pretre":
                                                echo "<img src='./assets/images/elfe/femme_pretre_elfe.jpg'>";
                                                break;
                                            case "voleur":
                                                echo "<img src='./assets/images/elfe/femme_voleur_elfe.jpg'>";
                                                break;
                                        }
                                        break;
                                    case "nain":
                                        switch ($personnages["classe"]) {
                                            case "guerrier":
                                                echo "<img src='./assets/images/nain/femme_guerrier_nain.jpg'>";
                                                break;
                                            case "archer":
                                                echo "<img src='./assets/images/nain/femme_archer_nain.jpg'>";
                                                break;
                                            case "mage":
                                                echo "<img src='./assets/images/nain/femme_mage_nain.jpg'>";
                                                break;
                                            case "dompteur":
                                                echo "<img src='./assets/images/nain/femme_dompteur_nain.jpg'>";
                                                break;
                                            case "pretre":
                                                echo "<img src='./assets/images/nain/femme_pretre_nain.jpg'>";
                                                break;
                                            case "voleur":
                                                echo "<img src='./assets/images/nain/femme_voleur_nain.jpg'>";
                                                break;
                                        }
                                        break;
                                    case "demi-animal":
                                        switch ($personnages["classe"]) {
                                            case "guerrier":
                                                echo "<img src='./assets/images/demi-animal/femme_guerrier_demi-animal.jpg'>";
                                                break;
                                            case "archer":
                                                echo "<img src='./assets/images/demi-animal/femme_archer_demi-animal.jpg'>";
                                                break;
                                            case "mage":
                                                echo "<img src='./assets/images/demi-animal/femme_mage_demi-animal.jpg'>";
                                                break;
                                            case "dompteur":
                                                echo "<img src='./assets/images/demi-animal/femme_dompteur_demi-animal.jpg'>";
                                                break;
                                            case "pretre":
                                                echo "<img src='./assets/images/demi-animal/femme_pretre_demi-animal.jpg'>";
                                                break;
                                            case "voleur":
                                                echo "<img src='./assets/images/demi-animal/femme_voleur_demi-animal.jpg'>";
                                                break;
                                        }
                                        break;
                                    case "demi-orc":
                                        switch ($personnages["classe"]) {
                                            case "guerrier":
                                                echo "<img src='./assets/images/demi-orc/femme_guerrier_orc.jpg'>";
                                                break;
                                            case "archer":
                                                echo "<img src='./assets/images/demi-orc/femme_archer_orc.jpg'>";
                                                break;
                                            case "mage":
                                                echo "<img src='./assets/images/demi-orc/femme_mage_orc.jpg'>";
                                                break;
                                            case "dompteur":
                                                echo "<img src='./assets/images/demi-orc/femme_dompteur_orc.jpg'>";
                                                break;
                                            case "pretre":
                                                echo "<img src='./assets/images/demi-orc/femme_pretre_orc.jpg'>";
                                                break;
                                            case "voleur":
                                                echo "<img src='./assets/images/demi-orc/femme_voleur_orc.jpg'>";
                                                break;
                                        }
                                        break;
                                    case "demi-demon":
                                        switch ($personnages["classe"]) {
                                            case "guerrier":
                                                echo "<img src='./assets/images/demi-demon/femme_guerrier_demon.jpg'>";
                                                break;
                                            case "archer":
                                                echo "<img src='./assets/images/demi-demon/femme_archer_demon.jpg'>";
                                                break;
                                            case "mage":
                                                echo "<img src='./assets/images/demi-demon/femme_mage_demon.jpg'>";
                                                break;
                                            case "dompteur":
                                                echo "<img src='./assets/images/demi-demon/femme_dompteur_demon.jpg'>";
                                                break;
                                            case "pretre":
                                                echo "<img src='./assets/images/demi-demon/femme_pretre_demon.jpg'>";
                                                break;
                                            case "voleur":
                                                echo "<img src='./assets/images/demi-demon/femme_voleur_demon.jpg'>";
                                                break;
                                        }
                                        break;
                                }
                                break;
                        };
                        echo "<div>";
                        echo "<br><p><span>Nom personnage :</span> " . $personnages["nompersonnage"] . "</p>";
                        echo "<p><span>Race :</span> " . $personnages["race"] . "</p>";
                        echo "<p><span>Classe :</span> " . $personnages["classe"] . "</p>";
                        echo "<p><span>Genre :</span> " . $personnages["genre"] . "</p><br><br>";
                        echo "</div><br>";
                        echo "<fieldset><legend>Statistiques</legend>";
                        echo "<p><span>Force :</span> " . $personnages["strength"] . "</p>";
                        echo "<p><span>Agilité</span> :</span> " . $personnages["agility"] . "</p>";
                        echo "<p><span>Intelligence :</span> " . $personnages["intelligence"] . "</p>";
                        echo "<p><span>Constitution :</span> " . $personnages["constitution"] . "</p>";
                        echo "<p><span>Charisme :</span> " . $personnages["charisma"] . "</p>";
                        echo "<p><span>Sagesse :</span> " . $personnages["wisdom"] . "</p>";
                        echo "</fieldset>";
                        echo "<form action='' method='POST'>";
                        echo "<input style='width:300px' type='submit' value='supprimer personnage' class='btn' name='envoie2'>";
                        echo "</form>";
                    } else {
                        header("Location: ./creation.php");
                    }
                    ?>

                </div>
            </div>
        </div>
    </main>
    <?php
    include "./assets/include/footer.php";
    ?>
</body>

</html>