<?php

require_once'model/usuario.php';
require_once'model/veterinaria.php';
require_once'model/propietario.php';
require_once'model/noticia.php';

class LoginControlador
{
	private $model, $vet, $new;

	public function __construct (){
		$this->model = new Usuario();
		$this->vet = new Veterinaria();
		$this->owner=new Propietario();
		$this->new=new Noticia();
	}


	Public function Index()
	{
		$noticia = $this->new;
		$stmt= $noticia->listar();
		require_once'views/header.php';
		require_once'views/login/index.php';
		require_once'views/footer.php';
	}

	Public function busquedas()
	{
		$veterinarias = $this->vet;
		$stmt= $veterinarias->listar();
		require_once'views/header.php';
		require_once'views/index.php';
		require_once'views/footer.php';
	}
	
	public function opcion() {
		
		require_once 'views/header.php';
		require_once 'views/login/opcion.php';
		require_once 'views/footer.php';
	}

	public function new_user() {
		
		require_once 'views/header.php';
		require_once 'views/login/nuevo.php';
		require_once 'views/footer.php';
	}

	public function new_vet() {
		
		require_once 'views/header.php';
		require_once 'views/login/newvet.php';
		require_once 'views/footer.php';
	}

	public function vet_page() {
		$veterinarias=$this->vet;
		$noticia = $this->new;
		$veterinarias->setDocumento($_REQUEST['documento']);
		$stmt=$veterinarias->listarId($veterinarias);
		$noticia->setCreador($_REQUEST['documento']);
		$stmt2= $noticia->listaRel($noticia);
		require_once 'views/header.php';
		require_once 'views/login/vetPage.php';
		require_once 'views/footer.php';
	}

	public function logeo()
	{
		$usuarios = $this->model;

		$usuarios->setEmail($_REQUEST['email']);
		$usuarios->setPassword($_REQUEST['password']);
		$stmt= $usuarios->logeo($usuarios);
		session_start();
		switch ($stmt['rol']) {
			case 'administrador':
				$_SESSION['estado'] = 1;
				$_SESSION['nombre'] = $stmt["documento"];
				header("location:?controller=administrador&accion=index"); 
				break;
			case 'veterinaria':
				$_SESSION['estado'] = 2;
				$_SESSION['nombre'] = $stmt["documento"];
				header("location:?controller=veterinaria&accion=index");
				break;
			case 'cliente':
				$_SESSION['estado'] = 3;
				$_SESSION['nombre'] = $stmt["documento"];
				header("location:?controller=cliente&accion=index");
					
				break;
			case 'especialista':
				$_SESSION['estado'] = '4';
				$_SESSION['nombre'] = $stmt["documento"];
				header("location:?controller=especialista&accion=index");	
				break;
			default:
				var_dump($stmt);
				 //header("location:index.php");
				break;
		}
	}

	public function salir()
	{
		session_start();
		session_destroy();
		header("location:index.php");
	}

	public function nuevo(){
		$propietario=$this->owner;
		$rol="cliente";
		$fecha=date("Y-m-d");
		$propietario->setDocumento($_REQUEST['documento']);
		$propietario->setNombre($_REQUEST['nombre']);
		$propietario->setApellido($_REQUEST['apellido']);
		$propietario->setRol($rol);
		$propietario->setGenero($_REQUEST['genero']);		
		$propietario->setDireccion($_REQUEST['direccion']);		
		$propietario->setTelefono($_REQUEST['telefono']);		
		$propietario->setPassword($_REQUEST['password']);
		$propietario->setEmail($_REQUEST['email']);
		$propietario->setFecha_creacion($fecha);
		$stmt=$propietario->insertar($propietario);
		if ($stmt==true) {
			echo "<script type='text/javascript'>
						alert('El registro se realizó correctamente');
						window.location='?controller=login&accion=index';
						</script>";
		}else{
			echo "<script type='text/javascript'>
						alert('Error al registrar');
						window.location='?controller=login&accion=nuevo';
						</script>";
		}
	}

	public function solicitud(){
		$veterinarias = $this->vet;
		$rol="veterinaria";
		$fecha_creacion=date("Y-m-d");
		$direccion=$_REQUEST['1']." ".$_REQUEST['2']." ".$_REQUEST['3']." ".$_REQUEST['4'].$_REQUEST['5']." ".$_REQUEST['6']." ".$_REQUEST['7']." Bogotá - Colombia";
		$servicios=$_REQUEST['serv1'].$_REQUEST['serv2'].$_REQUEST['serv3'].$_REQUEST['serv4'].$_REQUEST['serv5'].$_REQUEST['serv6'].$_REQUEST['serv7'].$_REQUEST['serv8'].$_REQUEST['serv9'].$_REQUEST['serv10'].$_REQUEST['serv11'].$_REQUEST['serv12'].$_REQUEST['serv13'].$_REQUEST['serv14'].$_REQUEST['serv15'].$_REQUEST['serv16'];		
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
		if ($stmt==true) {
			echo "<script type='text/javascript'>
						alert('El registro se realizó correctamente');
						window.location='?controller=login&accion=index';
						</script>";
		}else{
			echo "<script type='text/javascript'>
						alert('Error al registrar');
						window.location='?controller=login&accion=nuevo';
						</script>";
		}
		
	}
}