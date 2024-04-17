<?php
include "./assets/include/connexionbdd.php";
//selection image du personnage
if ($_SESSION["personnage"] != "none") {
    $personnage = $_SESSION["personnage"];
    $sql = "SELECT * FROM personnages WHERE nompersonnage='$personnage'";
    $requete = $connexion->query($sql);
    $personnages = $requete->fetch();
    $_SESSION["force"] = $personnages["strength"];
    $_SESSION["agilite"] = $personnages["agility"];
    $_SESSION["intelligence"] = $personnages["intelligence"];
    $_SESSION["constitution"] = $personnages["constitution"];
    $_SESSION["charisme"] = $personnages["charisma"];
    $_SESSION["sagesse"] = $personnages["wisdom"];
    switch ($personnages["genre"]) {
        case "homme":
            switch ($personnages["race"]) {
                case "humain":
                    switch ($personnages["classe"]) {
                        case "guerrier":
                            $_SESSION["imgperso"] = "<img src='./assets/images/humain/homme_guerrier_humain.jpg'>";
                            break;
                        case "archer":
                            $_SESSION["imgperso"] = "<img src='./assets/images/humain/homme_archer_humain.jpg'>";
                            break;
                        case "mage":
                            $_SESSION["imgperso"] = "<img src='./assets/images/humain/homme_mage_humain.jpg'>";
                            break;
                        case "dompteur":
                            $_SESSION["imgperso"] = "<img src='./assets/images/humain/homme_dompteur_humain.jpg'>";
                            break;
                        case "pretre":
                            $_SESSION["imgperso"] = "<img src='./assets/images/humain/homme_pretre_humain.jpg'>";
                            break;
                        case "voleur":
                            $_SESSION["imgperso"] = "<img src='./assets/images/humain/homme_voleur_humain.jpg'>";
                            break;
                    }
                    break;
                case "elfe":
                    switch ($personnages["classe"]) {
                        case "guerrier":
                            $_SESSION["imgperso"] = "<img src='./assets/images/elfe/homme_guerrier_elfe.jpg'>";
                            break;
                        case "archer":
                            $_SESSION["imgperso"] = "<img src='./assets/images/elfe/homme_archer_elfe.jpg'>";
                            break;
                        case "mage":
                            $_SESSION["imgperso"] = "<img src='./assets/images/elfe/homme_mage_elfe.jpg'>";
                            break;
                        case "dompteur":
                            $_SESSION["imgperso"] = "<img src='./assets/images/elfe/homme_dompteur_elfe.jpg'>";
                            break;
                        case "pretre":
                            $_SESSION["imgperso"] = "<img src='./assets/images/elfe/homme_pretre_elfe.jpg'>";
                            break;
                        case "voleur":
                            $_SESSION["imgperso"] = "<img src='./assets/images/elfe/homme_voleur_elfe.jpg'>";
                            break;
                    }
                    break;
                case "nain":
                    switch ($personnages["classe"]) {
                        case "guerrier":
                            $_SESSION["imgperso"] = "<img src='./assets/images/nain/homme_guerrier_nain.jpg'>";
                            break;
                        case "archer":
                            $_SESSION["imgperso"] = "<img src='./assets/images/nain/homme_archer_nain.jpg'>";
                            break;
                        case "mage":
                            $_SESSION["imgperso"] = "<img src='./assets/images/nain/homme_mage_nain.jpg'>";
                            break;
                        case "dompteur":
                            $_SESSION["imgperso"] = "<img src='./assets/images/nain/homme_dompteur_nain.jpg'>";
                            break;
                        case "pretre":
                            $_SESSION["imgperso"] = "<img src='./assets/images/nain/homme_pretre_nain.jpg'>";
                            break;
                        case "voleur":
                            $_SESSION["imgperso"] = "<img src='./assets/images/nain/homme_voleur_nain.jpg'>";
                            break;
                    }
                    break;
                case "demi-animal":
                    switch ($personnages["classe"]) {
                        case "guerrier":
                            $_SESSION["imgperso"] = "<img src='./assets/images/demi-animal/homme_guerrier_demi-animal.jpg'>";
                            break;
                        case "archer":
                            $_SESSION["imgperso"] = "<img src='./assets/images/demi-animal/homme_archer_demi-animal.jpg'>";
                            break;
                        case "mage":
                            $_SESSION["imgperso"] = "<img src='./assets/images/demi-animal/homme_mage_demi-animal.jpg'>";
                            break;
                        case "dompteur":
                            $_SESSION["imgperso"] = "<img src='./assets/images/demi-animal/homme_dompteur_demi-animal.jpg'>";
                            break;
                        case "pretre":
                            $_SESSION["imgperso"] = "<img src='./assets/images/demi-animal/homme_pretre_demi-animal.jpg'>";
                            break;
                        case "voleur":
                            $_SESSION["imgperso"] = "<img src='./assets/images/demi-animal/homme_voleur_demi-animal.jpg'>";
                            break;
                    }
                    break;
                case "demi-orc":
                    switch ($personnages["classe"]) {
                        case "guerrier":
                            $_SESSION["imgperso"] = "<img src='./assets/images/demi-orc/homme_guerrier_orc.jpg'>";
                            break;
                        case "archer":
                            $_SESSION["imgperso"] = "<img src='./assets/images/demi-orc/homme_archer_orc.jpg'>";
                            break;
                        case "mage":
                            $_SESSION["imgperso"] = "<img src='./assets/images/demi-orc/homme_mage_orc.jpg'>";
                            break;
                        case "dompteur":
                            $_SESSION["imgperso"] = "<img src='./assets/images/demi-orc/homme_dompteur_orc.jpg'>";
                            break;
                        case "pretre":
                            $_SESSION["imgperso"] = "<img src='./assets/images/demi-orc/homme_pretre_orc.jpg'>";
                            break;
                        case "voleur":
                            $_SESSION["imgperso"] = "<img src='./assets/images/demi-orc/homme_voleur_orc.jpg'>";
                            break;
                    }
                    break;
                case "demi-demon":
                    switch ($personnages["classe"]) {
                        case "guerrier":
                            $_SESSION["imgperso"] = "<img src='./assets/images/demi-demon/homme_guerrier_demon.jpg'>";
                            break;
                        case "archer":
                            $_SESSION["imgperso"] = "<img src='./assets/images/demi-demon/homme_archer_demon.jpg'>";
                            break;
                        case "mage":
                            $_SESSION["imgperso"] = "<img src='./assets/images/demi-demon/homme_mage_demon.jpg'>";
                            break;
                        case "dompteur":
                            $_SESSION["imgperso"] = "<img src='./assets/images/demi-demon/homme_dompteur_demon.jpg'>";
                            break;
                        case "pretre":
                            $_SESSION["imgperso"] = "<img src='./assets/images/demi-demon/homme_pretre_demon.jpg'>";
                            break;
                        case "voleur":
                            $_SESSION["imgperso"] = "<img src='./assets/images/demi-demon/homme_voleur_demon.jpg'>";
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
                            $_SESSION["imgperso"] = "<img src='./assets/images/humain/femme_guerrier_humain.jpg'>";
                            break;
                        case "archer":
                            $_SESSION["imgperso"] = "<img src='./assets/images/humain/femme_archer_humain.jpg'>";
                            break;
                        case "mage":
                            $_SESSION["imgperso"] = "<img src='./assets/images/humain/femme_mage_humain.jpg'>";
                            break;
                        case "dompteur":
                            $_SESSION["imgperso"] = "<img src='./assets/images/humain/femme_dompteur_humain.jpg'>";
                            break;
                        case "pretre":
                            $_SESSION["imgperso"] = "<img src='./assets/images/humain/femme_pretre_humain.jpg'>";
                            break;
                        case "voleur":
                            $_SESSION["imgperso"] = "<img src='./assets/images/humain/femme_voleur_humain.jpg'>";
                            break;
                    }
                    break;
                case "elfe":
                    switch ($personnages["classe"]) {
                        case "guerrier":
                            $_SESSION["imgperso"] = "<img src='./assets/images/elfe/femme_guerrier_elfe.jpg'>";
                            break;
                        case "archer":
                            $_SESSION["imgperso"] = "<img src='./assets/images/elfe/femme_archer_elfe.jpg'>";
                            break;
                        case "mage":
                            $_SESSION["imgperso"] = "<img src='./assets/images/elfe/femme_mage_elfe.jpg'>";
                            break;
                        case "dompteur":
                            $_SESSION["imgperso"] = "<img src='./assets/images/elfe/femme_dompteur_elfe.jpg'>";
                            break;
                        case "pretre":
                            $_SESSION["imgperso"] = "<img src='./assets/images/elfe/femme_pretre_elfe.jpg'>";
                            break;
                        case "voleur":
                            $_SESSION["imgperso"] = "<img src='./assets/images/elfe/femme_voleur_elfe.jpg'>";
                            break;
                    }
                    break;
                case "nain":
                    switch ($personnages["classe"]) {
                        case "guerrier":
                            $_SESSION["imgperso"] = "<img src='./assets/images/nain/femme_guerrier_nain.jpg'>";
                            break;
                        case "archer":
                            $_SESSION["imgperso"] = "<img src='./assets/images/nain/femme_archer_nain.jpg'>";
                            break;
                        case "mage":
                            $_SESSION["imgperso"] = "<img src='./assets/images/nain/femme_mage_nain.jpg'>";
                            break;
                        case "dompteur":
                            $_SESSION["imgperso"] = "<img src='./assets/images/nain/femme_dompteur_nain.jpg'>";
                            break;
                        case "pretre":
                            $_SESSION["imgperso"] = "<img src='./assets/images/nain/femme_pretre_nain.jpg'>";
                            break;
                        case "voleur":
                            $_SESSION["imgperso"] = "<img src='./assets/images/nain/femme_voleur_nain.jpg'>";
                            break;
                    }
                    break;
                case "demi-animal":
                    switch ($personnages["classe"]) {
                        case "guerrier":
                            $_SESSION["imgperso"] = "<img src='./assets/images/demi-animal/femme_guerrier_demi-animal.jpg'>";
                            break;
                        case "archer":
                            $_SESSION["imgperso"] = "<img src='./assets/images/demi-animal/femme_archer_demi-animal.jpg'>";
                            break;
                        case "mage":
                            $_SESSION["imgperso"] = "<img src='./assets/images/demi-animal/femme_mage_demi-animal.jpg'>";
                            break;
                        case "dompteur":
                            $_SESSION["imgperso"] = "<img src='./assets/images/demi-animal/femme_dompteur_demi-animal.jpg'>";
                            break;
                        case "pretre":
                            $_SESSION["imgperso"] = "<img src='./assets/images/demi-animal/femme_pretre_demi-animal.jpg'>";
                            break;
                        case "voleur":
                            $_SESSION["imgperso"] = "<img src='./assets/images/demi-animal/femme_voleur_demi-animal.jpg'>";
                            break;
                    }
                    break;
                case "demi-orc":
                    switch ($personnages["classe"]) {
                        case "guerrier":
                            $_SESSION["imgperso"] = "<img src='./assets/images/demi-orc/femme_guerrier_orc.jpg'>";
                            break;
                        case "archer":
                            $_SESSION["imgperso"] = "<img src='./assets/images/demi-orc/femme_archer_orc.jpg'>";
                            break;
                        case "mage":
                            $_SESSION["imgperso"] = "<img src='./assets/images/demi-orc/femme_mage_orc.jpg'>";
                            break;
                        case "dompteur":
                            $_SESSION["imgperso"] = "<img src='./assets/images/demi-orc/femme_dompteur_orc.jpg'>";
                            break;
                        case "pretre":
                            $_SESSION["imgperso"] = "<img src='./assets/images/demi-orc/femme_pretre_orc.jpg'>";
                            break;
                        case "voleur":
                            $_SESSION["imgperso"] = "<img src='./assets/images/demi-orc/femme_voleur_orc.jpg'>";
                            break;
                    }
                    break;
                case "demi-demon":
                    switch ($personnages["classe"]) {
                        case "guerrier":
                            $_SESSION["imgperso"] = "<img src='./assets/images/demi-demon/femme_guerrier_demon.jpg'>";
                            break;
                        case "archer":
                            $_SESSION["imgperso"] = "<img src='./assets/images/demi-demon/femme_archer_demon.jpg'>";
                            break;
                        case "mage":
                            $_SESSION["imgperso"] = "<img src='./assets/images/demi-demon/femme_mage_demon.jpg'>";
                            break;
                        case "dompteur":
                            $_SESSION["imgperso"] = "<img src='./assets/images/demi-demon/femme_dompteur_demon.jpg'>";
                            break;
                        case "pretre":
                            $_SESSION["imgperso"] = "<img src='./assets/images/demi-demon/femme_pretre_demon.jpg'>";
                            break;
                        case "voleur":
                            $_SESSION["imgperso"] = "<img src='./assets/images/demi-demon/femme_voleur_demon.jpg'>";
                            break;
                    }
                    break;
            }
            break;
    };
}
$aleatest = rand(1, 2);

