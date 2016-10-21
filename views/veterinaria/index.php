<?php 
require_once 'views/login/mainmenu.php';
if ($_SESSION['estado']!= 2) {
  header("location:index.php");
}
 ?>
<center><h1>Panel de Control</h1><h2><?php echo $stmt['nombre_empresa']; ?></h2></center>
 <div class="row">
 	<div class="col-md-3">
 		<?php include_once'views/veterinaria/menuVet.php'; ?>
 	</div>
 	<div class="col-md-6">
 		<h3>descripción</h3>
 		<p class="text-justify"><?php echo $stmt['descripcion']; ?></p>
 	</div>
 	<div class="col-md-3">
 		<div class="panel panel-success">
 			<div class="panel-heading">
 				<h2>Datos Generales</h2>
 			</div>
 			<div class="panel-body">
 				<b>Propietario: </b><p><?php echo $stmt['nombre'];?> <?php  echo$stmt['apellido'];  ?></p>
 				<b>Correo: </b><p><?php echo $stmt['email']; ?></p>
 				<b>Dirección: </b><p><?php echo $stmt['direccion']; ?></p>
 				<b>Telefono: </b><p><?php echo $stmt['telefono']; ?></p>
 				<b>Tags: </b><p><?php echo $stmt['tags']; ?></p>
 				<b>Reputacion: </b><h6><input id="input-21e" type="number" data-size="xs" readonly="" class="rating" value=<?php echo $stmt['rating']; ?>>por <?php echo $stmt['votantes']; ?> personas</h6>
 			</div>
 		</div>
 	</div>
 </div>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>