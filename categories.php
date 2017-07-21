<?php

include 'db_connect.php';



if(isset($_GET['added'])){
		echo 'Catégorie ajoutée </br></br>';
    }

$result = $mysqli->query('SELECT Id,Nom FROM categories order by Nom');
$line_count = $result->num_rows;
if ($line_count > 0){
	while ($row = $result->fetch_assoc()) {
		echo $row['Nom'] . '</br>' ;
	}
	$result->close();
} else {
	echo 'Aucune catégorie renseignée.</br>';
}


?>
</br>

<form name="add_categorie" method="post" action="ajout_categorie.php">
    Entrez le nom de la catégorie : <input type="text" name="nom"/> <br/>
    <input type="submit" name="valider" value="Ajouter"/>
</form>

