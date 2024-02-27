<?php

require "/var/www/html/cantinaItaliana/models/loginModel.php";

if(isset($_POST)){
	$login = new Login;
	$login->verifyUser();
}

class Login{
	function verifyUser(){
		$userName = $_POST["usrName"];
		$userPassword = $_POST["usrPass"];
		
		$model = new loginModel;
		
		$model->verifyLogin($userName,$userPassword);	
	}
}
