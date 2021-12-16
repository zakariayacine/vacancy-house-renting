<?php
require('connexion.php');
	$columns = array("Volvo", "BMW", "Toyota");
	$number = count($columns);
	$nameTable = "zak";
 	function requete($columns,$number){
 		ob_start(); 
		for ($i=0; $i < $number; $i++) { 
		echo ''.$columns[$i].'=:'.$columns[$i].' , ';
		}
		$result = ob_get_contents(); //Grab output
		ob_end_clean();
		$result = substr($result,0,-3);
		return $result;
	}
	$output = requete($columns,$number);
	
	function bindvalue($columns,$requete,$values){
		$requete->bindValue(':EMAIL','$email');
		$requete->execute();
	}
	function selectOne($nameTable){
	$requete = $db->prepare("SELECT * FROM $nameTable WHERE ID_USER=:ID_USER");
	$result = bindvalue($requete);
	return $result;
	}
	


				foreach ($columns as $column) {
			$column['name']=:$columns['name'],
		} where*/

?>