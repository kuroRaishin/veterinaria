<?php

require_once'model/usuario.php';
require_once'model/veterinaria.php';
class LoginControlador
{
	private $model,$vet;

	public function __construct (){
		$this->model = new Usuario();
		$this->vet = new Veterinaria();
	}


	Public function Index()
	{
		$veterinarias = $this->vet;
		$stmt= $veterinarias->listaServicios();
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
	
	public function listaServicios() {
		
		require_once 'views/header.php';
		require_once 'views/administrador/listaVet.php';
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
				$_SESSION['estado'] = '1';
				$_SESSION['nombre'] = $stmt["documento"];
				header("location:?controller=administrador&accion=index"); 
				break;
			case 'veterinaria':
				$_SESSION['nombre'] = $stmt["documento"];
				header("location:?controller=veterinaria&accion=index");
				break;
			case 'cliente':
				$_SESSION['nombre'] = $stmt["documento"];
				header("location:?controller=cliente&accion=index");
					
				break;
			case 'especialista':
				$_SESSION['nombre'] = $stmt["documento"];
				header("location:?controller=especialista&accion=index");	
				break;
			default:
				 header("location:index.php");
				break;
		}
	}

	public function salir()
	{
		session_start();
		session_destroy();
		header("location:index.php");
	}

	/*Public function nuevo()
	{
		require_once'views/header.php';
		require_once'views/login/nuevo.php';
		require_once'views/footer.php';
	}*/
}