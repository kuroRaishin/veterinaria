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
					<th><center>Nombre Empresa</center> </th>
					<th><center>Documento</center> </th>
					<th><center>Nombre</center> </th>
					<th><center>Apellido</center> </th>
					<th><center>Email</center> </th>
					<th><center>Dirrecion</center> </th>
					<th><center>Telefono</center> </th>
					<th><center>Fecha creación</center> </th>
					<th><center>Acción </center></th>
				</tr>
				<tr class="active">
		<?php foreach ($stmt as $key) {
				$i++;
				echo 
				
				'<tr>
				<td>'.$i.'</td>
				<td>'.$key->nombre_empresa.'</td>
				<td>'.$key->documento.'</td>
				<td>'.$key->nombre.'</td>
				<td>'.$key->apellido.'</td>
				<td>'.$key->email.'</td>
				<td>'.$key->direccion.'</td>
				<td>'.$key->telefono.'</td>
				<td>'.$key->fecha_creacion.'</td>
				<td>
				<form method="post" action="?controller=administrador&accion=eliminar_dueno">
				<input type="hidden" name="documento" value='.$key->documento.'>
				<button class="btn btn-info">Eliminar</button>
				</form>
				
				</form><form method="post" action="?controller=dueno&accion=insertar">
				<input type="hidden" name="documento" value='.$key->documento.'>
				<button class="btn btn-info">Editar</button>
				</form>
				<button class="btn btn-success">servicios</button>
				</td>
				</tr>';
			} ?>
				</tr>
			</table>
		</div>
	</div>	
</div>
</div>