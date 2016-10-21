<?php 
include_once 'views/administrador/menu.php';
 if ($_SESSION['estado']!= 1) {
	header("location:index.php");
}
 ?>
 <div class="row">
 	<div class="col-md-2">
 		<?php include_once 'views/administrador/adminMenu.php'; ?>
 	</div>
 	<div class="col-md-9">
 		<?php 
 			if ($stmt==false) {
 				echo "<br><br>
 				<center><h3>No hay noticias para mostrar</h3></center>
 				<br><br>";
 			}else{
			 echo ' <div class="table-responsive">
			 	<table class="table table-hover table-striped">
			 		<tr>
			 			<th class="text-center">Titulo</th>
			 			<th class="text-center">Descripcion</th>
			 			<th class="text-center">estado</th>
			 			<th class="text-center">caduca</th>
			 			<th class="text-center">aprobar/cancelar</th>
			 		</tr>
			 		
			 	
			 </div>';
 				foreach ($stmt as $key ) {
					if ($key->estado=="pendiente aprobacion") {
						echo '
					<tr>
			 			<form method="post" action="?controller=administrador&accion=aceptarNoticias">
			 			<td class="text-justify"><b>'.$key->titulo.'</b></td>
			 			<td class="text-justify">'.substr($key->descripcion, 0, 150).'</td>
			 			<td class="text-justify">'.$key->estado.'</td>
			 			<td class="text-justify"><input type="text" name="caducidad" id="datepicker" size="10" required></td>
			 			<td class="text-justify"><input type="hidden" name="id" class="hidden" value="'.$key->id_noticia.'"><button class="btn btn-success" type="submit"><span class="fa fa-check"></span></button></form>   <form method="post" action="?controller=administrador&accion=rechazarNoticias"><input type="hidden" name="id" class="hidden" value="'.$key->id_noticia.'"><button class="btn btn-danger" type="submit"><span class="fa fa-remove"></span></button></form></td>
			 			
			 		</tr>';
			 		
					}

 					
 				}
 			}
echo '</table></div>';
 			 ?>

 	</div>
 </div>
 <br>
 <br>
 <br>
 <br>
