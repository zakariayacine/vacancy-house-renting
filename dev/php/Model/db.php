<?php
require('connexion.php'); //parametres de connexion PDO 
require('query.php'); // retourne les fonctions PDO (select, select one, ext...) les fonction seront documenté
require('users.php'); //renvoie les variable du model concerné (methodologie sera documenté)

$var = postconverter($inputName,$_POST);
$selectOneresult = selectOne($db,$table,$columns,$var);

//vérifier si la variable est rempli (le resultat renvoi true ou false)
if($selectOneresult){
	echo $selectOneresult[0];
	echo "<br>";
	echo $selectOneresult[1];
	echo "<br>";
	echo $selectOneresult[2];
	echo "<br>";
	echo $selectOneresult[3];
	echo "<br>";
	echo $selectOneresult[5];
	echo "<br>";
	echo $selectOneresult[6];
	echo "<br>";
	echo $selectOneresult[7];
	echo "<br>";
}
//si on ne trouve rien il renvoie ce message
else echo 'makach';
?>

		