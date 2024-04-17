<?php
session_start();
if (!isset($_SESSION["mail"])) {
    header("Location: ./connexion.php");
}

// si le formulaire est remplie 
if (!empty($_POST["envoie"])) {
    include_once "./assets/include/fonction.php";
    //recuperation des stats du personnage et securisation
    $force = secu($_POST["for"]);
    $agilite = secu($_POST["agi"]);
    $intelligence = secu($_POST["intel"]);
    $charisme = secu($_POST["char"]);
    $constitution = secu($_POST["cons"]);
    $sagesse = secu($_POST["sag"]);
    $somme = $force + $agilite + $intelligence + $charisme + $constitution + $sagesse;
    //si l'utilisateur met plus de 10 point de stats le personnage ne sera pas crée (resultat: else)
    if (($somme <= 40)) {
        include_once "./assets/include/connexionbdd.php";
        //seccurisation des informations du personnage
        $nompersonnage = secu($_POST["nompersonnage"]);
        $race = secu($_POST["Race"]);
        $classe = secu($_POST["Classe"]);
        $genre = secu($_POST["Genre"]);
        $iduser = $_SESSION["id"];
        //debut de la requete SQL
        $sql = "INSERT INTO personnages(nompersonnage, race, classe, genre, strength, agility, intelligence, constitution, charisma, wisdom, iduser) 
        VALUES (:nompersonnage, :race, :classe, :genre, :strength, :agility, :intelligence, :constitution, :charisma, :wisdom, :iduser)";
        //insertion des variable initialiser plus tot
        $insertion = $connexion->prepare($sql);
        $insertion->bindParam(":nompersonnage", $nompersonnage, PDO::PARAM_STR);
        $insertion->bindParam(":race", $race, PDO::PARAM_STR);
        $insertion->bindParam(":classe", $classe, PDO::PARAM_STR);
        $insertion->bindParam(":genre", $genre, PDO::PARAM_STR);
        $insertion->bindParam(":strength", $force, PDO::PARAM_INT);
        $insertion->bindParam(":agility", $agilite, PDO::PARAM_INT);
        $insertion->bindParam(":intelligence", $intelligence, PDO::PARAM_INT);
        $insertion->bindParam(":constitution", $constitution, PDO::PARAM_INT);
        $insertion->bindParam(":charisma", $charisme, PDO::PARAM_INT);
        $insertion->bindParam(":wisdom", $sagesse, PDO::PARAM_INT);
        $insertion->bindParam(":iduser", $iduser, PDO::PARAM_INT);
        //execution de la requete SQL
        $insertion->execute();
        header("Location: ./profil.php");
    } else {
        $e = "Vous avez ajoutez plus de 10 point de stats";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="création,personnage,fantaisie,medieval">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Creation</title>
</head>

<body>
    <?php
    include "./assets/include/header.php";
    ?>

    <main>
        <div class="banniere">
            <h1>CRÉATION</h1>
            <div class="creation">
                <h2>Fiche de création de personnage</h2>
                <form action="" method="POST">
                    <fieldset>
                        <legend>Race - Classe - Genre</legend>
                        <select name="Race">
                            <option value="humain">Humain</option>
                            <option value="elfe">Elfe</option>
                            <option value="nain">Nain</option>
                            <option value="demi-animal">Demi-Animal</option>
                            <option value="demi-orc">Demi-Orc</option>
                            <option value="demi-demon">Demi-Démon</option>
                        </select>
                        <select name="Classe">
                            <option value="guerrier">Guerrier</option>
                            <option value="archer">Archer</option>
                            <option value="mage">Mage</option>
                            <option value="dompteur">Dompteur</option>
                            <option value="pretre">Pretre</option>
                            <option value="voleur">Voleur</option>
                        </select>
                        <select name="Genre">
                            <option value="homme">Homme</option>
                            <option value="femme">Femme</option>
                        </select>
                    </fieldset>
                    <fieldset class="stat">
                        <legend>Statistique</legend>
                        <h3>Vous avez 10 point à répartir</h3>
                        <div class="stats">
                            <label for="for">Force</label>
                            <input type="number" name="for" min="5" max="10" value="5">
                            <label for="agi">Agilité</label>
                            <input type="number" name="agi" min="5" max="10" value="5"><br>
                        </div>
                        <div class="stats">
                            <label for="intel">Inteligence</label>
                            <input type="number" name="intel" min="5" max="10" value="5">
                            <label for="char">Charisme</label>
                            <input type="number" name="char" min="5" max="10" value="5"><br>
                        </div>
                        <div class="stats">
                            <label for="cons">Constitution</label>
                            <input type="number" name="cons" min="5" max="10" value="5">
                            <label for="sag">Sagesse</label>
                            <input type="number" name="sag" min="5" max="10" value="5"><br>
                        </div>
                    </fieldset>
                    <input type="text" placeholder="Nom personnage" name="nompersonnage"><br>
                    <input type="submit" value="Valider creation" class="btn" name="envoie">
                    <?php
                    if (!empty($_POST["envoie"])) {
                        if ($somme > 40) {
                            echo "<br><br><span style='color:red;'>" . $e . "</span><br>";
                        }
                    }
                    ?>
                </form>
                <br><br><br><br>
            </div>
        </div>
    </main>

    <?php
    include "./assets/include/footer.php";
    ?>
</body>

</html>