<?php include 'pdo.php'; 

if($_POST["id"] > 0 && $_POST["submit"] == "Uredi" ){
	$upit = $db->query("UPDATE dodatne_inf SET 
		naziv = '" . $_POST["naziv"] . "',
		vrijednost = '" . $_POST["vrijednost"] . "'
		WHERE
		id = " . $_POST["id"] . "
		");
	header("Location:dodatno.php");
}
elseif($_POST["id"] > 0 && $_POST["submit"] == "Obriši" ){
	$upit = $db->query("DELETE FROM dodatne_inf WHERE id = " . $_POST["id"]);
	header("Location:dodatno.php");
}
elseif($_POST["id"] == 0 ){
	$upit = $db->query("INSERT INTO dodatne_inf 
		(naziv, vrijednost) VALUES
		('" . $_POST["naziv"] . "',
		'" . $_POST["vrijednost"] . "'		
		)");
	header("Location:dodatno.php");
}

?>
