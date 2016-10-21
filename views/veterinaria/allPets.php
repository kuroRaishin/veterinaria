<?php 
require_once 'views/login/mainmenu.php';
if ($_SESSION['estado']!= 2) {
  header("location:index.php");
}
 ?>
<center><h1>Panel de Control</h1><h2>Veterinaria <?php echo $_SESSION['nombre']; ?></h2></center>
 <div class="row">
 	<div class="col-md-3">
 		<?php include_once'views/veterinaria/menuVet.php'; ?>
 	</div>
 	<div class="col-md-8">
 		<div class="text-justified">	
		<div class="table-responsive">
			
			<table class="table table-striped table-hover">
				<tr class="active">
					<th><center>#</center> </th>
					<th><center>Nombre</center> </th>
					<th><center>documento</center> </th>
					<th><center>Genero</center> </th>
					<th><center>Tipo</center> </th>
					<th><center>Raza</center> </th>
					<th><center>Acción </center></th>
				</tr>
				<tr class="active">
		<?php 
		$i=0;
			if ($stmt==false) {
				echo '<br><br>
 				<center><h3>No hay noticias para mostrar</h3></center>
 				<br><br>';
			}else{
				foreach ($stmt as $key) {
				$i++;
				echo 
				
				'<tr>
				<td>'.$i.'</td>
				<td>'.$key->nombre.'</td>
				<td>'.$key->documento.'</td>
				<td>'.$key->genero.'</td>
				<td>'.$key->tipo.'</td>
				<td>'.$key->raza.'</td>
				
				<td>
				<form method="post" action="?controller=veterinaria&accion=eliminarPet">
				<input type="hidden" name="id" value='.$key->id_mascota.'>
				<button class="btn btn-danger">Eliminar</button>
				</form>
				
				</form><form method="post" action="?controller=veterinaria&accion=insertarPet">
				<input type="hidden" name="id" value='.$key->id_mascota.'>
				<button class="btn btn-warning">Editar</button>
				</form></td>
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