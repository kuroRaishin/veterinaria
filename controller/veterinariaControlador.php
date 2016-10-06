<?php 
/**
* 
*/
require_once'model/usuario.php';
require_once'model/veterinaria.php';
class VeterinariaControlador
{
	private $model, $vet;
	function __construct()
	{
		$this->user=new usuario();
		$this->vet=new Veterinaria();
	}

	public function index(){
		require_once 'views/header.php';
		require_once 'views/veterinaria/index.php';
		require_once 'views/footer.php';
	}
}
 ?>