//Selection du personnage
if (!empty($_POST['commencer'])) {
    if ($_POST['persochoix'] != "none") {
        introduction();
    }
}

//debut de l'aventure
if (!empty($_POST['event'])) {
    $_SESSION["pvj"] = 30 + $_SESSION["constitution"];
    $_SESSION["pvjmax"] = 30 + $_SESSION["constitution"];
    $_SESSION["attaque"] = 5;
    $_SESSION["pvmonstrepetit"] = 10;
    $_SESSION["pvmonstremoyen"] = 30;
    $_SESSION["pvmonstregros"] = 50;
    $_SESSION["pvmonstreboss"] = 70;
    $_SESSION["round"] = 0;
    $alea = rand(1, 9);
    if ($_SESSION["round"] < 10) {
        switch ($alea) {
            case 1:
                $_SESSION["round"] += 1;
                $aleapetit = rand(1, 10);
                $_SESSION["pvmonstrepetit"] = 10;
                aleamonstrepetit($aleapetit);
                combat_petit($_SESSION["pvj"], $_SESSION["pvmonstrepetit"]);
                break;
            case 2:
                $_SESSION["round"] += 1;
                $aleamoyen = rand(1, 8);
                $_SESSION["pvmonstremoyen"] = 30;
                aleamonstremoyen($aleamoyen);
                combat_moyen($_SESSION["pvj"], $_SESSION["pvmonstremoyen"]);
                break;
            case 3:
                $_SESSION["round"] += 1;
                $aleagros = rand(1, 6);
                $_SESSION["pvmonstregros"] = 50;
                aleamonstregros($aleagros);
                combat_gros($_SESSION["pvj"], $_SESSION["pvmonstregros"]);
                break;
            case 4:
                $_SESSION["round"] += 1;
                epreuvefor($_SESSION["force"]);
                break;
            case 5:
                $_SESSION["round"] += 1;
                epreuveagi($_SESSION["agilite"]);
                break;
            case 6:
                $_SESSION["round"] += 1;
                epreuveint($_SESSION["intelligence"]);
                break;
            case 7:
                $_SESSION["round"] += 1;
                epreuvecon($_SESSION["constitution"]);
                break;
            case 8:
                $_SESSION["round"] += 1;
                epreuvecha($_SESSION["charisme"]);
                break;
            case 9:
                $_SESSION["round"] += 1;
                epreuvesag($_SESSION["sagesse"]);
                break;
        }
    } elseif ($_SESSION["round"] == 10) {
        $aleaboss = rand(1, 5);
        aleamonstreboss($aleaboss);
        combat_boss($_SESSION["pvj"], $_SESSION["pvmonstreboss"]);
    }
}

