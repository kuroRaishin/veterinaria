<?php

/**
* 
*/
class AprendizControlador
{
	
	public function __construct()
	{

	}

	public function Index()
	{
		require_once'views/header.html';
		require_once'views/aprendiz/index.php';
		require_once'views/footer.html';
	}
}