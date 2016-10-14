<?php 
/**
* 
*/
session_start();
require_once'model/usuario.php';
require_once'model/mascota.php';
require_once 'model/propietario.php';
require_once'model/noticia.php';
require_once'model/veterinaria.php';
class VeterinariaControlador
{
	private $model, $vet, $pet, $new, $owner;
	function __construct()
	{
		$this->user=new usuario();
		$this->vet=new Veterinaria();
		$this->pet=new Mascota();
		$this->new=new Noticia();
		$this->owner=new Propietario();
	}

	public function index(){
		require_once 'views/header.php';
		require_once 'views/veterinaria/index.php';
		require_once 'views/footer.php';
	}
	public function allNews(){
		$noticia = $this->new;
		$noticia->setCreador($_SESSION['nombre']);
		$stmt= $noticia->listaRel();
		require_once 'views/header.php';
		require_once 'views/veterinaria/allNews.php';
		require_once 'views/footer.php';
	}
	public function news(){
		require_once 'views/header.php';
		require_once 'views/veterinaria/noticia.php';
		require_once 'views/footer.php';
	}
	public function updateForm(){
		require_once 'views/header.php';
		require_once 'views/veterinaria/id.php';
		require_once 'views/footer.php';
	}
	public function allPets(){
		$mascota = $this->pet;
		$mascota->setId_veterinaria($_SESSION['nombre']);
		$stmt= $mascota->listarVet($mascota);
		require_once 'views/header.php';
		require_once 'views/veterinaria/allPets.php';
		require_once 'views/footer.php';
	}
	public function pets(){
		$mascotas = $this->pet;
		$stmt= $mascotas->listarId($_REQUEST['documento']);
		require_once 'views/header.php';
		require_once 'views/veterinaria/newPet.php';
		require_once 'views/footer.php';
	}
	public function formCliente(){
		$propietario = $this->owner;
		$stmt= $propietario->listarId($_REQUEST['documento']);
		require_once 'views/header.php';
		require_once 'views/veterinaria/cliente.php';
		require_once 'views/footer.php';
	}
	public function search(){
		$propietario = $this->owner;
		$propietario->setDocumento($_REQUEST['documento']);
		$stmt= $propietario->listarId($_REQUEST['documento']);
		if ($stmt==false) {
			echo "<script type='text/javascript'>
						alert('Registro no encontrado');
						window.location='?controller=veterinaria&accion=updateForm';
						</script>";
		}else{
			echo "<script type='text/javascript'>
						alert('Registro Encontrado');
						</script>";
			require_once 'views/header.php';
			require_once 'views/veterinaria/cliente.php';
			require_once 'views/footer.php';
			}
		}
	
	public function clienteNew(){
		$propietario=$this->owner;
		$rol="cliente";
		if (isset($_REQUEST['documento'])) {
			$propietario->setDocumento($_REQUEST['documento']);
			$stmt= $propietario->listarId($propietario);
			if ($stmt) {
				require_once 'views/header.php';
				require_once 'views/veterinaria/cliente.php';
				require_once 'views/footer.php';
			}
			else
			{
				$fecha_creacion=date("Y-m-d");
				$propietario->setFecha_creacion($fecha_creacion);
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
						window.location='?controller=veterinaria&accion=index';
						</script>";
			}
		}
	}
	public function insertarPet(){
		$mascota=$this->pet;
		if (isset($_REQUEST['id'])) {
			$stmt= $mascota->listarId($_REQUEST['id']);
			if ($stmt) {
				require_once 'views/header.php';
				require_once 'views/veterinaria/newPet.php';
				require_once 'views/footer.php';
			}
			
		}else
			{
				$fecha_creacion=date("Y-m-d");
				$mascota->setFecha_creacion($fecha_creacion);
				$mascota->setDocumento($_REQUEST['documento']);
				$mascota->setNombre($_REQUEST['nombre']);
				$mascota->setRaza($_REQUEST['raza']);
				$mascota->setGenero($_REQUEST['genero']);		
				$mascota->setTipo($_REQUEST['tipo']);		
				$mascota->setId_veterinaria($_SESSION['nombre']);		
				$stmt=$mascota->insertar($mascota);
				echo "<script type='text/javascript'>
						alert('El registro se realizó correctamente');
						window.location='?controller=veterinaria&accion=allPets';
						</script>";
			}
	}
	public function insertarNoticia(){
		$noticia=$this->new;
		$fecha_creacion=date("Y-m-d");
		$imagen=addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
		$noticia->setTitulo($_REQUEST['titulo']);
		$noticia->setDescripcion($_REQUEST['descripcion']);
		$noticia->setImagen($imagen);
		$noticia->setCreador($_SESSION['nombre']);
		$noticia->setFecha_creacion($fecha_creacion);
		$stmt=$noticia->insertar($noticia);
		if ($stmt) {
			echo "<script type='text/javascript'>
					alert('Solicitud enviada correctamente');
					window.location='?controller=veterinaria&accion=allNews';
					</script>";
		}
	}

	public function editarCliente(){
		$propietario=$this->owner;
		$propietario->setDocumento($_REQUEST['documento']);
		$propietario->setNombre($_REQUEST['nombre']);
		$propietario->setApellido($_REQUEST['apellido']);
		$propietario->setGenero($_REQUEST['genero']);		
		$propietario->setDireccion($_REQUEST['direccion']);		
		$propietario->setTelefono($_REQUEST['telefono']);		
		$propietario->setPassword($_REQUEST['password']);
		$propietario->setEmail($_REQUEST['email']);

		$stmt=$propietario->actualizar($propietario);
		
		if ($stmt==true) {
			echo "<script type='text/javascript'>
						alert('El registro se actualizo correctamente');
						window.location='?controller=veterinaria&accion=index';
						</script>";
		}
		else{
			echo "<script type='text/javascript'>
						alert('El registro no se pudo actualizar');
						window.location='?controller=veterinaria&accion=updateForm';
						</script>";
		}
	}

	public function editarPet(){
		$mascota=$this->pet;
		$mascota->setId($_REQUEST['id']);
		$mascota->setDocumento($_REQUEST['documento']);
		$mascota->setNombre($_REQUEST['nombre']);
		$mascota->setGenero($_REQUEST['genero']);		
		$mascota->setRaza($_REQUEST['raza']);
		$mascota->setTipo($_REQUEST['tipo']);

		$stmt=$mascota->actualizar($mascota);
		
		if ($stmt==true) {
			echo "<script type='text/javascript'>
						alert('El registro se actualizo correctamente');
						window.location='?controller=veterinaria&accion=allPets';
						</script>";
		}
		else{
			echo "<script type='text/javascript'>
						alert('El registro no se pudo actualizar');
						window.location='?controller=veterinaria&accion=updateForm';
						</script>";
		}
	}

	public function eliminarPet(){
		$mascota=$this->pet;
		$stmt=$mascota->eliminar($_REQUEST['id']);

		if ($stmt==true) {
			echo "<script type='text/javascript'>
						alert('El registro se bloqueó correctamente');
						window.location='?controller=veterinaria&accion=allPets';
						</script>";
		}
		else{
			echo "<script type='text/javascript'>
						alert('El registro no se pudo bloquear');
						window.location='?controller=veterinaria&accion=allPets';
						</script>";
		}
	}
}
 ?>