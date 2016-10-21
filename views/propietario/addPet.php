<?php 
require_once 'views/login/mainmenu.php';
if ($_SESSION['estado']!= 3) {
  header("location:index.php");
}
error_reporting(0);
if($_REQUEST['id']!=""){
	$direccion='?controller=cliente&accion=editarPet';
	$titulo="Actualizar";
	$readonly="true";
	$id=' <input type="text" name="id" class="hidden" value='. $stmt['id_mascota'] .'>';
}else{
	$direccion='?controller=cliente&accion=insertarPet';
	$titulo="Nueva Mascota";
}
 ?>

<div class="row">
	<div class="col-md-8 col-md-offset-2">
 		<div class="panel panel-info">
 			<div class="panel-heading">
 				<h2 class="text-center"><?php echo $titulo; ?></h2>
 			</div>
 			<div class="panel-body">
 			<form action=<?php echo $direccion; ?> method="post" id="form" >
				<h3>Datos Mascota</h3>
				<div class="from-group">
				<label for="nom">Nombre</label>
					<input type="text" id="nombre"  name="nombre" class="form-control" required value=<?php echo $stmt['nombre'];?>>
				</div>
				<div class="from-group">
				<label for="genero">Genero</label>
					<select name="genero" id="genero" required class="form-control">
						<option></option>
						<option value="macho">Macho</option>
						<option value="hembra">hembra</option>
					</select>
				</div>
				<div class="from-group">
				<label for="tipo">Tipo</label>
					<input type="text" id="tipo" placeholder="tipo de animal (perro, gato, hamster...)" name="tipo" class="form-control" required value=<?php echo $stmt['tipo'];?> >
				</div>
				<div class="from-group">
				<label for="doc">raza</label>
					<input type="text" id="doc"  name="raza" class="form-control" required value=<?php echo $stmt['raza'];?> >
				</div>
				<?php echo $id; ?>
				<hr>
				<input type="submit" value="ENVIAR" class="btn btn-success btn-block">
			</form>
 			</div>
 		</div>
 	</div>
 </div>	