
<?php


require_once("config.php");
echo "Trabalhando em manutenção!!!!<br>";
/*$sql= new Sql();
$results=$sql->select("SELECT* FROM db_clientes");*/
$root=new Usuario();
$root->loadbyId(11);
echo "$root";

//echo json_encode($results);


?>
<div style=" background-color:grey;color:white;width: 790px;margin-left: 25%;font-size: 20px;">
	<?php echo json_encode($results); ?></div>