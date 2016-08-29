<?php include_once 'views/menu.html'; error_reporting('0'); ?>

<div class="row">
	<div class="col-md-2">
	    <?php include_once 'views/administrador/adminMenu.php'; ?>
	</div>
<div class="col-md-10">
	<div class="text-justified">	
		<div class="table-responsive">
			
			<table class="table table-striped table-hover">
				<tr class="active">
					<th><center>#</center> </th>
					<th><center>Username</center> </th>
					<th><center>Nombre</center> </th>
					<th><center>Apellido</center> </th>
					<th><center>email</center> </th>
					<th><center>documento</center> </th>
					<th><center>Fecha creación</center> </th>
					<th><center>rol</center> </th>
					<th><center>Acción </center></th>
				</tr>
				<tr class="active">
		<?php foreach ($stmt as $key) {
				$i++;
				echo 
				
				'<tr>
				<td>'.$i.'</td>
				<td>'.$key->username.'</td>
				<td>'.$key->nombre.'</td>
				<td>'.$key->apellido.'</td>
				<td>'.$key->email.'</td>
				<td>'.$key->documento_usuario.'</td>
				<td>'.$key->fecha_creacion.'</td>
				<td>'.$key->rol.'</td>
				<td>
				<form method="post" action="?controller=administrador&accion=Eliminar">
				<input type="hidden" name="documento" value='.$key->documento_usuario.'>
				<button class="btn btn-info">Eliminar</button>
				</form>
				
				</form><form method="post" action="?controller=administrador&accion=insertar">
				<input type="hidden" name="documento" value='.$key->documento_usuario.'>
				<button class="btn btn-info">Editar</button>
				</form></td>
				</tr>';
			} ?>
				</tr>
			</table>
		</div>
	</div>	
</div>
</div>