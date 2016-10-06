<?php 
include_once 'views/propietario/menu.php';
 ?>
 <div class="container">
 	<div class="row">
 		<div class="col-md-6">
 			<div class="panel panel-info">
 				<div class="panel panel-heading">
 					<h2 class="text-center">Información Personal</h2>
 				</div>
 				<div class="panel-body">
 					<h3><b>Nombres</b></h3>
 					<h4 class="text-right"><?php echo $stmt['nombre']; ?></h4><hr>
 					<h3><b>Apellidos</b></h3>
 					<h4 class="text-right"><?php echo $stmt['apellido']; ?></h4><hr>
 					<h3><b>Número de Documento</b></h3>
 					<h4 class="text-right"><?php echo $stmt['documento']; ?></h4><hr>
 					<h3><b>Género</b></h3>
 					<h4 class="text-right"><?php echo $stmt['genero']; ?></h4><hr>
 					<h3><b>Correo</b></h3>
 					<h4 class="text-right"><?php echo $stmt['email']; ?></h4><hr>
 					<h3><b>Dirección</b></h3>
 					<h4 class="text-right"><?php echo $stmt['direccion']; ?></h4><hr>
 					<h3><b>Telefono</b></h3>
 					<h4 class="text-right"><?php echo $stmt['telefono']; ?></h4><hr>
 					<h3><b>Fecha de Creación</b></h3>
 					<h4 class="text-right"><?php echo $stmt['fecha_creacion']; ?></h4><hr>
 					<br>
 					<button class="btn btn-block btn-primary">Actualizar</button>
 				</div>
 			</div>
 		</div>
 		<div class="col-md-6">
 			<div class="panel panel-success">
 				<div class="panel-heading">
 					<h2 class="text-center">Mascotas Registradas</h2>
 				</div>
 				<div class="panel-body">
 					<div class="table-responsive">
 						<table class="table table-striped table-bordered">
 							<tr>
 								<th>Nombre</th>
 								<th>Tipo</th>
 								<th>Raza</th>
 								<th>Genero</th>
 							</tr>
 							<?php foreach ($stmt2 as $key) {
 								echo '
 							<tr>
 								<td>'.$key->nombre.'</td>
 								<td>'.$key->tipo.'</td>
 								<td>'.$key->raza.'</td>
 								<td>'.$key->genero.'</td>
 							</tr>';
 							}
 							
 							 ?>
 						</table>
 					</div>
 					<button class="btn btn-block btn-success"><h4>Registrar Nueva Mascota</h4></button>
 				</div>
 			</div>
 		</div>
 	</div>
 </div>