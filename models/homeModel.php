<?php
		require "/var/www/html/cantinaItaliana/databaseConn.php";
		
		class homeModel{
				public function updateMenu(){				
							$connection = new Connection;
							
							$connection->getConnection("dishes");
							
							//Pega somente os pratos com base no dia da semana
							$today = date("w");
							$tableName = "dishesNames";
							$sql = "SELECT * FROM $tableName WHERE weekday = :today";
							$stmt = $connection->conn->prepare($sql);
							$stmt->bindParam(':today',$today,PDO::PARAM_STR);
							$stmt->execute();
							
							
							require "/var/www/html/cantinaItaliana/views/homeView.php";
				}
		}
