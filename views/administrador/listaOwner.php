<?php include_once 'views/administrador/menu.php'; error_reporting('0'); ?>

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
					<th><center>Nombre</center> </th>
					<th><center>Apellido</center> </th>
					<th><center>documento</center> </th>
					<th><center>Genero</center> </th>
					<th><center>Email</center> </th>
					<th><center>Dirrecion</center> </th>
					<th><center>Telefono</center> </th>
					<!-- <th><center>Fecha creación</center> </th> -->
					<th><center>Acción </center></th>
				</tr>
				<tr class="active">
		<?php foreach ($stmt as $key) {
				$i++;
				echo 
				
				'<tr>
				<td>'.$i.'</td>
				<td>'.$key->nombre.'</td>
				<td>'.$key->apellido.'</td>
				<td>'.$key->documento.'</td>
				<td>'.$key->genero.'</td>
				<td>'.$key->email.'</td>
				<td>'.$key->direccion.'</td>
				<td>'.$key->telefono.'</td>
				
				<td>
				<form method="post" action="?controller=administrador&accion=eliminarPropietario">
				<input type="hidden" name="documento" value='.$key->documento.'>
				<button class="btn btn-danger">Eliminar</button>
				</form>
				
				</form><form method="post" action="?controller=administrador&accion=insertarPropietario">
				<input type="hidden" name="documento" value='.$key->documento.'>
				<button class="btn btn-warning">Editar</button>
				</form></td>
				</tr>';
			} ?>
				</tr>
			</table>
		</div>
	</div>	
</div>
</div>