<?php 
include_once 'views/veterinaria/menu.php';
if ($_SESSION['estado']!= 2) {
  header("location:index.php");
 ?>
 <div class="section">
	<div class="title">
		<h1>Panel de Control</h1>
		<h2>Veterinaria <?php echo $_SESSION['nombre']; ?></h2>
	</div>
</div>
 <div class="row">
 	<div class="col-md-3">
 		<?php include_once'views/veterinaria/menuVet.php'; ?>
 	</div>
 	<div class="col-md-8">
 		<div class="panel panel-info">
				<div class="panel-heading">
					<h2>Cuentanos tus Novedades!!</h2>
				</div>
 		<div class="panel-body">
			<form method="post" enctype="multipart/form-data" action="?controller=veterinaria&accion=insertarNoticia">
				<div class="form-group">
					<label>Titulo</label>
					<input type="text" name="titulo" class="form-control" required>
				</div>
				<br>
				<div class="form-group">
					<label>Imagen</label>
					<input type="file" name="imagen" class="form-control" title="Tamaño 200 x 200 px" required>
				</div>
				<br>
				<div class="form-group">
					<label>Descripcion</label>
					<textarea type="text" name="descripcion" class="form-control" rows="5" required></textarea>
					
				</div>
				<hr>
				<button class="btn btn-info btn-block">
					
					Insertar
				</button>
			</form>
		</div>
 	</div>
 </div>
 </div>