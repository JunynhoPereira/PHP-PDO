<?php 

require_once("conpdo.php");

$stmt = $conn->prepare("UPDATE  tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");

$login = "Dekcely";
$password = "123qwe";
$id = 7;

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);
$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Alterado com sucesso!";

?>