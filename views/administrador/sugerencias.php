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
					<th><center>Sugerencia</center> </th>
					<th><center>Tipo</center> </th>
					<th><center>Usuario</center> </th>
					<th><center>Resuelta</center> </th>
					<th><center>Rechazada</center> </th>
				</tr>
				<tr class="active">
		<?php 
		if ($stmt==false) {
			echo '<center><h2>No tienes sugerencias pendientes</h2></center>';
		}else{
			foreach ($stmt as $key) {
				$i++;
				echo 
				
				'<tr>
				<td>'.$i.'</td>
				<td>'.$key->sugerencia.'</td>
				<td>'.$key->tipo.'</td>
				<td>'.$key->usuario.'</td>
				<td>
				<form method="post" action="?controller=administrador&accion=activarVet">
				<input type="hidden" name="documento" value='.$key->documento.'>
				<button class="btn btn-success"><span class="fa fa-check"></span></button>
				</form>
				</td>
				<td>
				<form method="post" action="?controller=administrador&accion=activarVet">
				<input type="hidden" name="documento" value='.$key->documento.'>
				<button class="btn btn-danger"><span class="fa fa-remove"></span></button>
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
