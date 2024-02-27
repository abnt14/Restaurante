<?php
	require "core/searchEngine.php";
	
	$engine = new searchEgine;
	
	if($engine->defineRoute($GET['url']) == false){
		header("Location: /views/pageNotFound.php");
	}
