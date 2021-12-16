<?php
function userget($email,$password){
	try{
$nom = $_POST['NOM_EMP'];
$prenom = $_POST['PRENOM_EMP'];
$id = $_POST['ID_EMP'];
	$user = $db->prepare("UPDATE employe SET `NOM_EMP`=:NOM_EMP,`PRENOM_EMP`=:PRENOM_EMP where ID_EMP=:ID_EMP");
	$user->bindValue(':NOM_EMP','$nom');
	$user->bindValue(':PRENOM_EMP','$prenom');
	$user->bindValue(':ID_EMP','$id');
	$user->execute();
	return $user;
}catch (Exception $e){
	echo "ERREUR: " . $e->getMessage();
};
}


?>