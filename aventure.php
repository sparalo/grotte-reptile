<?php
session_start();
if (!isset($_SESSION["mail"])) {
    header("Location: ./connexion.php");
}

if (!empty($_POST["commencer"])) {
    $_SESSION["personnage"] = $_POST["persochoix"];
    $personnage = $_SESSION["personnage"];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="jeu de role,RPG,aventure,JDR">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Aventure</title>
</head>

<body>
    <?php
    include "./assets/include/header.php";
    ?>

    <main>

        <div class="aventure">
            <h2>Choississez un personnage</h2>
            <form action="" method="POST">
                <?php
                include  "./assets/include/connexionbdd.php";
                include "./assets/include/fonction.php";

                $id = $_SESSION["id"];
                $sql = "SELECT nompersonnage FROM personnages where iduser = '$id'";
                echo "<select name='persochoix'>";
                echo "<option value='none'>-personnage-</option>";
                foreach ($connexion->query($sql) as $personnage) {
                    foreach ($personnage as $cle => $valeur) {
                        echo "<option value='$valeur'>" . $valeur . "</option>";
                    }
                }
                echo "</select>";
                ?>
                <input type="submit" class="btn" name="commencer" value="commencer">
                <div class="jeu">
                    <?php
                    include "./assets/include/aventurefonc.php";
                    ?>
                </div>
            </form>
        </div>

    </main>

    <?php
    include "./assets/include/footer.php";
    ?>
</body>

</html>