//continue l'aventure
if (!empty($_POST['continue'])) {
    $alea = rand(1, 9);
    if ($_SESSION["round"] < 10) {
        switch ($alea) {
            case 1:
                $_SESSION["round"] += 1;
                $aleapetit = rand(1, 10);
                $_SESSION["pvmonstrepetit"] = 10;
                aleamonstrepetit($aleapetit);
                combat_petit($_SESSION["pvj"], $_SESSION["pvmonstrepetit"]);
                break;
            case 2:
                $_SESSION["round"] += 1;
                $aleamoyen = rand(1, 8);
                $_SESSION["pvmonstremoyen"] = 30;
                aleamonstremoyen($aleamoyen);
                combat_moyen($_SESSION["pvj"], $_SESSION["pvmonstremoyen"]);
                break;
            case 3:
                $_SESSION["round"] += 1;
                $aleagros = rand(1, 6);
                $_SESSION["pvmonstregros"] = 50;
                aleamonstregros($aleagros);
                combat_gros($_SESSION["pvj"], $_SESSION["pvmonstregros"]);
                break;
            case 4:
                $_SESSION["round"] += 1;
                epreuvefor($_SESSION["force"]);
                break;
            case 5:
                $_SESSION["round"] += 1;
                epreuveagi($_SESSION["agilite"]);
                break;
            case 6:
                $_SESSION["round"] += 1;
                epreuveint($_SESSION["intelligence"]);
                break;
            case 7:
                $_SESSION["round"] += 1;
                epreuvecon($_SESSION["constitution"]);
                break;
            case 8:
                $_SESSION["round"] += 1;
                epreuvecha($_SESSION["charisme"]);
                break;
            case 9:
                $_SESSION["round"] += 1;
                epreuvesag($_SESSION["sagesse"]);
                break;
        }
    } elseif ($_SESSION["round"] == 10) {
        $aleaboss = rand(1, 5);
        aleamonstreboss($aleaboss);
        combat_boss($_SESSION["pvj"], $_SESSION["pvmonstreboss"]);
    }
}

