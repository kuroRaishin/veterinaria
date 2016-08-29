<?php

require_once'model/usuario.php';
class LoginControlador
{
	private $model;

	public function __construct (){
		$this->model = new Usuario();
	}


	Public function Index()
	{
		require_once'views/header.html';
		require_once'views/login/index.php';
		require_once'views/footer.html';
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
				 header("location:?controller=administrador&accion=index");
				 $_SESSION['nombre'] = $stmt['username'];
				break;
			case 'veterinaria':
					header("location:?controller=veterinaria&accion=index");
					$_SESSION['nombre'] = $stmt['username'];
				break;
			case 'cliente':
					header("location:?controller=cliente&accion=index");
					$_SESSION['nombre'] = $stmt['username'];
				break;
			case 'especialista':
					header("location:?controller=especialista&accion=index");
					$_SESSION['nombre'] = $stmt['username'];
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
		require_once'views/header.html';
		require_once'views/login/nuevo.php';
		require_once'views/footer.html';
	}*/
}