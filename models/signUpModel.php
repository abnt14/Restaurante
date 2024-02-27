<?php

require "../databaseConn.php";

class signUpModel{
	private $tableName = "usersNames";
	
	function registerUser($name,$password){
		$conn = new Connection;
		$conn->getConnection("users");
		
		$sql = "INSERT INTO $this->tableName(name,password) VALUES('$name','$password')";
		$stmt = $conn->conn->prepare($sql);
		$stmt->execute();
	}
}
