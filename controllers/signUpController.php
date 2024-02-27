<?php

require "../models/signUpModel.php";

//se a requisição que iniciou ese arquivo for post, inicie o processo de registrar o usuário
if(isset($_POST)){
	$signUp = new signUpController;
	$signUp->registerUser();
}


class signUpController{
	function registerUser(){
		$name = $_POST["userName"];
		$password = $_POST["userPassword"];
		
		$model = new signUpModel;
		
		$model->registerUser($name,$password);
	}
}
