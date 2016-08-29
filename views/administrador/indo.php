<div class="secondary-section">
	<div class="title">
		<h2>Crear Nuevo</h2>
	</div>
	<div class="row">
		<div class="col-md-3 col-sm-12">
			<a href="" data-toggle="modal" data-target="#cliente">
				<div class="responsive-img img-circle text-center">
					<img src="assets/image/user.png">
					<h4>cliente</h4>
				</div>
			</a>
		</div>
		<div class="col-md-3 col-sm-12">
			<a href=""  data-toggle="modal" data-target="#admin">
				<div class="responsive-img img-circle text-center">
					<img src="assets/image/mostacho.png">
					<h4>administrador</h4>
				</div>
			</a>
		</div>
		<div class="col-md-3 col-sm-12">
			<a href="" data-toggle="modal" data-target="#veterinaria">
				<div class="responsive-img img-circle text-center">
					<img src="assets/image/shop.png">
					<h4>veterinaria</h4>
				</div>
			</a>
		</div>
		<div class="col-md-3 col-sm-12">
			<a href="" data-toggle="modal" data-target="#pro">
				<div class="responsive-img img-circle text-center">
					<img src="assets/image/pro1.png">
					<h4>especialista</h4>
				</div>
			</a>
		</div>
	</div>
</div>
<!-- start modals section -->
<!-- clientes -->
<div id="cliente" class="modal fade" role="dialog">
	<div class="modal-dialog">

	<div class="modal-content">
		<div class="modal-body">
	
			<div class="panel panel-success ">
			<div class="panel-heading"><h1 class="text-center">Clientes</h1></div>
			<div class="panel-body">
				<div class="table-responsive">
				<div class="container">
				<table class="table table-striped">
					<tr>
					<th>#</th>
					<th>Nombre usuario</th>
					<th>Nombre</th>
					<th>Apellido</th>
					<th>Email</th>
					<th>fecha creación</th>
					<th>documento</th>
					<th>Acción</th>
					</tr>
				<?php  
					$cont=0;
					foreach ($stmt3 as $registro) {

						$cont++;

						echo'<tr>
						<td>'.$cont.'</td>
						<td>'.$registro->nombre_usuario.'</td>
						<td>'.$registro->nombre.'</td>
						<td>'.$registro->apellido.'</td>
						<td>'.$registro->email.'</td>
						<td>'.$registro->fecha_creacion.'</td>
						<td>'.$registro->documento_usuario.'</td>
						<td>
							<form method="post" action="?controller=Administrador&action=eliminar1">
								<input type="text" name="usuario" id="" value="'.$registro->documento_usuario.'" class="hidden">
								<button type="submit">borrar</button>
							</form>
							<form method="post" action="?controller=Administrador&action=formulario">
								<input type="text" name="usuario" id="" value="'.$registro->documento_usuario.'" class="hidden">
								<button type="submit">Actualizar</button>
							</form>
							</td>
						</tr>';
					}
				?>		
			</table>
			</div>
			</div>
		<hr>
		<form method="post" action="">
		<div class="text-center"><button class="btn btn-success">Crear Nuevo</button></div>
		</form>
		</div>
		</div>

		</div>
	<div class="modal-footer">
		<button class="btn btn-danger" data-dismiss="modal">Cerrar</button>
	</div>
	</div>	
	</div>
</div>

<!-- admin -->

