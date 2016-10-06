<?php 
error_reporting();
require_once 'model/administrador.php';
require_once 'model/propietario.php';
require_once 'model/veterinaria.php';
require_once 'model/mascota.php';
require_once 'model/usuario.php';

class AdministradorControlador{
	
	private $model,$owner,$vet,$pet,$user;
	

	public function __construct(){
		$this->model=new Administrador();
		$this->owner=new Propietario();
		$this->vet=new Veterinaria();
		$this->user=new Usuario();
		$this->pet=new Mascota();
		
	}

	public function index(){
		
		require_once 'views/header.php';
		require_once 'views/administrador/index.php';
		require_once 'views/footer.php';
	}
	public function listaAdmin() {
		$administrador = $this->model;
		$stmt= $administrador->listar();
		require_once 'views/header.php';
		require_once 'views/administrador/listaAdmin.php';
		require_once 'views/footer.php';
	}
	public function listaPropietario() {
		$propietario = $this->owner;
		$stmt= $propietario->listar();
		require_once 'views/header.php';
		require_once 'views/administrador/listaOwner.php';
		require_once 'views/footer.php';
	}
	public function listaVet() {
		$veterinarias = $this->vet;
		$stmt= $veterinarias->listar();
		require_once 'views/header.php';
		require_once 'views/administrador/listaVet.php';
		require_once 'views/footer.php';
	}
	public function listaPet() {
		$mascota = $this->pet;
		$stmt= $mascota->listar();
		require_once 'views/header.php';
		require_once 'views/administrador/listaVet.php';
		require_once 'views/footer.php';
	}
	public function mapa(){
		
		require_once 'views/header.php';
		require_once 'views/administrador/mapa.php';
		require_once 'views/footer.php';
	}
	public function formAdmin(){
		$administrador = $this->model;
		$stmt= $administrador->listarId($_REQUEST['usuario']);
		require_once 'views/header.php';
		require_once 'views/administrador/formAdmin.php';
		require_once 'views/footer.php';
	}
	public function formularioPropietario(){
		$propietario = $this->owner;
		$stmt= $propietario->listarId($_REQUEST['documento']);
		require_once 'views/header.php';
		require_once 'views/administrador/formOwner.php';
		require_once 'views/footer.php';
	}
	public function formularioVet(){
		$propietario = $this->owner;
		$stmt= $propietario->listarId($_REQUEST['documento']);
		require_once 'views/header.php';
		require_once 'views/administrador/formVet.php';
		require_once 'views/footer.php';
	}

	public function insertarAdmin(){
		$administrador=$this->model;
		$rol="administrador";	
		if (isset($_REQUEST['documento'])) {
			$administrador->setDocumento($_REQUEST['documento']);
			$stmt= $administrador->listarId($administrador);
			if ($stmt) {
				require_once'views/header.php';
				require_once'views/administrador/formAdmin.php';
				require_once'views/footer.php';
			}
			else
			{
				$administrador->setDocumento($_REQUEST['documento']);
				$administrador->setNombre($_REQUEST['nombre']);
				$administrador->setApellido($_REQUEST['apellido']);
				$administrador->setRol($rol);
				$administrador->setDireccion($_REQUEST['direccion']);		
				$administrador->setTelefono($_REQUEST['telefono']);		
				$administrador->setPassword($_REQUEST['password']);
				$administrador->setEmail($_REQUEST['email']);
				$stmt=$administrador->insertar($administrador);
				echo "<script type='text/javascript'>
						alert('El registro se realizó correctamente');
						window.location='?controller=administrador&accion=listaAdmin';
						</script>";
			}
		}
	}

	public function insertarPropietario(){
		$propietario=$this->owner;
		$rol="cliente";
		if (isset($_REQUEST['documento'])) {
			$propietario->setDocumento($_REQUEST['documento']);
			$stmt= $propietario->listarId($propietario);
			if ($stmt) {
				require_once'views/header.php';
				require_once'views/administrador/formOwner.php';
				require_once'views/footer.php';
			}
			else
			{
				$propietario->setDocumento($_REQUEST['documento']);
				$propietario->setNombre($_REQUEST['nombre']);
				$propietario->setApellido($_REQUEST['apellido']);
				$propietario->setRol($rol);
				$propietario->setGenero($_REQUEST['genero']);		
				$propietario->setDireccion($_REQUEST['direccion']);		
				$propietario->setTelefono($_REQUEST['telefono']);		
				$propietario->setPassword($_REQUEST['password']);
				$propietario->setEmail($_REQUEST['email']);
				$stmt=$propietario->insertar($propietario);
				echo "<script type='text/javascript'>
						alert('El registro se realizó correctamente');
						window.location='?controller=administrador&accion=listaPropietario';
						</script>";
/*				header("location:?controller=administrador&action=listaPropietario");
*/			}
		}
	}

