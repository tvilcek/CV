<?php include 'pdo.php'; 


if($_POST["id"] > 0 && $_POST["submit"] == "Uredi" ){
	$upit = $db->query("UPDATE obrazovanje SET 
		trajanje = '" . $_POST["trajanje"] . "',
		stupanj = '" . $_POST["stupanj"] . "',
		ustanova = '" . $_POST["ustanova"] . "'
		WHERE
		id = " . $_POST["id"] . "
		");
	header("Location:obrazovanje.php");
}
elseif($_POST["id"] > 0 && $_POST["submit"] == "Obriši" ){
	$upit = $db->query("DELETE FROM obrazovanje WHERE id = " . $_POST["id"]);
	header("Location:obrazovanje.php");
}
elseif($_POST["id"] == 0 ){
	$upit = $db->query("INSERT INTO obrazovanje 
		(trajanje, stupanj, ustanova) VALUES
		('" . $_POST["trajanje"] . "',
		'" . $_POST["stupanj"] . "',
		'" . $_POST["ustanova"] . "'	
		)");
	header("Location:obrazovanje.php");
}

?>
