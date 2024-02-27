<?php
	require "/var/www/html/cantinaItaliana/models/menuManagementModel.php";
	
	class menuController{
		function addDish(){
			$nameAdd = $_POST['dishAddName'];
			$descriptionAdd = $_POST['dishAddDescription'];
			$priceAdd = $_POST['dishAddPrice'];
			$weekdayAdd = $_POST['dishAddWeekDay'];
			
			$model = new menuModel;
			$dishId = $model->generateDishId();
			$model->addDishDb($nameAdd,$descriptionAdd,$priceAdd,$weekdayAdd,$dishId);
		}
		
		function updateDish(){
			if(isset($_POST['dishEditName']) && !isset($_POST['dishEditDescription'])){
				$nameEdit = $_POST['dishEditName'];
				$model = new menuModel;
				$model->validateUpdateName($nameEdit);
			}
			if(isset($_POST['dishEditName']) && isset($_POST['dishEditDescription']) && isset($_POST['dishEditPrice']) && isset($_POST['dishEditWeekday'])){
				$nameUpdate = $_POST['dishEditName'];
				$descriptionUpdate = $_POST['dishEditDescription'];
				$priceUpdate = $_POST['dishEditPrice'];
				$weekdayUpdate = $_POST['dishEditWeekday'];
				session_start();
				
				$oldName = $_SESSION['oldName'];
				
				$model = new menuModel;
				$model->updateDishDb($oldName,$nameUpdate,$descriptionUpdate,$priceUpdate,$weekdayUpdate);
			}
		}
		
		function removeDish(){
			$name = $_POST['dishReName'];
			$model = new menuModel;
			$model->removeDishDb($name);
		}
		
		function verifyRequest(){
			if($_POST['dishAddName']){
				$this->addDish();
			}
			if($_POST['dishEditName']){
				$this->updateDish();
			}
			if($_POST['dishReName']){
				$this->removeDish();
			}
		}
	}
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$controller = new menuController;
		$controller->verifyRequest();
	}
