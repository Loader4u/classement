<?php

include 'db_connect.php';

if(isset($_POST['valider'])){
        $nom=$_POST['nom'];
        $prenom=$_POST['prenom'];
        $added = ajout_pilote($nom,$prenom);
		if ($added) {
			header('Location: pilotes.php?added=1');
		}
    }
?>