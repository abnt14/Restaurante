<?php

class searchEgine{	
		private $controllers = array('/home');
		private $views = array('/login','/signUp');
	
		function acessController($url){
			$path = $url."Controller";
			$file = "/var/www/html/cantinaItaliana/controllers".$path.".php";
			
			if(file_exists($file)){
				require $file;
			}
			else{
				header("Location: /views/pageNotFound.php");
			}
		}
		function acessView($url){
			$path2 = $url."View";
			$file = "/var/www/html/cantinaItaliana/views".$path2.".php";
			
			if(file_exists($file)){
				require $file;
			}
			else{
				header("Location: /views/pageNotFound.php");
			}
		}
		
		function defineRoute($url){
			for ($i = 0; $i< sizeof($this->views);$i++){
					if($this->views[$i] == $url){
						$this->acessView($url);
						return true;
					}
			}
			for ($j = 0; $j< sizeof($this->controllers);$j++){
					if($this->controllers[$j] == $url){
						$this->acessController($url);
						return true;
					}
			}
			return false;
		}
}
