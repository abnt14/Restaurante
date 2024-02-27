<?php
require "/var/www/html/cantinaItaliana/databaseConn.php";

class loginModel{
	function verifyLogin($user,$password){
		$conn = new Connection;
		
		$conn->getConnection("users");
		$tableName = "usersNames";
		
		$sql = "SELECT * FROM $tableName WHERE name = :user";
		$stmt = $conn->conn->prepare($sql);
		$stmt->bindParam(':user',$user,PDO::PARAM_STR);
		$stmt->execute();
		
		$arr = $stmt->fetch(PDO::FETCH_ASSOC);
		
		if($arr['name'] != '' && $arr['password'] != ''){
			if($arr['name'] == $user && $arr['password'] == $password){
				require "../views/menuManagementView.php";
			}
			else{
				echo "Erro, usuário não encontrado!";
			}
		}
	}
}