//choix en combat
//choix petit monstre
if (!empty($_POST['attaquepetit'])) {
    $_SESSION["pvmonstrepetit"] -= $_SESSION["attaque"];
    $_SESSION["pvj"] -= 3;
    combat_petit($_SESSION["pvj"], $_SESSION["pvmonstrepetit"]);
}
if (!empty($_POST['soinpetit'])) {
    $_SESSION["pvj"] += 10;
    if ($_SESSION["pvj"] > $_SESSION["pvjmax"]) {
        $_SESSION["pvj"] = $_SESSION["pvjmax"];
    }
    $_SESSION["pvj"] -= 3;
    combat_petit($_SESSION["pvj"], $_SESSION["pvmonstrepetit"]);
}

//choix monstre moyen
if (!empty($_POST['attaquemoyen'])) {
    $_SESSION["pvmonstremoyen"] -= $_SESSION["attaque"];
    $_SESSION["pvj"] -= 5;
    combat_moyen($_SESSION["pvj"], $_SESSION["pvmonstremoyen"]);
}
if (!empty($_POST['soinmoyen'])) {
    $_SESSION["pvj"] += 10;
    if ($_SESSION["pvj"] > $_SESSION["pvjmax"]) {
        $_SESSION["pvj"] = $_SESSION["pvjmax"];
    }
    $_SESSION["pvj"] -= 5;
    combat_moyen($_SESSION["pvj"], $_SESSION["pvmonstremoyen"]);
}

