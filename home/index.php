<?php
session_start();
if ($_SESSION['role'] === "client") {
include "../env.php"; //recuperer les configurations de l'environnement 
include $_SESSION['composants']."header.php";
echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"dev/css/style.css\">" ; // custom style
echo "<title>Abritel - Home | premiere plateforme</title>";// titre de la page 
include $_SESSION['composants']."nav.php";
include $_SESSION['pages'].'client-home.php';
include $_SESSION['composants']."footer.php";


}elseif ($_SESSION['role'] === "directeur") {
include "../env.php"; //recuperer les configurations de l'environnement 
include $_SESSION['composants']."header.php";
echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"dev/css/style.css\">" ; // custom style
echo "<title>Abritel - Home | premiere plateforme</title>";// titre de la page 
include $_SESSION['composants']."nav.php";
include $_SESSION['pages'].'directeur-home.php';
include $_SESSION['composants']."footer.php";
}else{
	echo "9iw";
}

?>