<?php
session_start();
if (!isset($_SESSION["mail"])) {
    header("Location: ./connexion.php");
}
if ($_SESSION["userrole"] != "admin") {
    header("Location: ./profil.php");
}


if (!empty($_POST["envoie2"])) {
    include  "./assets/include/connexionbdd.php";
    $iduser = $_POST["idchoix"];

    $sql = "DELETE FROM `personnages` WHERE `iduser` = :iduser ";
    $suppresion = $connexion->prepare($sql);
    $suppresion->bindParam(":iduser", $iduser, PDO::PARAM_STR);
    $suppresion->execute();

    $sql = "DELETE FROM `users` WHERE `iduser` = :iduser ";
    $suppresion = $connexion->prepare($sql);
    $suppresion->bindParam(":iduser", $iduser, PDO::PARAM_STR);
    $suppresion->execute();

    header("Location: ./profiladmin.php");
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
            <h1>PROFIL ADMIN</h1>
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
                    echo "<h2>Liste de joueur :</h2>";
                    $id = $_SESSION["id"];
                    $sql = "SELECT iduser,nom,prenom FROM users where userrole = 'joueur'";
                    echo "<div>";
                    echo "<table>";
                    echo "<tr><td>IDUSER</td><td>NOM</td><td>PRENOM</td></tr>";
                    foreach ($connexion->query($sql) as $user) {
                        echo "<tr>";
                        foreach ($user as $cle => $valeur) {
                            echo "<td> $valeur </td>";
                        }
                        echo "</tr>";
                    }
                    echo "</table>";
                    echo "</div>";
                    echo "<form action='' method='POST'>";
                    echo "<select name='idchoix'>";
                    echo "<option value='none'>-utilisateur-</option>";
                    foreach ($connexion->query($sql) as $user) {
                        echo "<option value='" . $user["iduser"] . "'>" . $user["iduser"] . "</option>";
                    }
                    echo "</select><br>";
                    echo "<input style='width:300px' type='submit' value='supprimer joueur' class='btn' name='envoie2'>";
                    echo "</form>";

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