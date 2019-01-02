
<?php


require_once("config.php");
$lista = new Sql();

$usuario = $lista("SELECT * FROM db_usuario");
echo json_encode($usuario);

?>