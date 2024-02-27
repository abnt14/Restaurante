<?php
	class Connection{
		private $host = 'localhost';
		private $user = 'admin';
		private $password = 'admin';
		public $conn;
		
		public function getConnection($database){
				$this->conn = new PDO("mysql:host=$this->host;dbname=$database",$this->user,$this->password);
		}
	}
