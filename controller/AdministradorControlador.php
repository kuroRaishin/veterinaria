<?php 

require_once 'model/administrador.php';
require_once 'model/dueno.php';
require_once 'model/veterinaria.php';
require_once 'model/mascota.php';
require_once 'model/usuario.php';

class AdministradorControlador{
	
	private $model,$con,$vet;
	

	public function __construct(){
		$this->model=new Administrador();
		$this->due=new Dueno();
		$this->vet=new Veterinaria();
		
	}

	public function index(){
		
		require_once 'views/header.html';
		require_once 'views/administrador/index.php';
		require_once 'views/footer.html';
	}
	public function listaAdm() {
		$administrador = $this->model;
		$stmt= $administrador->listar();
		require_once 'views/header.html';
		require_once 'views/administrador/listaAmd.php';
		require_once 'views/footer.html';
	}
	public function listaDueno() {
		$duenos = $this->due;
		$stmt= $duenos->listar();
		require_once 'views/header.html';
		require_once 'views/administrador/listaOwner.php';
		require_once 'views/footer.html';
	}
	public function listaVet() {
		$veterinarias = $this->vet;
		$stmt= $veterinarias->listar();
		require_once 'views/header.html';
		require_once 'views/administrador/listaVet.php';
		require_once 'views/footer.html';
	}

	public function formulario(){
		$administrador = $this->model;
		$stmt= $administrador->listarId($_REQUEST['usuario']);
		require_once 'views/header.html';
		require_once 'views/administrador/formulario.php';
		require_once 'views/footer.html';
	}
	public function formularioD(){
		$dueno = $this->due;
		$stmt= $dueno->listarId($_REQUEST['documento']);
		require_once 'views/header.html';
		require_once 'views/administrador/form.php';
		require_once 'views/footer.html';
	}

	public function crud(){
		$administrador=$this->model;
		$administrador->setDocumento($_REQUEST['documento']);
		$administrador->setNombre($_REQUEST['nombre']);
		$administrador->setApellido($_REQUEST['apellido']);
		$administrador->setRol($_REQUEST['rol']);
		$administrador->setUsuario($_REQUEST['usuario']);
		$administrador->setPassword($_REQUEST['password']);
		$administrador->setEmail($_REQUEST['email']);
		// $administrador->setDocumento($_REQUEST['documento']);
		$stmt=$administrador->insertar($administrador);
		// $stmt=$administrador->insertarUsuario($administrador);
		var_dump($stmt);
	}

	public function insertarDueño(){
		$dueño=$this->due;
		$rol="cliente";
		if (isset($_REQUEST['documento'])) {
			$dueño->setDocumento($_REQUEST['documento']);
			$stmt= $dueño->listarId($dueño);
			if ($stmt) {
				require_once'views/header.html';
				require_once'views/administrador/form.php';
				require_once'views/footer.html';
			}
			else
			{
				$dueño->setDocumento($_REQUEST['documento']);
				$dueño->setNombre($_REQUEST['nombre']);
				$dueño->setApellido($_REQUEST['apellido']);
				$dueño->setRol($rol);
				$dueño->setGenero($_REQUEST['genero']);		
				$dueño->setGenero($_REQUEST['direccion']);		
				$dueño->setGenero($_REQUEST['telefono']);		
				$dueño->setUsuario($_REQUEST['usuario']);
				$dueño->setPassword($_REQUEST['password']);
				$dueño->setEmail($_REQUEST['email']);
				// $dueño->setDocumento($_REQUEST['documento']);

				$stmt=$dueño->insertar($dueño);
				header("location:?controller=administrador");
			}
		}
	}

	public function eliminar(){
		$administrador=$this->model;
		$administrador->setDocumento($_REQUEST['usuario']);
		$stmt=$administrador->eliminar($administrador);

		if ($stmt==true) {
			header('location:?controller=administrador');
		}
	}

	public function editar(){
		$administrador=$this->model;
		$administrador->setDocumento($_REQUEST['documento']);
		$administrador->setNombre($_REQUEST['nombre']);
		$administrador->setApellido($_REQUEST['apellido']);
		// $administrador->setRol($_REQUEST['rol']);
		/*$administrador->setUsuario($_REQUEST['usuario']);
		$administrador->setPassword($_REQUEST['password']);*/
		$administrador->setEmail($_REQUEST['email']);

		$stmt=$administrador->actualizar($administrador);
		
		var_dump($stmt);
	}

	public function editarD(){
		$dueño=$this->due;
		$rol="cliente";
		$dueño->setDocumento($_REQUEST['documento']);
		$dueño->setNombre($_REQUEST['nombre']);
		$dueño->setApellido($_REQUEST['apellido']);
		$dueño->setRol($rol);
		$dueño->setGenero($_REQUEST['genero']);		
		$dueño->setGenero($_REQUEST['direccion']);		
		$dueño->setGenero($_REQUEST['telefono']);		
		$dueño->setUsuario($_REQUEST['usuario']);
		$dueño->setPassword($_REQUEST['password']);
		$dueño->setEmail($_REQUEST['email']);

		$stmt=$dueño->actualizar($dueño);
		
		var_dump($stmt);
	}
	
}
?>