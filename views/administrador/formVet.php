 <?php 

error_reporting();
include_once 'views/administrador/menu.php';
 if ($_SESSION['estado']!= 1) {
	header("location:index.php");
}
//NOTA: Esta página se utiliza para insertar y actualizar. Si llega el documento, el título del panel cambia a Actualizar y el action del form va a actualizar(), si la variable documento llega vacía entonces el panel dice Insertar y el form va a insertar()

if($_REQUEST['documento']!=""){
	$direccion='?controller=Administrador&accion=editarVet';
	$titulo="Actualizar";
	$serv='<div class="form-group">
			<b>Servicios selecionados: </b><p>'.$stmt['id_servicios'].'</p>
				<label for="estado">Habilitar Edición</label>
				<input type="checkbox" name="serv" value="1">
			</div>';
	$read='readonly="true"';

	//Mostrar u ocultar campo de Estado, la idea es que al insertar no aparezca y que por defecto el usuario quede activo al registrarse. Por otro lado, al actualizar sí debe aparecer para poderlo cambiar.
	$dir='
		<div class="form-group">
		<b>Direccion Actual: </b><p>'.$stmt['direccion'].'</p>
			<label for="estado">Habilitar Edición</label>
			<input type="checkbox" name="dir" value="1">
		</div>
	';
}else{
	$direccion='?controller=Administrador&accion=insertarVet';
	$titulo="Insertar Nuevo";
	$read='false';
}



 ?>
<!-- <script type="text/javascript">
		$(document).ready(function(e){
    		$(".img-check").click(function(){
				$(this).toggleClass("check");
			});
	});
	</script> -->
	<style type="text/css">
	.check{
    	opacity:0.5;
		color:#996;
	}
	</style>


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
			<form action=<?php echo $direccion; ?> method="post" id="form" enctype="multipart/form-data" >
				<h3>Datos veterinaria</h3>
				<div class="from-group">
				<label for="nom">Nombre de la Veterinaria</label>
					<input type="text" id="nombreVet"  name="empresa" class="form-control" required value=<?php echo $stmt['nombre_empresa'];?> >
				</div>
				<div class="from-group">
				<label for="ap">registro o NIT</label>
					<input type="text" id="documento" placeholder="numero de documento" name="documento" class="form-control" required value=<?php echo $stmt['documento'];?> >
				</div>
				<div class="from-group">
				<label for="doc">Representante</label>
					<input type="text" id="nombre"  name="nombre" class="form-control" required value=<?php echo $stmt['nombre'];?> >
				</div>
				<div class="from-group">
				<label for="doc">Apellido</label>
					<input type="text" name="apellido" id="apellido" class="form-control" required value=<?php echo $stmt['apellido'] ?> >
				</div>
				<div class="from-group">
				<label for="email">Correo</label>
					<input type="email" id="email"  name="email" class="form-control" required value=<?php echo $stmt['email'];?> >
				</div>
				<hr>
				<?php echo $dir; ?>
				<label>Dirección</label>
				<div class="form-inline">

				<select class="form-control" name="1">
					<option>Calle </option>
					<option>Carrera </option>
					<option>Avenida </option>
					<option>Transversal </option>
					<option>Diagonal </option>
					<option>Avenida carrera </option>
					<option>Avenida calle </option>
				</select>
				<input type="text" name="2" class="form-control" style="width: 70px;">
				<select class="form-control" name="3">
					<option> </option>
					<option>Norte </option>
					<option>Sur </option>
					<option>Este </option>
					<option>Oeste </option>
				</select>
				<select class="form-control" name="4">
					<option value="#">Calle</option>
					<option value="#">Carrera</option>
					<option value="#">Avenida</option>
					<option value="#">Transversal</option>
					<option value="#">Diagonal</option>
					<option value="#">Avenida carrera</option>
					<option value="#">Avenida calle</option>
				</select>
				<input type="text" name="5" class="form-control" style="width: 70px;">
				<label>#</label>
				<input type="number" name="6" class="form-control" style="width: 70px;">
				<select class="form-control" name="7">
					<option> </option>
					<option>Norte</option>
					<option>Sur</option>
					<option>Este</option>
					<option>Oeste</option>
				</select>
			</div>
				<!--  -->
				<div class="from-group">
				<label for="doc">telefono</label>
					<input type="number" id="telefono"  name="telefono" class="form-control" required value=<?php echo $stmt['telefono'];?> >
				</div>	
				<div class="form-group">
					<label>Imagen</label>
					<input type="file" name="imagen" class="form-control">
				</div>
				<br>
				<div class="form-group">
					<label>Descripcion</label>
					<textarea type="text" name="descripcion" class="form-control" rows="5" required ><?php echo $stmt['descripcion'];?></textarea>
					
				</div>			
				<hr>
				<div class="from-group">
				<label for="password">Contraseña</label>
					<input type="password" id="password" name="password" class="form-control" required <?php echo $read; ?> >
				</div>
				<br>
				<div class="form-group">
					<label>Tags de Busqueda</label><br>
					<p>
					<input type="checkbox" name="tag1" value="salud,">salud</p>
					<p>
					<input type="checkbox" name="tag2" value="moda,">moda</p>
					<p>
					<input type="checkbox" name="tag3" value="adopcion,">adopcion</p>
					<p>
					<input type="checkbox" name="tag4" value="cuidado">cuidado</p>
				</div>
				<br>
				<?php echo $serv; ?>
				  <!-- servicios -->
				  <center><h2>Selecione los servicios que presta</h2></center><hr>
            <div class="form-group">
            <center>  
              <?php 
				foreach ($stmt2 as $key) {
					$i++;
				echo '<div class="col-md-4 col-sm-6">
                <label class="btn btn-default">
                  <img src="data:image/jpg;base64,'. base64_encode($key->imagen).'" alt="'.$key->nombre.'" class="img-thumbnail img-check"><input type="checkbox" name="serv'.$i.'" id="item4" value="'.$key->nombre.'," class="hidden" autocomplete="off">
                </label>
              </div>';
				}
				 ?>            
            </center>
          </div>
          <br>
          <hr>
            <input type="submit" value="enviar" class="btn btn-success form-control">
			</form>
		</div>
	</div>
	</div>	
</div> 
