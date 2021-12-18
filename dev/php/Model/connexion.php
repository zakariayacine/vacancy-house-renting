<?php
$host='localhost';
$user='root';
$dbname="location";
$pass='';
try{

	$db = new PDO("mysql:host=".$host.";dbname=".$dbname,$user,$pass);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
}
catch (Exception $e){
	echo "ERREUR: " . $e->getMessage();
};
return $db;
?>