<div id="admin" class="modal fade" role="dialog">
	<div class="modal-dialog">

	<div class="modal-content">
		<div class="modal-body">
	
			<div class="panel panel-success ">
			<div class="panel-heading"><h1 class="text-center">Iniciar Sesión</h1></div>
			<div class="panel-body">
			<div class="table-responsive">
				<div class="container">
				<table class="table table-striped">
					<tr>
					<th>#</th>
					<th>Nombre usuario</th>
					<th>Nombre</th>
					<th>Apellido</th>
					<th>Email</th>
					<th>fecha creación</th>
					<th>documento</th>
					<th>Acción</th>
					</tr>
				<?php  
					$cont=0;
					foreach ($stmt as $registro) {

						$cont++;

						echo'<tr>
						<td>'.$cont.'</td>
						<td>'.$registro->nombre_usuario.'</td>
						<td>'.$registro->nombre.'</td>
						<td>'.$registro->apellido.'</td>
						<td>'.$registro->email.'</td>
						<td>'.$registro->fecha_creacion.'</td>
						<td>'.$registro->documento_usuario.'</td>
						<td>
							<form method="post" action="?controller=Administrador&action=eliminar1">
								<input type="text" name="usuario" id="" value="'.$registro->documento_usuario.'" class="hidden">
								<button type="submit">borrar</button>
							</form>
							<form method="post" action="?controller=Administrador&action=formulario">
								<input type="text" name="usuario" id="" value="'.$registro->documento_usuario.'" class="hidden">
								<button type="submit">Actualizar</button>
							</form>
							</td>
						</tr>';
					}
				?>		
			</table>
			</div>
			</div>
			<hr>
			</div>
			</div>
	


		</div>
	<div class="modal-footer">
		<button class="btn btn-danger" data-dismiss="modal">Cerrar</button>
	</div>
	</div>	
	</div>
</div>

<!-- veterinaria -->

<div id="veterinaria" class="modal fade" role="dialog">
	<div class="modal-dialog">

	<div class="modal-content">
		<div class="modal-body">
	
			<div class="panel panel-success ">
			<div class="panel-heading"><h1 class="text-center">veterinaria</h1></div>
			<div class="panel-body">
			<form method="post" action="?controller=login&accion=logeo">
				
			<div class="table-responsive">
				<div class="container">
				<table class="table table-striped">
					<tr>
					<th>#</th>
					<th>Nombre usuario</th>
					<th>Nombre</th>
					<th>Apellido</th>
					<th>Email</th>
					<th>fecha creación</th>
					<th>documento</th>
					<th>Acción</th>
					</tr>
				<?php  
					$cont=0;
					foreach ($stmt2 as $registro) {

						$cont++;

						echo'<tr>
						<td>'.$cont.'</td>
						<td>'.$registro->nombre_usuario.'</td>
						<td>'.$registro->nombre.'</td>
						<td>'.$registro->apellido.'</td>
						<td>'.$registro->email.'</td>
						<td>'.$registro->fecha_creacion.'</td>
						<td>'.$registro->documento_usuario.'</td>
						<td>
							<form method="post" action="?controller=Administrador&action=eliminar1">
								<input type="text" name="usuario" id="" value="'.$registro->documento_usuario.'" class="hidden">
								<button type="submit">borrar</button>
							</form>
							<form method="post" action="?controller=Administrador&action=formulario">
								<input type="text" name="usuario" id="" value="'.$registro->documento_usuario.'" class="hidden">
								<button type="submit">Actualizar</button>
							</form>
							</td>
						</tr>';
					}
				?>		
			</table>
			</div>
			</div>
			</form>	
			<hr>
			</div>
			</div>
	


		</div>
	<div class="modal-footer">
		<button class="btn btn-danger" data-dismiss="modal">Cerrar</button>
	</div>
	</div>	
	</div>
</div>

<!-- especialista -->

<div id="pro" class="modal fade" role="dialog">
	<div class="modal-dialog">

	<div class="modal-content">
		<div class="modal-body">
	
			<div class="panel panel-success ">
			<div class="panel-heading"><h1 class="text-center">Iniciar Sesión</h1></div>
			<div class="panel-body">
			<form method="post" action="?controller=login&accion=logeo">
				
				<h1>especialista</h1>
				
				

			</form>	
			<hr>
			</div>
			</div>
	


		</div>
	<div class="modal-footer">
		<button class="btn btn-danger" data-dismiss="modal">Cerrar</button>
	</div>
	</div>	
	</div>
</div>

<!-- ends modal section -->
