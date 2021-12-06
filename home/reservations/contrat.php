<?php
session_start();

include "../../env.php"; //recuperer les configurations de l'environnement 
include $_SESSION['composants']."header.php";
echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"dev/css/style.css\">" ; // custom style
echo "<title>Abritel - page d'accueil | premiere plateforme</title>";// titre de la page 
include $_SESSION['composants']."nav.php";
if ($_SESSION['role'] === "client") {
include $_SESSION['pages'].'contrat-reservation.php';
}elseif ($_SESSION['role'] === "directeur"){
 include $_SESSION['pages'].'contrat-reservation.php';
}
include $_SESSION['composants']."footer.php";
?>

