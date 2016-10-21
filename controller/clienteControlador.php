<?php 
/**
* 
*/
session_start();
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
		$propietario = $this->owner;
		$mascota = $this->pet;
		$propietario->setDocumento($_SESSION['nombre']);
		$mascota->setDocumento($_SESSION['nombre']);
		$stmt= $propietario->listarId($propietario);
		$stmt2= $mascota->listarPropietario($mascota);
		require_once 'views/header.php';
		require_once 'views/propietario/index.php';
		require_once 'views/footer.php';
	}

	public function addPet(){
		$mascotas = $this->pet;
		$stmt= $mascotas->listarId($_REQUEST['documento']);
		require_once 'views/header.php';
		require_once 'views/propietario/addPet.php';
		require_once 'views/footer.php';
	}

	public function insertarPet(){
		$mascota=$this->pet;
		if (isset($_REQUEST['id'])) {
			$stmt= $mascota->listarId($_REQUEST['id']);
			if ($stmt) {
				require_once 'views/header.php';
				require_once 'views/propietario/addPet.php';
				require_once 'views/footer.php';
			}
			
		}else
			{
				$fecha_creacion=date("Y-m-d");
				$mascota->setFecha_creacion($fecha_creacion);
				$mascota->setDocumento($_SESSION['nombre']);
				$mascota->setNombre($_REQUEST['nombre']);
				$mascota->setRaza($_REQUEST['raza']);
				$mascota->setGenero($_REQUEST['genero']);		
				$mascota->setTipo($_REQUEST['tipo']);		
				$stmt=$mascota->insertar($mascota);
				echo "<script type='text/javascript'>
						alert('El registro se realizó correctamente');
						window.location='?controller=cliente&accion=index';
						</script>";
			}
	}
	public function actualizarDatos(){
		$propietario = $this->owner;
		$mascota = $this->pet;
		$propietario->setDocumento($_SESSION['nombre']);
		$stmt= $propietario->listarId($propietario);
		$mascota->setDocumento($_SESSION['nombre']);
		$stmt2= $mascota->listarPropietario($mascota);
		require_once 'views/header.php';
		require_once 'views/propietario/update.php';
		require_once 'views/footer.php';	
	}

	public function updateUser(){
		$propietario=$this->owner;
		$propietario->setDocumento($_REQUEST['documento']);
		$propietario->setNombre($_REQUEST['nombre']);
		$propietario->setApellido($_REQUEST['apellido']);
		$propietario->setGenero($_REQUEST['genero']);		
		$propietario->setDireccion($_REQUEST['direccion']);		
		$propietario->setTelefono($_REQUEST['telefono']);		

		$stmt=$propietario->actualizar($propietario);
		
		if ($stmt==true) {
			echo "<script type='text/javascript'>
						alert('El registro se actualizo correctamente');
						window.location='?controller=cliente&accion=index';
						</script>";
		}
		else{
			echo "<script type='text/javascript'>
						alert('El registro no se pudo actualizar');
						window.location='?controller=cliente&accion=actualizarDatos';
						</script>";
		}
	}

	public function newPass(){
		$usuario=$this->user;
		if ($_REQUEST['password']==$_REQUEST['actual']) {
			if ($_REQUEST['nuevo']==$_REQUEST['verify']) {
				$usuario->setDocumento($_SESSION['nombre']);
				$usuario->setPassword($_REQUEST['nuevo']);
				$stmt=$usuario->cambio_password($usuario);
				if ($stmt) {
					echo "<script type='text/javascript'>
						alert('nueva contraseña asignada');
						window.location='?controller=cliente&accion=index';
						</script>";
				}else{
					echo "<script type='text/javascript'>
						alert('Error al intentar cambiar la contraseña');
						window.location='?controller=cliente&accion=index';
						</script>";
				}
				
			}else{
				echo "<script type='text/javascript'>
						alert('La nueva contraseña no coincide');
						window.location='?controller=cliente&accion=actualizarDatos';
						</script>";
			}

		}else{
			echo "<script type='text/javascript'>
						alert('La contraseña actual no coincide');
						window.location='?controller=cliente&accion=actualizarDatos';
						</script>";
		}
	}
}
 ?>