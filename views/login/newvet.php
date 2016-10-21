<?php 
  require_once 'views/login/mainmenu.php';
 ?>
 <!-- <script type="text/javascript">
		$(document).ready(function(e){
    		
	});
	</script> -->
	<style type="text/css">
	.check{
    	opacity:0.3;
		color:#996;
	}
	</style>

<center><h1>Formulario de solicitud de Veterinaras Nuevas</h1></center>

<div class="row">
	<div class="container">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="panel panel-info">
		<div class="panel-heading">
			<h3 class="text-center">Fomulario Veterinaria Nueva</h3>
		</div>
		<div class="panel-body">
			<form action="?controller=login&accion=solicitud" method="post" id="form" enctype="multipart/form-data" >
				<h3>Datos veterinaria</h3>
				<div class="from-group">
				<label for="nom">Nombre de la Veterinaria</label>
					<input type="text" id="nombreVet"  name="empresa" class="form-control" required>
				</div>
				<div class="from-group">
				<label for="ap">registro o NIT</label>
					<input type="text" id="documento" placeholder="número de documento" name="documento" class="form-control" required >
				</div>
				<div class="from-group">
				<label for="doc">Representante</label>
					<input type="text" id="nombre"  name="nombre" class="form-control" required>
				</div>
				<div class="from-group">
				<label for="doc">Apellido</label>
					<input type="text" name="apellido" id="apellido" class="form-control" required >
				</div>
				<div class="from-group">
				<label for="email">Correo</label>
					<input type="email" id="email"  name="email" class="form-control" required >
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
					<input type="number" id="telefono"  name="telefono" class="form-control" required >
				</div>
					<br>
				<div class="form-group">
					<label>Imagen<h6>logotipo//tamaño recomendado 200x200 pixeles</h6></label>
					<input type="file" name="imagen" class="form-control" >
				</div>
				<br>
				
				<div class="form-group">
					<label>Descripcion</label><h6>Descripcion que aparecera en su modulo de información</h6>
					<textarea type="text" name="descripcion" class="form-control" rows="5" required></textarea>
					
				</div>			
				<hr>
				
				<div class="from-group">
				<label for="password">Contraseña</label><h6>Contraseña con la que entrara al sistema</h6>
					<input type="password" id="password" name="password" class="form-control" required >
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
				
				  <!-- servicios -->
				  <center><h2>Selecione los servicios que presta</h2></center><hr>
            <div class="form-group">
            <center>  
              <?php 
				foreach ($stmt as $key) {
					$i++;
				echo '<div class="col-md-4 col-sm-6">
                <label class="btn btn-default">
                  <img src="data:image/jpg;base64,'. base64_encode($key->imagen).'" alt="'.$key->nombre.'" class="img-thumbnail img-check"><input type="checkbox" name="serv'.$i.'" id="item4" value="'.$key->nombre.'," class="hidden" autocomplete="off">
                </label>
              </div>';
				}
				 ?>
            <div class="col-md-4 col-sm-6 " > 
	            <h3>¿Su veterinaria cuenta con algún servicio diferente?</h3>
	            <textarea type="text" name="extra" class="form-control" rows="1" placeholder="cuentenos cual"></textarea> 
	            <!-- <button class="btn btn-primary btn-block form-control">enviar sugerencia</button> -->
            </div>
            
            </center>
          </div>
          <br>
          <hr>
            <input type="submit" value="Enviar Solicitud" class="btn btn-success form-control">
				  <!-- servicios end -->
				
			</form>
			
		</div>
	</div>
		</div>
		<div class="col-md-2"></div>
	</div>
</div>
