<?php
session_start();
if (isset($_SESSION["mail"])) {
    header("Location: ./profil.php");
}
if (!empty($_POST["envoie"])) {
    include_once "./assets/include/fonction.php";
    $mail = $_POST["mail"];
    $exist = rechercheMail($mail);
    $valideprenom = verifyname($_POST["prenom"]);
    $validenom = verifyname($_POST["nom"]);
    $validemail = verifymail($_POST["mail"]);
    $validemdp = verifymdp($_POST["mdp1"]);
    if (($exist == 0) && ($_POST["mdp1"] == $_POST["mdp2"]) && ($valideprenom == 1) && ($validenom == 1) && ($validemail == 1) && ($validemdp == 1)) {
        include_once "./assets/include/connexionbdd.php";
        $prenom = secu($_POST["prenom"]);
        $nom = secu($_POST["nom"]);
        $mdp = password_hash($_POST["mdp1"], PASSWORD_DEFAULT);
        $userrole = "joueur";

        $sql = "INSERT INTO users(prenom, nom, email, mdp, userrole) VALUES (:prenom,:nom, :email, :mdp, :userrole)";
        $insertion = $connexion->prepare($sql);
        $insertion->bindParam(":prenom", $prenom, PDO::PARAM_STR);
        $insertion->bindParam(":nom", $nom, PDO::PARAM_STR);
        $insertion->bindParam(":email", $mail, PDO::PARAM_STR);
        $insertion->bindParam(":mdp", $mdp, PDO::PARAM_STR);
        $insertion->bindParam(":userrole", $userrole, PDO::PARAM_STR);

        $insertion->execute();
        header("Location: ./connexion.php");
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="inscription,formulaire,compte,dossier">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Inscription</title>
</head>

<body>
    <main class="insCon">
        <div class="inscription">
            <form action="" method="POST">
                <input name="mail" type="email" placeholder="Email"><br>
                <?php
                if (!empty($_POST["envoie"]) && ($validemail != 1)) {
                    echo "<span style= 'color: red'> l'adresse mail saisie est incorrecte.</span><br>";
                }
                if (!empty($_POST["envoie"]) && ($exist != 0)) {
                    echo "<span style= 'color: red'> l'adresse mail saisie est déjà utilisée par un autre utilisateur.</span><br>";
                }
                ?>
                <input name="nom" type="text" placeholder="Nom"><br>
                <?php
                if (!empty($_POST["envoie"]) && ($validenom != 1)) {
                    echo "<span style= 'color: red'> le nom e doit contenir que des lettres</span><br>";
                }
                ?>
                <input name="prenom" type="text" placeholder="Prenom"><br>
                <?php
                if (!empty($_POST["envoie"]) && ($valideprenom != 1)) {
                    echo "<span style= 'color: red'> le prénom e doit contenir que des lettres</span><br>";
                }
                ?>
                <input name="mdp1" type="password" placeholder="Mot de passe"><br>
                <input name="mdp2" type="password" placeholder="verification mot de passe"><br>
                <?php
                if (!empty($_POST["envoie"]) && ($validemdp != 1)) {
                    echo "<span style= 'color: red'> le mot de passe doit : <br>
                    - comporter au moins de 12 caractères. <br>
                    - Avoir au moins une lettre majuscule. <br>
                    - Avoir au moins une lettre minuscule. <br>
                    - Avoir au moins un chiffre.<br>
                    - Avoir au moins un caractère spécial.<br></span>";
                }
                if (!empty($_POST["envoie"]) && ($_POST["mdp1"] != $_POST["mdp2"])) {
                    echo "<span style= 'color: red'> les mots de passes saisis sont différents</span> <br>";
                }
                ?>
                <input type="submit" value="Je m'inscris" name="envoie" class="btn"><br>



            </form>
            <div>
                <a href="./connexion.php"><button class="btn">deja inscrit</button></a>
            </div>
        </div>
    </main>

</body>

</html>