//choix monstre gros
if (!empty($_POST['attaquegros'])) {
    $_SESSION["pvmonstregros"] -= $_SESSION["attaque"];
    $_SESSION["pvj"] -= 7;
    combat_gros($_SESSION["pvj"], $_SESSION["pvmonstregros"]);
}
if (!empty($_POST['soingros'])) {
    $_SESSION["pvj"] += 10;
    if ($_SESSION["pvj"] > $_SESSION["pvjmax"]) {
        $_SESSION["pvj"] = $_SESSION["pvjmax"];
    }
    $_SESSION["pvj"] -= 7;
    combat_gros($_SESSION["pvj"], $_SESSION["pvmonstregros"]);
}

//choix monstre boss
if (!empty($_POST['attaqueboss'])) {
    $_SESSION["pvmonstreboss"] -= $_SESSION["attaque"];
    $_SESSION["pvj"] -= 9;
    combat_boss($_SESSION["pvj"], $_SESSION["pvmonstreboss"]);
}
if (!empty($_POST['soinboss'])) {
    $_SESSION["pvj"] += 10;
    if ($_SESSION["pvj"] > $_SESSION["pvjmax"]) {
        $_SESSION["pvj"] = $_SESSION["pvjmax"];
    }
    $_SESSION["pvj"] -= 9;
    combat_boss($_SESSION["pvj"], $_SESSION["pvmonstreboss"]);
}
//fonction debut de l'aventure
function introduction()
{
    echo "Bienvenue a toi " . $_SESSION["personnage"] . "<br>";
    echo "Tu t'apprete à démarrer ton aventure dans se monde fantastique!<br>";
    echo "Affronte ses péripéthie afin d'aquerir honneur, gloire et fortune.<br><br>";
    echo $_SESSION["imgperso"] . "<br>";
    echo "<form action='' method='POST'>";
    echo "<input type='submit' class='btn' name='event' value='Démarrer l'aventure'>";
    echo "</form>";
}

//fonction affichage du combat
function combat_petit($pvj, $pvmonstrepetit)
{
    if ($pvj > 0 && $pvmonstrepetit > 0) {
        echo "Point de vie: " . $pvmonstrepetit . "<br>";
        echo "<img src='" . $_SESSION["imgmonstrepetit"] . "'><br><br>";
        echo $_SESSION["imgperso"] . "<br>";
        echo "Point de vie: " . $pvj . "<br>";
        echo "<form action='' method='POST'>";
        echo "<input type='submit' class='btn' value='Attaque' name='attaquepetit'>";
        echo "<input type='submit' class='btn' value='Soin' name='soinpetit'>";
        echo "</form>";
    } else {
        if ($pvmonstrepetit <= 0) {
            echo "Le monstre a été vaincue!";
            echo "<form action='' method='POST'>";
            echo "<input type='submit' class='btn' value='Continuer' name='continue'>";
            echo "</form>";
            $_SESSION["pvmonstrepetit"] = 10;
            exit;
        } elseif ($pvj <= 0) {
            echo "Vous n'avez pas réussi a accomplir votre destin...";
            echo "Une autre vie sera peut-être plus chanceuse!";
            exit;
        }
    }
}

