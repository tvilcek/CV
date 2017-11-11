<?php include 'pdo.php'; 


if($_POST["id"] > 0 && $_POST["submit"] == "Uredi" ){
	$upit = $db->query("UPDATE osobne_inf SET 
		naziv = '" . $_POST["naziv"] . "',
		vrijednost = '" . $_POST["vrijednost"] . "'
		WHERE
		id = " . $_POST["id"] . "
		");
	header("Location:index.php");
}
elseif($_POST["id"] > 0 && $_POST["submit"] == "Obriši" ){
	$upit = $db->query("DELETE FROM osobne_inf WHERE id = " . $_POST["id"]);
	header("Location:index.php");
}
elseif($_POST["id"] == 0 ){
	$upit = $db->query("INSERT INTO osobne_inf 
		(naziv, vrijednost) VALUES
		('" . $_POST["naziv"] . "',
		'" . $_POST["vrijednost"] . "'		
		)");
	header("Location:index.php");
}

?>
