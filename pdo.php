<?php
try {
	//PROMJENIT lozinku ako je nema na localhostu
	$db = new PDO('mysql:host=localhost;dbname=cv_baza', 'root', 'admin');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$db->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
$db->query("set names utf8");

?>

