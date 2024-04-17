<?php
session_start();
if (isset($_SESSION["mail"])) {
    header("Location: ./profil.php");
}
if (!empty($_POST["envoie"])) {
    include_once "./assets/include/fonction.php";
    $mail = $_POST["mail"];
    $mdp = $_POST["mdp1"];
    $validemdp = 1;
    $validemail = verifymail($mail);
    $exist = rechercheMail($mail);
    if (($exist != 0) && ($validemail == 1)) {
        include_once "./assets/include/connexionbdd.php";
        $sql = "SELECT * FROM users WHERE email = '$mail'";
        $requete = $connexion->query($sql);
        $user = $requete->fetch();
        if (password_verify($mdp, $user["mdp"])) {
            $_SESSION["id"] = $user["iduser"];
            $_SESSION["prenom"] = $user["prenom"];
            $_SESSION["nom"] = $user["nom"];
            $_SESSION["mail"] = $user["email"];
            $_SESSION["userrole"] = $user["userrole"];
            header("Location: ./profil.php");
        } else {
            $validemdp = 0;
            $e = "<span style= 'color: red'> Identifiant ou mot de passe incorrect </span><br>";
        }
    } else {
        $e = "<span style= 'color: red'> Identifiant ou mot de passe incorrect </span><br>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="connexion,formulaire,compte,dossier">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Connexion</title>
</head>

<body>
    <main class="insCon">
        <div class="connexion">
            <form action="" method="POST">
                <input name="mail" type="email" placeholder="Email"><br>
                <?php
                if (!empty($_POST["envoie"]) && ($validemail != 1)) {
                    echo $e;
                }
                if (!empty($_POST["envoie"]) && ($exist == 0)) {
                    echo $e;
                }
                if ((!empty($_POST["envoie"])) && ($validemdp == 0)) {
                    echo $e;
                }
                ?>
                <input name="mdp1" type="password" placeholder="Mot de passe"><br>
                <input name="envoie" value="connexion" type="submit" class="btn"><br>
            </form>
            <div>
                <a href="./inscription.php"><button class="btn">pas inscrit</button></a>
            </div>
        </div>
    </main>

</body>

</html>