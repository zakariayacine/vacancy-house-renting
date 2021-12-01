<?php
session_start(); //demarrer une session
/* retourné les composant du site avec include */
$_SESSION['pwd'] = getcwd(); //Retourne le dossier de travail courant

include "env.php"; //recuperer les configurations de l'environnement 
include $_SESSION['composants']."header.php";
echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"dev/css/style.css\">" ; // custom style
echo "<title>Abritel - page d'accueil | premiere plateforme</title>";// titre de la page 
include $_SESSION['composants']."nav.php";
include $_SESSION['pages']."index-body.php";
include $_SESSION['composants']."footer.php";
?>