<?php
// cette fonction convertie les valeur rapporté par la methode poste et les classes selon l'ordre des nom des input qu'on veut puis la rétourne en tableau, ce tableau sera exploité pour renvoyer sois chercher sois asigner des valeur a une requette sql.
//NB: celon le nom des input on pourra récupéré les poste qu'on veut, ici $data represente $_POST 
function postconverter($inputName,$data){
	ob_start();
	foreach ($inputName as $inputName) {
		if (ctype_digit($data[$inputName])) {
			echo intval($data[$inputName]).',';
		}else{
		  echo "'".$data[$inputName]."',";
		}
	}
	$result = ob_get_contents(); //on récupére le contenue des echos
	ob_end_clean();
	$result = substr($result,0,-1); // on supprime le caractère "," a la fin de la chaine
	$return = explode(',', $result); // on convertie en tableau
	return $return; //retourne le tableau 
}
	//la fonction binder est une fonction utilisé pour asemblé les columns et leurs valeurs dynamiquement, on pourra utilisé cette fonction l'or d'une modification ou un filtre de recherche, cette function est reutilisé ici dans "query.php" a fin de facilité les traitement.
 	function binder($columns,$values){
 		$number = count($columns); // on retroune le nombre de columns
 		ob_start(); // on demarre notre capture des echo
		for ($i=0; $i < $number; $i++) { 
		echo ''.$columns[$i].'='.$values[$i].' AND ';
		}
		$result = ob_get_contents(); // on retrourne les echo dans une chaine
		ob_end_clean();
		$result = substr($result,0,-4); // on supprime les caractère en trop
		return $result; // on retroune la chaine a exploité dans les requette
	}
	//cette fonction est utilisé pour récupéré toute les informations dans une table
	function selectAll($db,$table){
		$requete = $db->prepare("SELECT * FROM $table");
		$requete->execute();
		$data = $requete->fetchAll();
		return $data;
	}
	//cette fonction est utilisé pour récupéré une seul ligne dans la table avec des condition
	function selectOne($db,$table,$columns,$values){
		$condition = binder($columns,$values);
		$requete = $db->prepare("SELECT * FROM $table WHERE $condition");
		$requete->execute();
		$data = $requete->fetch();
		return $data;
	}
?>