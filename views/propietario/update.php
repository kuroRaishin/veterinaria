<?php 
include_once 'views/propietario/menu.php';
if ($_SESSION['estado']!= 3) {
  header("location:index.php");
}
 ?>

 <div class="row">
	 <div class="container">
		<div class="col-md-6 ">
		<div class="row">
		<div class="panel panel-info">
			<div class="panel-heading">
				<h2 class="text-center">Datos personales</h2>
			</div>
			<div class="panel-body">
				<form action="?controller=cliente&accion=updateUser" method="post" id="form" >
					<h3>Datos Personales Dueño</h3>
					<div class="from-group">
					<label for="nom">Nombre</label>
						<input type="text" id="nom"  name="nombre" class="form-control" required value=<?php echo $stmt['nombre'];?> >
					</div>
					<div class="from-group">
					<label for="ap">Apellido</label>
						<input type="text" id="ap"  name="apellido" class="form-control" required value=<?php echo $stmt['apellido'];?> >
					</div>
					<div class="from-group">
					<label for="doc">Documento</label>
						<input type="number" id="doc"  name="documento" readonly="true" class="form-control" required value=<?php echo $stmt['documento'];?> >
					</div>
					<div class="from-group">
					<label for="genero">Genero</label>
						<select name="genero" id="genero" required class="form-control">
							<option value=null></option>
							<option value="masculino">Masculino</option>
							<option value="femenino">Femenino</option>
						</select>
					</div>
					<div class="from-group">
					<label for="doc">direccion</label>
						<input type="text" id="doc"  name="direccion" class="form-control" required value=<?php echo $stmt['direccion'];?> >
					</div>
					<div class="from-group">
					<label for="doc">telefono</label>
						<input type="number" id="doc"  name="telefono" class="form-control" required value=<?php echo $stmt['telefono'];?> >
					</div>
					
					<hr>
					<br>
					<input type="submit" value="Enviar" class="btn btn-info btn-block" >
				</form>
			</div>
			</div>
				<div class="col-md-12">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h2 class="text-center">Citas pendientes</h2>
						</div>
						<div class="panel-body">
						<center><b>No hay citas para mostrar</b></center>	
						</div>
					</div>
				</div>
		</div>
		</div>
		<div class="col-md-6">
			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-warning">
						<div class="panel-heading">
							<h2 class="text-center">Informacion de la cuenta</h2>
						</div>
						<div class="panel-body">
							<div class="from-group">
								<label>Nombre</label>
								<p><?php echo $stmt['nombre'];?> <?php echo $stmt['apellido']; ?></p>
							</div>
							<div class="from-group">
								<label>Cuenta de acceso</label>
								<p><?php echo $stmt['email']; ?></p>
							</div>
							<div class="from-group">
								<label>Contraseña</label>
								<p><?php echo $stmt['password']; ?></p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-12">
					<div class="panel panel-danger">
						<div class="panel-heading">
							<h2 class="text-center">cambio de Contraseña</h2>
						</div>
						<div class="panel-body">
						<form method="post" action="?controller=cliente&accion=newPass" id="pass">
							<input type="text" name="password" class="hidden" value=<?php echo $stmt['password'];?>>
							<div class="from-group">
								<label>Contraseña actual</label>
								<input type="password" name="actual" class="form-control">
							</div>
							<div class="from-group">
								<label>Nueva Contraseña</label>
								<input type="password" name="nuevo" class="form-control">
							</div>
							<div class="from-group">
								<label>Repita Contraseña</label>
								<input type="password" name="verify" class="form-control">
							</div><hr>
							<button type="submit" class="btn btn-danger btn-block">Cambiar contraseña</button>
						</form>	
						</div>
					</div>
				</div>
				<div class="col-md-12">
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
		 					<a href="?controller=cliente&accion=addPet" class="btn btn-block btn-success">
		 					<h4>Registrar Nueva Mascota</h4> </a>
		 				</div>
		 			</div>			 		
				</div>
			</div>
		</div>
	</div>	
</div> 