<?php
	require '/var/www/html/cantinaItaliana/models/homeModel.php';
	
	class homeController{
			public function __construct(){
					$this->loadHomePage();
			}
			
			public function loadHomePage(){
				$model = new homeModel;
				$model->updateMenu();
			}
	}
	
	$homePage = new homeController();
