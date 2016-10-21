<?php include_once 'views/administrador/menu.php'; error_reporting('0'); 
 if ($_SESSION['estado']!= 1) {
	header("location:index.php");
}
?>

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
					<th><center>Empresa</center> </th>
					<th><center>Documento</center> </th>
					<th><center>Nombre</center> </th>
					<th><center>Apellido</center> </th>
					<th><center>Email</center> </th>
					<th><center>Dirrecion</center> </th>
					<th><center>Telefono</center> </th>
<!-- 				<th><center>Fecha creación</center> </th>
 -->				<th><center>Acción </center></th>
				</tr>
				<tr class="active">
		<?php 
		if ($stmt==false) {
			echo '<center><h2>No tienes solicitudes pendientes</h2></center>';
		}else{
			foreach ($stmt as $key) {
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
				<td>
				<form method="post" action="?controller=administrador&accion=activarVet">
				<input type="hidden" name="documento" value='.$key->documento.'>
				<button class="btn btn-info">Activar</button>
				</form>
				</td>
				</tr>';
			}
		}
		 ?>
				</tr>
			</table>
		</div>
	</div>	
</div>
</div>
