 <?php 

error_reporting('0');
 require_once 'views/administrador/menu.php';
 if ($_SESSION['estado']!= 1) {
	header("location:index.php");
}

//NOTA: Esta página se utiliza para insertar y actualizar. Si llega el documento, el título del panel cambia a Actualizar y el action del form va a actualizar(), si la variable documento llega vacía entonces el panel dice Insertar y el form va a insertar()
 
if($_REQUEST['documento']!=""){
	$direccion='?controller=Administrador&accion=editarAdmin';
	$titulo="Actualizar";
	$readonly="readonly='readonly'";
}else{
	$direccion='?controller=Administrador&accion=insertarAdmin';
	$titulo="Insertar Nuevo";
}

 ?>

<div class="row">
	<div class="col-md-2">
	    <?php include_once 'views/administrador/adminMenu.php'; ?>
	</div>
	<div class="col-md-8 col-md-offset-1">

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
				<input type="submit" value="Enviar" class="btn btn-success " onclick="validar()" >
			</form>
		</div>
	</div>
	</div>	
</div> 