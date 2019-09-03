<?php 

require_once("conpdo.php");

$conn->begintransation();

$stmt = $conn->prepare("DELETE FROM  tb_usuarios WHERE idusuario = ?");

$id = 2;

$stmt->execute(array($id));

// $conn->rollback();

$conn->commit();



echo "Deletado com sucesso!";

?>