<?php
session_start();
if ($_SESSION['role'] = "client") {
include "../../env.php"; //recuperer les configurations de l'environnement 
include $_SESSION['composants']."header.php";
echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"dev/css/style.css\">" ; // custom style
echo "<title>Abritel - page d'accueil | premiere plateforme</title>";// titre de la page 
include $_SESSION['composants']."nav.php";
include $_SESSION['pages'].'rdv-index.php';
include $_SESSION['composants']."footer.php";

}else{
	echo "erreur 400";
}


?>

