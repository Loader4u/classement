<?php

include 'db_connect.php';

if(isset($_POST['valider'])){
        $nom=$_POST['nom'];
        $added = ajout_categorie($nom);
		if ($added) {
			header('Location: categories.php?added=1');
		}
    }
?>