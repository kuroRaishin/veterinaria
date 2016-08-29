<?php 
session_start();

if ($_SESSION['nombre']=="" || $_SESSION==null) {
	header("location:index.php");
}
require_once 'model/administrador.php';
require_once 'model/dueno.php';
require_once 'model/veterinaria.php';
require_once 'model/mascota.php';
include_once 'views/menu.html';
 ?>
 <div class="container">
	 <ul class="nav navbar-right">
		<li><button class="btn btn-info"><span class="glyphicon glyphicon-log-out"></span> <a href="?controller=login&accion=salir">SALIR</a></button></li>
	</ul>
 </div>


<div class="title">
	<h1>PAGINA DE ADMINISTRADOR <?php echo$_SESSION['nombre']; ?> </h1>
</div>


<div class="row">
	<div class="col-md-2 col-sm-12">
			<?php include_once 'adminMenu.php'; ?>
	</div>

	<div class="col-md-9">
		<div class="secondary-section">
			<article class="text-justify">Bienvenido de vuelta administrador <?php echo$_SESSION['nombre']; ?>, recuerde que esta seccion puede mdificar y crear información sobre cualquier tipo de usuario alojado en el sistema de información.  <br>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </article>
		</div>
	</div>
</div>

