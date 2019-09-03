<?php 

require_once("conpdo.php");

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (:LOGIN, :PASSWORD)");

$login = "Dekcely";
$password = "12345678";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);

$stmt->execute();

echo "Inserido com sucesso!";

?>