<?php 

require_once("conpdo.php");

$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");

$stmt->execute();

$results = $stmt->fetchall(PDO::FETCH_ASSOC);

foreach ($results as $row) {

	foreach ($row as $key => $value) {

		echo " <strong> " . $key . ": </strong> " . $value . " <p>";
	
	}

	echo "=========================== <p>";

}

?>