function combat_moyen($pvj, $pvmonstremoyen)
{
    if ($pvj > 0 && $pvmonstremoyen > 0) {
        echo "Point de vie: " . $pvmonstremoyen . "<br>";
        echo "<img src='" . $_SESSION["imgmonstremoyen"] . "'><br><br>";
        echo $_SESSION["imgperso"] . "<br>";
        echo "Point de vie: " . $pvj . "<br>";
        echo "<form action='' method='POST'>";
        echo "<input type='submit' class='btn' value='Attaque' name='attaquemoyen'>";
        echo "<input type='submit' class='btn' value='Soin' name='soinmoyen'>";
        echo "</form>";
    } else {
        if ($pvmonstremoyen <= 0) {
            echo "Le monstre a été vaincue!";
            echo "<form action='' method='POST'>";
            echo "<input type='submit' class='btn' value='Continuer' name='continue'>";
            echo "</form>";
            $_SESSION["pvmonstremoyen"] = 30;
            exit;
        } elseif ($pvj <= 0) {
            echo "Vous n'avez pas réussi a accomplir votre destin...";
            echo "Une autre vie sera peut-être plus chanceuse!";
            exit;
        }
    }
}

function combat_gros($pvj, $pvmonstregros)
{
    if ($pvj > 0 && $pvmonstregros > 0) {
        echo "Point de vie: " . $pvmonstregros . "<br>";
        echo "<img src='" . $_SESSION["imgmonstregros"] . "'><br><br>";
        echo $_SESSION["imgperso"] . "<br>";
        echo "Point de vie: " . $pvj . "<br>";
        echo "<form action='' method='POST'>";
        echo "<input type='submit' class='btn' value='Attaque' name='attaquegros'>";
        echo "<input type='submit' class='btn' value='Soin' name='soingros'>";
        echo "</form>";
    } else {
        if ($pvmonstregros <= 0) {
            echo "Le monstre a été vaincue!";
            echo "<form action='' method='POST'>";
            echo "<input type='submit' class='btn' value='Continuer' name='continue'>";
            echo "</form>";
            $_SESSION["pvmonstregros"] = 50;
            exit;
        } elseif ($pvj <= 0) {
            echo "Vous n'avez pas réussi a accomplir votre destin...";
            echo "Une autre vie sera peut-être plus chanceuse!";
            exit;
        }
    }
}

function combat_boss($pvj, $pvmonstreboss)
{
    if ($pvj > 0 && $pvmonstreboss > 0) {
        echo "Point de vie: " . $pvmonstreboss . "<br>";
        echo "<img src='" . $_SESSION["imgmonstreboss"] . "'><br><br>";
        echo $_SESSION["imgperso"] . "<br>";
        echo "Point de vie: " . $pvj . "<br>";
        echo "<form action='' method='POST'>";
        echo "<input type='submit' class='btn' value='Attaque' name='attaqueboss'>";
        echo "<input type='submit' class='btn' value='Soin' name='soinboss'>";
        echo "</form>";
    } else {
        if ($pvmonstreboss <= 0) {
            echo "Vous avez vaincue le boss !<br>";
            echo "Apres toutes vos aventures vous etes devenu un heros au yeux de tous !<br>";
            echo "A vous de choisir, une vie de repos ? ou bien continuer ?<br>";
            exit;
        } elseif ($pvj <= 0) {
            echo "Vous n'avez pas réussi a accomplir votre destin...<br>";
            echo "Une autre vie sera peut-être plus chanceuse!<br>";
            exit;
        }
    }
}

