<?php 
include_once 'views/veterinaria/menu.php';
error_reporting(0);

if ($_SESSION['estado']!= 2) {
	header("location:index.php");
}

if($_REQUEST['documento']!=""){
	$direccion='?controller=veterinaria&accion=editarCliente';
	$titulo="Actualizar";
	$readonly="readonly='true'";
}else{
	$direccion='?controller=veterinaria&accion=clienteNew';
	$titulo="Insertar Nuevo";
}


 ?>
<center><h1>Panel de Control</h1><h2>Veterinaria <?php echo $_SESSION['nombre']; ?></h2></center>
 <div class="row">
 	<div class="col-md-3">
 		<?php include_once'views/veterinaria/menuVet.php'; ?>
 	</div>
 	<div class="col-md-8">
 		<div class="panel panel-info">
		<div class="panel-heading">
			<h3 class="text-center"><?php echo $titulo; ?></h3>
		</div>
		<div class="panel-body">
			<form action=<?php echo $direccion; ?> method="post" id="form" >
				<h3>Datos Personales Dueño</h3>
				<div class="from-group">
				<label for="nom">Nombre</label>
					<input type="text" id="nom"  name="nombre" class="form-control" required value=<?php echo $stmt['nombre'];?> >
				</div>
				<div class="from-group">
				<label for="ap">Apellido</label>
					<input type="text" id="ap"  name="apellido" class="form-control" required value=<?php echo $stmt['apellido'];?> >
				</div>
				<div class="from-group">
				<label for="doc">Documento</label>
					<input type="number" id="doc"  name="documento" <?php echo $readonly; ?> class="form-control" required value=<?php echo $stmt['documento'];?> >
				</div>
				<div class="from-group">
				<label for="genero">Genero</label>
					<select name="genero" id="genero" required class="form-control">
						<option value=NULL></option>
						<option value="masculino">Masculino</option>
						<option value="femenino">Femenino</option>
					</select>
				</div>
				<div class="from-group">
				<label for="email">Correo</label>
					<input type="email" id="email"  name="email" class="form-control" required value=<?php echo $stmt['email'];?> >
				</div>
				<div class="from-group">
				<label for="doc">direccion</label>
					<input type="text" id="doc"  name="direccion" class="form-control" required value=<?php echo $stmt['direccion'];?> >
				</div>
				<div class="from-group">
				<label for="doc">telefono</label>
					<input type="number" id="doc"  name="telefono" class="form-control" required value=<?php echo $stmt['telefono'];?> >
				</div>
				
				<hr>

				<div class="from-group">
				<label for="password">Contraseña</label>
					<input type="password" id="password" name="password" <?php echo $readonly; ?> class="form-control" required value=<?php echo $stmt['password'];?> >
				</div><br>
				<input type="submit" value="Enviar" class="btn btn-success btn-block" onclick="validar()" >
			</form>
		</div>
	</div>
 	</div>
 </div>