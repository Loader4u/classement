<?php

include 'db_connect.php';



if(isset($_GET['added'])){
		echo 'Pilote ajouté </br></br>';
    }

$result = $mysqli->query('SELECT Id,Nom,Prenom FROM pilotes order by Nom');
$line_count = $result->num_rows;
if ($line_count > 0){
	while ($row = $result->fetch_assoc()) {
		echo $row['Prenom'] . ' ' . $row['Nom'] . '</br>' ;
	}
	$result->close();
} else {
	echo 'Aucun pilote renseigné.</br>';
}

?>
</br>

<form name="add_pilote" method="post" action="ajout_pilote.php">
    Entrez le nom du pilote : <input type="text" name="nom"/> <br/>
    Entrez le prénom du pilote : <input type="text" name="prenom"/><br/>
    <input type="submit" name="valider" value="Ajouter"/>
</form>