function epreuvefor($force)
{
    echo "<img src='./assets/images/event/excalibur.jpg'><br><br>";
    echo "Vous vous retrouvez dans une foret face a un grand arbre<br>";
    echo "Un enorme rochet avec une épée planter sur le dessus vous interpelle<br>";
    echo "Fesant preuves de curiositer vous grimper le rochet et agriper l'épée<br>";
    echo "...<br>";
    if ($force >= 7) {
        echo "Avec votre grande force vous reussissez a sortir l'épée de la roche !<br>";
        echo "Vous gagner +5 point d'attaque!<br>";
        $_SESSION["attaque"] += 5;
    } else {
        echo "Vos bras sont trop faibles pour sortir l'épée de la piere<br>";
        echo "Apres plusieurs essaie vous décider de partir<br>";
    }
    echo "<form action='' method='POST'>";
    echo "<input type='submit' class='btn' value='Continuer' name='continue'>";
    echo "</form>";
}
function epreuveagi($agilite)
{
    echo "<img src='./assets/images/event/piege.jpg'><br><br>";
    echo "Vous suivez un chemin en foret pour vous rendre au prochain village<br>";
    echo "Sentant une resistance a votre cheville vous decidez de regarder<br>";
    echo "Un long fil est tendue entre deux arbre c'est a cet instant que vous entendez un clic<br>";
    echo "...<br>";
    if ($agilite >= 7) {
        echo "Votre agilité vous permet d'eviter les differents piege qui vous tombe dessus vous récuperer un peu des lames tombées!<br>";
        echo "Vous gagner +5 point d'attaque !<br>";
        $_SESSION["attaque"] += 5;
    } else {
        echo "Vous n'avez pas le temps de réagir et fini enprisonner dans une cage artisanale<br>";
        echo "Apres un certain temps des aventuriers vous trouve et vous libere contre un peu de votre argent et du materiel du piege...<br>";
    }
    echo "<form action='' method='POST'>";
    echo "<input type='submit' class='btn' value='Continuer' name='continue'>";
    echo "</form>";
}
function epreuveint($intelligence)
{
    echo "<img src='./assets/images/event/dungeon.jpg'><br><br>";
    echo "Vous explorez un donjon Pour les tresors qu'il cache<br>";
    echo "Vous remarquez que le donjon est tres labyrinthique et mysterieux<br>";
    echo "Se servir de votre tête vas être nécessaire pour reussir a trouver le tresor<br>";
    echo "...<br>";
    if ($intelligence >= 7) {
        echo "Votre intelligence vous permet de trouver le bon chemin et de trouver le tresor caché dans ses profondeurs !<br>";
        echo "Vous gagner +5 point d'attaque !<br>";
        $_SESSION["attaque"] += 5;
    } else {
        echo "Vous vous perdez dans le dedale cedant a la panique...<br>";
        echo "Apres 1 jour a cherchez la sortie vous finissez par vous échappez de cet enfer de pierre<br>";
    }
    echo "<form action='' method='POST'>";
    echo "<input type='submit' class='btn' value='Continuer' name='continue'>";
    echo "</form>";
}
function epreuvecon($constitution)
{
    echo "<img src='./assets/images/event/beer.jpg'><br><br>";
    echo "Vous participez a un concours de boisson dans un village que vous visitez<br>";
    echo "Vous esperez gagnez la potion de vitalité qui est le premier prix<br>";
    echo "Vous allez affronter votre premier adversaire<br>";
    echo "...<br>";
    if ($constitution >= 7) {
        echo "Votre constitution laisse les paysans sans voix vous voyant surclasser le champion et vous acclamant pour votre victoire !<br>";
        echo "Vous gagner +10 point de vie !<br>";
        $_SESSION["pvjmax"] += 10;
    } else {
        echo "Vous vous reveillez dans un tas de foin un paysans qui etait au concours vous remarque<br>";
        echo "Apparement vous vous etes evanouie a la premiere biere, ralentissant la progression de la competition<br>";
        echo "Vous partez couvert de honte<br>";
    }
    echo "<form action='' method='POST'>";
    echo "<input type='submit' class='btn' value='Continuer' name='continue'>";
    echo "</form>";
}
function epreuvecha($charisme)
{
    echo "<img src='./assets/images/event/tavern.jpg'><br><br>";
    echo "Vous sejournez dans une taverne pour vous reposez de vos aventures<br>";
    echo "d'apres les rumeurs environnante la taverniere aurrait été une ancienne guerriere<br>";
    echo "Souhaitant vous renforcer vous décider d'aller lui parler<br>";
    echo "...<br>";
    if ($charisme >= 7) {
        echo "Votre charisme vous permet d'attirer son attention et apres plusieurs echanges, accepte de vous entrainer !<br>";
        echo "Vous gagner +5 point d'attaque!<br>";
        $_SESSION["attaque"] += 5;
    } else {
        echo "Vous essayer de l'interpeller mais elle ne vous prete aucunne attention...<br>";
        echo "Vous finissez votre biere et parter sans que l'on vous remarque<br>";
    }
    echo "<form action='' method='POST'>";
    echo "<input type='submit' class='btn' value='Continuer' name='continue'>";
    echo "</form>";
}
function epreuvesag($sagesse)
{
    echo "<img src='./assets/images/event/book.jpg'><br><br>";
    echo "Apres plusieurs jours de marche un étrange batiment se presente a vous.<br>";
    echo "Une fois rentré vous remarqué qu'il s'agit d'une bibliotheque<br>";
    echo "Un livre au millieux de la pièce vous parait for étrange<br>";
    echo "...<br>";
    if ($sagesse >= 7) {
        echo "Grace a vos connaissances du monde vous déchiffrez une methode ancienne pour augmenter la vitalité !<br>";
        echo "Vous gagner +5 point de vie !<br>";
        $_SESSION["pvjmax"] += 5;
    } else {
        echo "Vous ne comprenez absolument rien a ce qu'il y'a de marquer sur le livre<br>";
        echo "vous arretez a la premiere page et continuer votre route<br>";
    }
    echo "<form action='' method='POST'>";
    echo "<input type='submit' class='btn' value='Continuer' name='continue'>";
    echo "</form>";
}


