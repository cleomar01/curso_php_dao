<?php

class Sql extends PDO{
	private $conn;
	
	function __construct()
	{
		$this->conn=new pdo("mysql:host=localhost;dbname=cadastro","root","");
	}
	private function setParams($statment,$parameters=array()){
		foreach ($parameters as $key => $value) {
			$this->setParam($key,$value);
		}

	}
	public function query($rawQuery,$params=array()){
		$stmt=$this->conn->prepare($rawQuery);
		$this->setParams($stmt,$params);
		$stmt->execute();
		return $stmt;
		
	}
	private function setParam($statment,$key,$value){
		$statment->binParam($key,$value);
		
		
	}
	public function select($rawQuery,$params=array()):array{
		$stmt=$this->query($rawQuery,$params);
	return $stmt->fetchAll(PDO::FETCH_ASSOC);

	}
}

echo "Tudo bonitinho ate aqui";

?>