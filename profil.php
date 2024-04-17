<?php
session_start();
if (!isset($_SESSION["mail"])) {
    header("Location: ./connexion.php");
}
if ($_SESSION["userrole"] != "joueur") {
    header("Location: ./profiladmin.php");
}

if (!empty($_POST["envoie"])) {
    $_SESSION["personnage"] = $_POST["persochoix"];
    $personnage = $_SESSION["personnage"];
    header("Location: ./personnage.php?='$personnage'");
}

if (!empty($_POST["envoie2"])) {
    include  "./assets/include/connexionbdd.php";
    $personnage = $_POST["persochoix"];
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
    <meta name="keywords" content="profil,JDR,information,compte">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Profil</title>
</head>

<body>
    <?php
    include "./assets/include/header.php";
    ?>

    <main>
        <div class="banniere">
            <h1>PROFIL</h1>
            <div class="profil">
                <div class="gauche">
                    <?php
                    echo "<p><span>Adresse email : </span>" . $_SESSION['mail'] . "</p><br><br>";
                    echo "<p><span>Nom : </span>" . $_SESSION['nom'] . "</p><br><br>";
                    echo "<p><span>Prenom: </span>" . $_SESSION['prenom'] . "</p><br><br>";
                    ?>
                </div>
                <div class="droite">
                    <?php
                    include  "./assets/include/connexionbdd.php";
                    include "./assets/include/fonction.php";
                    echo "<h2>Liste de personnages :</h2>";
                    $id = $_SESSION["id"];
                    $sql = "SELECT nompersonnage FROM personnages where iduser = '$id'";
                    echo "<div>";
                    foreach ($connexion->query($sql) as $personnage) {
                        foreach ($personnage as $cle => $valeur) {
                            echo "<p>" . $valeur . "</p>";
                        }
                    }
                    echo "</div>";
                    echo "<form action='' method='POST'>";
                    echo "<select name='persochoix'>";
                    echo "<option value='none'>-personnage-</option>";
                    foreach ($connexion->query($sql) as $personnage) {
                        foreach ($personnage as $cle => $valeur) {
                            echo "<option value='$valeur'>" . $valeur . "</option>";
                        }
                    }
                    echo "</select><br>";
                    echo "<input type='submit' value='voir personnage' class='btn' name='envoie'>";
                    echo "<input style='width:300px' type='submit' value='supprimer personnage' class='btn' name='envoie2'>";
                    echo "</form>";
                    ?>
                </div>
            </div>
        </div>
        <br><br><br><br>
    </main>

    <?php
    include "./assets/include/footer.php";
    ?>
</body>

</html>