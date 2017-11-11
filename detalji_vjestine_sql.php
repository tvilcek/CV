<?php include 'pdo.php'; 

if($_POST["id"] > 0 && $_POST["submit"] == "Uredi" ){
	$upit = $db->query("UPDATE vjestine SET 
		naziv = '" . $_POST["naziv"] . "',
		vrijednost = '" . $_POST["vrijednost"] . "'
		WHERE
		id = " . $_POST["id"] . "
		");
	header("Location:vjestine.php");
}
elseif($_POST["id"] > 0 && $_POST["submit"] == "Obriši" ){
	$upit = $db->query("DELETE FROM vjestine WHERE id = " . $_POST["id"]);
	header("Location:vjestine.php");
}
elseif($_POST["id"] == 0 ){
	$upit = $db->query("INSERT INTO vjestine 
		(naziv, vrijednost) VALUES
		('" . $_POST["naziv"] . "',
		'" . $_POST["vrijednost"] . "'		
		)");
	header("Location:vjestine.php");
}

?>
