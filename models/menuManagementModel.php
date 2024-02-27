<?php
	require "../databaseConn.php";
	
	class menuModel{
			public $conn;
			public $database = "dishes";
			public $table = "dishesNames";
			
			//Inicia a conexão com o banco de dados que será usada pelas demais funções
			function __construct(){
				$this->conn = new Connection;
				$this->conn->getConnection($this->database);
			}
			
			function generateDishId(){
				$sql = "SELECT COUNT(*) FROM $this->table";
				$stmt = $this->conn->conn->prepare($sql);
				$stmt->execute();
				
				$arra = $stmt->fetch(PDO::FETCH_ASSOC);
				return $arra['COUNT(*)']+1;
			}
			
			function validateUpdateName($name){
				//Inicialmente verifica se o nome que o usuário deseja editar de fato existe na página
				$sql = "SELECT * FROM $this->table WHERE name = '$name'";
				$stmt = $this->conn->conn->prepare($sql);
				$stmt->execute();
				
				$arra = $stmt->fetch(PDO::FETCH_ASSOC);
				 
				if(!empty($arra['name'])){
					require "../views/menuManagementView.php";
				}
				else{
					echo "Error, name not found!";
				}
			}
			
			function addDishDb($name,$description,$price,$weekday,$id){	
				$sql = "INSERT INTO $this->table(name,description,price,weekday,id) VALUES('$name','$description',$price,$weekday,$id)";
				$stmt = $this->conn->conn->prepare($sql);
				$stmt->execute();
			}
			function updateDishDb($oldName,$nameUp,$descriptionUp,$priceUp,$weekdayUp){
				$sql = "UPDATE $this->table SET name = '$nameUp', description = '$descriptionUp', price = $priceUp, weekday = $weekdayUp WHERE name = '$oldName'";
				$stmt = $this->conn->conn->prepare($sql);
				$stmt->execute();
			}
			function removeDishDb($name){
				$sql = "DELETE FROM $this->table WHERE name = '$name'";
				$stmt = $this->conn->conn->prepare($sql);
				$stmt->execute();
			}
	}
