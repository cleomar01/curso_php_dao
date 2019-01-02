<?php

class Sql extends pdo
{
	private $conn;
	function __construct()
	{
		

		$this->conn = new pdo("mysql:host=127.0.0.1;dbname=dbphp7","root","");


	}
	private  function setParams($statment,$parameters=array()){
		foreach($parameters as $key => $value){
			$this->setParam($key,$value);
		
}
}
		 function  setParam($statment,$key,$value){
			 $stmt ->bindParam($key,$value);
			
		}
	
	 function query($rawQuery,$params=array()){
		$stmt = $this->conn ->prepare($rawQuery);
		 $this->setParam($stmt,$params);
		  $stmt->exec();
		 return $stmt;
		
		function select($rawQuery,$params=array()):array{
			$stm = $this->query($rawQuery,$params);
			return $stm->fetchAll(PDO::fetch_assoc);
			
		}
		
	}

}

?>