//Selection aleatoire de l'image du monstre a combattre 
function aleamonstrepetit($alea)
{
    switch ($alea) {
        case 1:
            $_SESSION["imgmonstrepetit"] = "./assets/images/monstre/petit/bandit.jpg";
            break;
        case 2:
            $_SESSION["imgmonstrepetit"] = "./assets/images/monstre/petit/fée.jpg";
            break;
        case 3:
            $_SESSION["imgmonstrepetit"] = "./assets/images/monstre/petit/kobold.jpg";
            break;
        case 4:
            $_SESSION["imgmonstrepetit"] = "./assets/images/monstre/petit/lezard.jpg";
            break;
        case 5:
            $_SESSION["imgmonstrepetit"] = "./assets/images/monstre/petit/lumen.jpg";
            break;
        case 6:
            $_SESSION["imgmonstrepetit"] = "./assets/images/monstre/petit/ombre.jpg";
            break;
        case 7:
            $_SESSION["imgmonstrepetit"] = "./assets/images/monstre/petit/sirenne.jpg";
            break;
        case 8:
            $_SESSION["imgmonstrepetit"] = "./assets/images/monstre/petit/slime.jpg";
            break;
        case 9:
            $_SESSION["imgmonstrepetit"] = "./assets/images/monstre/petit/squelette.jpg";
            break;
        case 10:
            $_SESSION["imgmonstrepetit"] = "./assets/images/monstre/petit/zombie.jpg";
            break;
    }
}

function aleamonstremoyen($alea)
{
    switch ($alea) {
        case 1:
            $_SESSION["imgmonstremoyen"] = "./assets/images/monstre/moyen/djin.jpg";
            break;
        case 2:
            $_SESSION["imgmonstremoyen"] = "./assets/images/monstre/moyen/elem_air.jpg";
            break;
        case 3:
            $_SESSION["imgmonstremoyen"] = "./assets/images/monstre/moyen/elem_eau.jpg";
            break;
        case 4:
            $_SESSION["imgmonstremoyen"] = "./assets/images/monstre/moyen/elem_feu.jpg";
            break;
        case 5:
            $_SESSION["imgmonstremoyen"] = "./assets/images/monstre/moyen/elem_terre.jpg";
            break;
        case 6:
            $_SESSION["imgmonstremoyen"] = "./assets/images/monstre/moyen/griffon.jpg";
            break;
        case 7:
            $_SESSION["imgmonstremoyen"] = "./assets/images/monstre/moyen/loup_garou.jpg";
            break;
        case 8:
            $_SESSION["imgmonstremoyen"] = "./assets/images/monstre/moyen/troll.jpg";
            break;
    }
}

function aleamonstregros($alea)
{
    switch ($alea) {
        case 1:
            $_SESSION["imgmonstregros"] = "./assets/images/monstre/gros/arreigne.jpg";
            break;
        case 2:
            $_SESSION["imgmonstregros"] = "./assets/images/monstre/gros/basilisk.jpg";
            break;
        case 3:
            $_SESSION["imgmonstregros"] = "./assets/images/monstre/gros/bknight.jpg";
            break;
        case 4:
            $_SESSION["imgmonstregros"] = "./assets/images/monstre/gros/geant.jpg";
            break;
        case 5:
            $_SESSION["imgmonstregros"] = "./assets/images/monstre/gros/minotaure.jpg";
            break;
        case 6:
            $_SESSION["imgmonstregros"] = "./assets/images/monstre/gros/yeti.jpg";
            break;
    }
}

function aleamonstreboss($alea)
{
    switch ($alea) {
        case 1:
            $_SESSION["imgmonstreboss"] = "./assets/images/monstre/boss/cthullu.jpg";
            break;
        case 2:
            $_SESSION["imgmonstreboss"] = "./assets/images/monstre/boss/dragon.jpg";
            break;
        case 3:
            $_SESSION["imgmonstreboss"] = "./assets/images/monstre/boss/leviathan.jpg";
            break;
        case 4:
            $_SESSION["imgmonstreboss"] = "./assets/images/monstre/boss/liche.jpg";
            break;
        case 5:
            $_SESSION["imgmonstreboss"] = "./assets/images/monstre/boss/vampire.jpg";
            break;
    }
}
