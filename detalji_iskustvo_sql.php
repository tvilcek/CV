<?php include 'pdo.php'; 

if($_POST["id"] > 0 && $_POST["submit"] == "Uredi" ){
	$upit = $db->query("UPDATE iskustvo SET 
		trajanje = '" . $_POST["trajanje"] . "',
		pozicija = '" . $_POST["pozicija"] . "',
		ustanova = '" . $_POST["ustanova"] . "'
		WHERE
		id = " . $_POST["id"] . "
		");
	header("Location:iskustvo.php");
}
elseif($_POST["id"] > 0 && $_POST["submit"] == "Obriši" ){
	$upit = $db->query("DELETE FROM iskustvo WHERE id = " . $_POST["id"]);
	header("Location:iskustvo.php");
}
elseif($_POST["id"] == 0 ){
	$upit = $db->query("INSERT INTO iskustvo 
		(trajanje, pozicija, ustanova) VALUES
		('" . $_POST["trajanje"] . "',
		'" . $_POST["pozicija"] . "',
		'" . $_POST["ustanova"] . "'	
		)");
	header("Location:iskustvo.php");
}

?>
