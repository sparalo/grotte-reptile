<?php
if (isset($_SESSION["mail"])) {
    echo "<header>
    <link
        rel='shortcut icon'
        type='image/png'
        href='./assets/images/gecko.png'/>
    <nav id='nav'>
    <ul class='menu'>
            <img style='width:75px;' src='./assets/images/gecko_4.png'>
            <li><a href='./index.php'>Acceuil</a></li>
            <li><a href='./creation.php'>Creation</a></li>
            <li><a href='./aventure.php'>Aventure</a></li>
            <li><a href='./profil.php'>Profil</a></li>
            <li><a href='./deconnexion.php'>Deconnexion</a></li>
        </ul>
        <div id='icons'></div>
    </nav>
    </header>
    <script src='./assets/js/script.js'></script>";
} else {
    echo "<header>
    <link
        rel='shortcut icon'
        type='image/png'
        href='./assets/images/gecko.png'/>
    <nav id='nav'>
    <ul class='menu'>
            <img style='width:75px;' src='./assets/images/gecko_4.png'>
            <li><a href='./index.php'>Acceuil</a></li>
            <li><a href='./creation.php'>Creation</a></li>
            <li><a href='./aventure.php'>Aventure</a></li>
            <li><a href='./connexion.php'>Connexion</a></li>
            <li><a href='./inscription.php'>Inscription</a></li>
        </ul>
        <div id='icons'></div>
    </nav>
    </header>
    <script src='./assets/js/script.js'></script>";
}
