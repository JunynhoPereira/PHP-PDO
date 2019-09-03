<?php 

require_once("conpdo.php");

$stmt = $conn->prepare("DELETE FROM  tb_usuarios WHERE idusuario = :ID");

$id = 3;

$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Deletado com sucesso!";

?>