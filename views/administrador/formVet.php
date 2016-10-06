 <?php 

error_reporting();
include_once 'views/administrador/menu.php';

//NOTA: Esta página se utiliza para insertar y actualizar. Si llega el documento, el título del panel cambia a Actualizar y el action del form va a actualizar(), si la variable documento llega vacía entonces el panel dice Insertar y el form va a insertar()

if($_REQUEST['documento']!=""){
	$direccion='?controller=Administrador&accion=editar';
	$titulo="Actualizar";

	//Mostrar u ocultar campo de Estado, la idea es que al insertar no aparezca y que por defecto el usuario quede activo al registrarse. Por otro lado, al actualizar sí debe aparecer para poderlo cambiar.
	$estado='
		<div class="form-group">
			<label for="estado">Estado</label>
			<select name="estado" id="estado" required class="form-control">
				<option value="1">Activo</option>
				<option value="0">Inactivo</option>
			</select>
		</div>
	';
}else{
	$direccion='?controller=Administrador&accion=insertarVet';
	$titulo="Insertar Nuevo";
	$estado='';
}



 ?>
<script type="text/javascript">
		$(document).ready(function(e){
    		$(".img-check").click(function(){
				$(this).toggleClass("check");
			});
	});
	</script>
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
					<input type="file" name="imagen" class="form-control" required=>
				</div>
				<br>
				<div class="form-group">
					<label>Descripcion</label>
					<textarea type="text" name="descripcion" class="form-control" rows="5" required></textarea>
					
				</div>			
				<hr>
				<div class="from-group">
				<label for="password">Contraseña</label>
					<input type="password" id="password" name="password" class="form-control" required value=<?php echo $stmt['password'];?> >
				</div>
				<br>
				
				<!-- 
				<label>Servicios</label>
				<div class="form-group">
					<label class="checkbox-inline"><input name="serv1" type="checkbox" value="1,">Option 1</label>
					<label class="checkbox-inline"><input name="serv2" type="checkbox" value="2,">Option 2</label>
					<label class="checkbox-inline"><input name="serv3" type="checkbox" value="3,">Option 3</label>
					<label class="checkbox-inline"><input name="serv4" type="checkbox" value="4,">Option 4</label>
					<label class="checkbox-inline"><input name="serv5" type="checkbox" value="5,">Option 5</label>
					<label class="checkbox-inline"><input name="serv6" type="checkbox" value="6,">Option 6</label>
					<label class="checkbox-inline"><input name="serv7" type="checkbox" value="7">Option 7</label>
				</div>
				  -->

				  <!-- servicios -->
				  <center><h2>Selecione los servicios que presta</h2></center><hr>
            <div class="form-group">
            <center>  
              <div class="col-md-3 col-sm-6">
                <label class="btn btn-primary">
                  <img src="assets/img/icons/medico.jpg" alt="medico veterinario" class="img-thumbnail img-check"><input type="checkbox" name="serv1" id="item4" value="1," class="hidden" autocomplete="off">
                </label>
              </div>
            
            <div class="col-md-3 col-sm-6">
              <label class="btn btn-primary">
                <img src="assets/img/icons/urgencia.jpg" alt="Urgencias" class="img-thumbnail img-check"><input type="checkbox" name="serv2" id="item4" value="2," class="hidden" autocomplete="off">
              </label>
            </div>

            <div class="col-md-3 col-sm-6">
              <label class="btn btn-primary">
                <img src="assets/img/icons/cirugia.jpg" alt="Cirugias" class="img-thumbnail img-check"><input type="checkbox" name="serv3" id="item4" value="3," class="hidden" autocomplete="off">
              </label>
            </div>

            <div class="col-md-3 col-sm-6">
              <label class="btn btn-primary">
                <img src="assets/img/icons/hospital.jpg" alt="Hospitalización" class="img-thumbnail img-check"><input type="checkbox" name="serv4" id="item4" value="4," class="hidden" autocomplete="off">
              </label>
            </div>

            <div class="col-md-3 col-sm-6">
              <label class="btn btn-primary">
                <img src="assets/img/icons/medicina.jpg" alt="Medicinas" class="img-thumbnail img-check"><input type="checkbox" name="serv4" id="item4" value="5," class="hidden" autocomplete="off">
              </label>
            </div>
            
            <div class="col-md-3 col-sm-6">
              <label class="btn btn-primary">
                <img src="assets/img/icons/lab.jpg" alt="Laboratorio" class="img-thumbnail img-check"><input type="checkbox" name="serv4" id="item4" value="6," class="hidden" autocomplete="off">
              </label>
            </div>
            
            <div class="col-md-3 col-sm-6">
              <label class="btn btn-primary">
                <img src="assets/img/icons/terapia.jpg" alt="Terapias" class="img-thumbnail img-check"><input type="checkbox" name="serv4" id="item4" value="7," class="hidden" autocomplete="off">
              </label>
            </div>
            
            <div class="col-md-3 col-sm-6">
              <label class="btn btn-primary">
                <img src="assets/img/icons/vavuna.jpg" alt="Vacunacion" class="img-thumbnail img-check"><input type="checkbox" name="serv4" id="item4" value="8," class="hidden" autocomplete="off">
              </label>
            </div>
            
            <div class="col-md-3 col-sm-6">
              <label class="btn btn-primary">
                <img src="assets/img/icons/funeraria.jpg" alt="Funeraria" class="img-thumbnail img-check"><input type="checkbox" name="serv4" id="item4" value="9," class="hidden" autocomplete="off">
              </label>
            </div>
            
            <div class="col-md-3 col-sm-6">
              <label class="btn btn-primary">
                <img src="assets/img/icons/guarderia.jpg" alt="Guarderia" class="img-thumbnail img-check"><input type="checkbox" name="serv4" id="item4" value="10," class="hidden" autocomplete="off">
              </label>
            </div>
            
            <div class="col-md-3 col-sm-6">
              <label class="btn btn-primary">
                <img src="assets/img/icons/adiestramiento.jpg" alt="Adiestramiento" class="img-thumbnail img-check"><input type="checkbox" name="serv11" id="item4" value="11," class="hidden" autocomplete="off">
              </label>
            </div>
            
            <div class="col-md-3 col-sm-6">
              <label class="btn btn-primary">
                <img src="assets/img/icons/accesorios.jpg" alt="Accesorios" class="img-thumbnail img-check"><input type="checkbox" name="serv12" id="item4" value="12," class="hidden" autocomplete="off">
              </label>
            </div>
            
            <div class="col-md-3 col-sm-6">
              <label class="btn btn-primary">
                <img src="assets/img/icons/odontologia.jpg" alt="Odontologia" class="img-thumbnail img-check"><input type="checkbox" name="serv13" id="item4" value="13," class="hidden" autocomplete="off">
              </label>
            </div>
            
            <div class="col-md-3 col-sm-6" >
              <label class="btn btn-primary">
                <img src="assets/img/icons/peluqueria.jpg" alt="Peluqueria" class="img-thumbnail img-check"><input type="checkbox" name="serv14" id="item4" value="14" class="hidden" autocomplete="off">
              </label>
            </div>
            </center>
          </div>
          <br>
          <hr>
            <input type="submit" value="Check item" class="btn btn-success form-control">
				  <!-- servicios end -->
				<!-- <input type="submit" value="Enviar" class="btn btn-success " onclick="validar()" > -->
			</form>
		</div>
	</div>
	</div>	
</div> 