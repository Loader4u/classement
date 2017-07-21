<?php

$host = 'localhost';
$username = 'root';
$password = 'lbuecrieenn';
$database = 'rapatel';

if (!isset($mysqli)) {
	$mysqli = new mysqli($host,$username,$password,$database);
	if ($mysqli->connect_errno) {
		echo "Echec lors de la connexion à MySQL : " . $mysqli->connect_error;
	}
}

function ajout_pilote($nom,$prenom) {
	global $mysqli;
	$strSQL="INSERT INTO pilotes (Nom,Prenom) VALUES('" . $nom . "', '" . $prenom . "')";
	$inserted = $mysqli->query($strSQL) or die($mysqli->connect_error);
	return $inserted;
}

function efface_pilote($id) {
	global $mysqli;
	$strSQL='DELETE FROM pilotes WHERE Id=' . $id;
	
}

function ajout_categorie($nom) {
	global $mysqli;
	$strSQL="INSERT INTO categories (Nom) VALUES('" . $nom . "')";
	$inserted = $mysqli->query($strSQL) or die($mysqli->connect_error);
	return $inserted;
}

?>