<?php
session_start(); //demarrer une session
/* retournĂ© les composant du site avec include */
include "env.php"; //recuperer les configurations de l'environnement 
include $_SESSION['composants']."header.php";
echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"dev/css/style.css\">" ; // custom style
echo "<title>Abritel - Connexion | premiere plateforme</title>";// titre de la page 
include $_SESSION['composants']."nav.php";
include $_SESSION['pages']."connexion-body.php";
include $_SESSION['composants']."footer.php";
?>