	public function insertarVet() {
		$veterinarias = $this->vet;
		$rol="veterinaria";
		if (isset($_REQUEST['documento'])) {
			$veterinarias->setDocumento($_REQUEST['documento']);
			$stmt=$veterinarias->listarId($veterinarias);
			if ($stmt) {
				require_once 'views/header.php';
				require_once 'views/administrador/formVet.php';
				require_once 'views/footer.php';
			}else
			{
				$fecha_creacion=date("Y-m-d");
				$direccion=$_REQUEST['1']." ".$_REQUEST['2']." ".$_REQUEST['3']." ".$_REQUEST['4'].$_REQUEST['5']." ".$_REQUEST['6']." ".$_REQUEST['7']." Bogotá - Colombia";
				$servicios=$_REQUEST['serv1'].$_REQUEST['serv2'].$_REQUEST['serv3'].$_REQUEST['serv4'].$_REQUEST['serv5'].$_REQUEST['serv6'].$_REQUEST['serv7'].$_REQUEST['serv8'].$_REQUEST['serv9'].$_REQUEST['serv10'].$_REQUEST['serv11'].$_REQUEST['serv12'].$_REQUEST['serv13'].$_REQUEST['serv14'];		
				$return = $veterinarias->getCoordenadas($direccion);
				$latVet = $return[0];
				$lonVet = $return[1];
				$imagen=addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
				$veterinarias->setNombre_empresa($_REQUEST['empresa']);
				$veterinarias->setDocumento($_REQUEST['documento']);
				$veterinarias->setNombre($_REQUEST['nombre']);
				$veterinarias->setApellido($_REQUEST['apellido']);
				$veterinarias->setEmail($_REQUEST['email']);
				$veterinarias->setDireccion($direccion);
				$veterinarias->setLatVet($latVet);
				$veterinarias->setLonVet($lonVet);
				$veterinarias->setFecha_creacion($fecha_creacion);
				$veterinarias->setTelefono($_REQUEST['telefono']);
				$veterinarias->setId_servicios($servicios);
				$veterinarias->setPassword($_REQUEST['password']);
				$veterinarias->setDescripcion($_REQUEST['descripcion']);
				$veterinarias->setImagen($imagen);
				$veterinarias->setRol($rol);
				$stmt= $veterinarias->insertar($veterinarias);
				echo "<script type='text/javascript'>
						alert('El registro se realizó correctamente');
						window.location='?controller=administrador&accion=listaVet';
						</script>";
			}
		}
		
		
	}

	public function eliminarAdmin(){
		$administrador=$this->model;
		$administrador->setDocumento($_REQUEST['documento']);
		$stmt=$administrador->eliminar($administrador);

		if ($stmt==true) {
			echo "<script type='text/javascript'>
						alert('El registro se bloqueó correctamente');
						window.location='?controller=administrador&accion=listaAdmin';
						</script>";
		}
		else{
			echo "<script type='text/javascript'>
						alert('El registro no se pudo bloquear');
						window.location='?controller=administrador&accion=listaAdmin';
						</script>";
		}
	}

	public function eliminarPropietario(){
		$propietario=$this->owner;
		$propietario->setDocumento($_REQUEST['documento']);
		$stmt=$propietario->eliminar($propietario);

		if ($stmt==true) {
			echo "<script type='text/javascript'>
						alert('El registro se bloqueó correctamente');
						window.location='?controller=administrador&accion=listaPropietario';
						</script>";
			header('location:?controller=administrador&action=listaPropietario');
		}
		else{
			echo "<script type='text/javascript'>
						alert('El registro no se pudo bloquear');
						window.location='?controller=administrador&accion=listaPropietario';
						</script>";
		}
	}

	public function editarAdmin(){
		$administrador=$this->model;
		$administrador->setDocumento($_REQUEST['documento']);
		$administrador->setNombre($_REQUEST['nombre']);
		$administrador->setApellido($_REQUEST['apellido']);
		$administrador->setRol($_REQUEST['rol']);
		$administrador->setTelefono($_REQUEST['telefono']);		
		$administrador->setPassword($_REQUEST['password']);
		$administrador->setPassword($_REQUEST['password']);
		$administrador->setEmail($_REQUEST['email']);

		$stmt=$administrador->actualizar($administrador);
		
		if ($stmt==true) {
			echo "<script type='text/javascript'>
						alert('El registro se actualizo correctamente');
						window.location='?controller=administrador&accion=listaAdmin';
						</script>";
		}
		else{
			echo "<script type='text/javascript'>
						alert('El registro no se pudo actualizar');
						window.location='?controller=administrador&accion=listaAdmin';
						</script>";
		}
		
	}

	public function editarPropietario(){
		$propietario=$this->owner;
		$rol="cliente";
		$propietario->setDocumento($_REQUEST['documento']);
		$propietario->setNombre($_REQUEST['nombre']);
		$propietario->setApellido($_REQUEST['apellido']);
		$propietario->setRol($rol);
		$propietario->setGenero($_REQUEST['genero']);		
		$propietario->setDireccion($_REQUEST['direccion']);		
		$propietario->setTelefono($_REQUEST['telefono']);		
		$propietario->setPassword($_REQUEST['password']);
		$propietario->setEmail($_REQUEST['email']);

		$stmt=$propietario->actualizar($propietario);
		
		if ($stmt==true) {
			echo "<script type='text/javascript'>
						alert('El registro se actualizo correctamente');
						window.location='?controller=administrador&accion=listaPropietario';
						</script>";
/*			header('location:?controller=administrador&action=listaPropietario');
*/		}
		else{
			echo "<script type='text/javascript'>
						alert('El registro no se pudo actualizar');
						window.location='?controller=administrador&accion=listaPropietario';
						</script>";
		}
	}
	
}
?>