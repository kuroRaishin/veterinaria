<?php 
/**
* 
*/
require_once 'model/propietario.php';
require_once 'model/usuario.php';
require_once 'model/mascota.php';
class ClienteControlador
{
	private $user,$owner,$pet;
	function __construct()
	{
		$this->user=new Usuario();
		$this->owner=new Propietario();
		$this->pet=new Mascota();
	}

	public function index(){
		session_start();
		$propietario = $this->owner;
		$mascota = $this->pet;
		$propietario->setDocumento($_SESSION['nombre']);
		$mascota->setDocumento($_SESSION['nombre']);
		$stmt= $propietario->listarId($propietario);
		$stmt2= $mascota->listarId($mascota);
		require_once 'views/header.php';
		require_once 'views/propietario/index.php';
		require_once 'views/footer.php';
	}
}
 ?>