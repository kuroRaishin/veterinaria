<?php 
include_once 'views/veterinaria/menu.php';
if ($_SESSION['estado']!= 2) {
  header("location:index.php");
 ?>
<center><h1>Panel de Control</h1><h2>Veterinaria <?php echo $_SESSION['nombre']; ?></h2></center>
 <div class="row">
 	<div class="col-md-3">
 		<?php include_once'views/veterinaria/menuVet.php'; ?>
 	</div>
 	<div class="col-md-8">
 		<div class="row secondary-section">
 			<?php 
 			if ($stmt==false) {
 				echo "<br><br>
 				<center><h3>No hay noticias para mostrar</h3></center>
 				<br><br>";
 			}else{
 				foreach ($stmt as $key ) {
 					if ($key->estado=="caducado") {
						$color="<button class='btn btn-danger'>";
					}
					if ($key->estado=="pendiente aprobacion") {
						$color="<button class='btn btn-warning'>";
					}
					if ($key->estado=="publicado") {
						$color="<button class='btn btn-success'>";
					}
 					echo '<div class="col-md-6 notice" >
					<h3>'.$key->titulo.'</h3>
					<img class="img-responsive" width="200" height="150" src="data:image/jpg;base64,'. base64_encode($key->imagen).'">
					<article>'.substr($key->descripcion, 0, 150).'</article>
					<h6 class="text-right">estado actual:'.$color.' '.$key->estado.'</button></h6>
					</div>';
 				}
 			}

 			 ?>
 		</div><div class="clearfix visible-md-block"></div>
 	</div>
 </div>