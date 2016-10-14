<?php 
include_once 'views/veterinaria/menu.php';
error_reporting();
if ($_SESSION['estado']!= 2) {
  header("location:index.php");
 ?>

 <div class="row">
 	<div class="col-md-3">
  		<?php include_once'views/veterinaria/menuVet.php'; ?>		
 	</div>
 	<div class="col-md-4 col-md-offset-2">
 		<div class="panel panel-primary">
 			<div class="panel-heading">
 				<h2 class="text-center">Buscar Usuario</h2>
 			</div>
 			<div class="panel-body">
 				<form method="post" action="?controller=veterinaria&accion=search">
 					<div class="form-group">
 						<label>Ingrese el número de documento del usuario</label>
 						<input type="text" name="documento" class="form-control" required>
 					</div>
 					<button type="submit" class="btn btn-primary btn-block">Buscar <span class="glyphicon glyphicon-search"></span></button>
 				</form>
 			</div>
 		</div>
 	</div>
 </div>