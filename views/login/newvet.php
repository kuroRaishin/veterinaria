<?php 
  require_once 'views/login/mainmenu.php';
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
					<input type="password" id="password" name="password" class="form-control" required >
				</div>
				<br>

				  <!-- servicios -->
				  <center><h2>Selecione los servicios que presta</h2></center><hr>
            <div class="form-group">
            <center>  
              <div class="col-md-4 col-sm-6">
                <label class="btn btn-primary">
                  <img src="assets/img/icons/medico.jpg" alt="medico veterinario" class="img-thumbnail img-check"><input type="checkbox" name="serv1" id="item4" value="medico veterinario," class="hidden" autocomplete="off">
                </label>
              </div>
            
            <div class="col-md-4 col-sm-6">
              <label class="btn btn-primary">
                <img src="assets/img/icons/urgencia.jpg" alt="Urgencias" class="img-thumbnail img-check"><input type="checkbox" name="serv2" id="item4" value="urgencias," class="hidden" autocomplete="off">
              </label>
            </div>

            <div class="col-md-4 col-sm-6">
              <label class="btn btn-primary">
                <img src="assets/img/icons/cirugia.jpg" alt="Cirugias" class="img-thumbnail img-check"><input type="checkbox" name="serv3" id="item4" value="cirugías," class="hidden" autocomplete="off">
              </label>
            </div>

            <div class="col-md-4 col-sm-6">
              <label class="btn btn-primary">
                <img src="assets/img/icons/hospital.jpg" alt="Hospitalización" class="img-thumbnail img-check"><input type="checkbox" name="serv4" id="item4" value="hospitalización," class="hidden" autocomplete="off">
              </label>
            </div>

            <div class="col-md-4 col-sm-6">
              <label class="btn btn-primary">
                <img src="assets/img/icons/medicina.jpg" alt="Medicinas" class="img-thumbnail img-check"><input type="checkbox" name="serv4" id="item4" value="medicinas," class="hidden" autocomplete="off">
              </label>
            </div>
            
            <div class="col-md-4 col-sm-6">
              <label class="btn btn-primary">
                <img src="assets/img/icons/lab.jpg" alt="Laboratorio" class="img-thumbnail img-check"><input type="checkbox" name="serv4" id="item4" value="laboratorio," class="hidden" autocomplete="off">
              </label>
            </div>
            
            <div class="col-md-4 col-sm-6">
              <label class="btn btn-primary">
                <img src="assets/img/icons/terapia.jpg" alt="Terapias" class="img-thumbnail img-check"><input type="checkbox" name="serv4" id="item4" value="terapias," class="hidden" autocomplete="off">
              </label>
            </div>
            
            <div class="col-md-4 col-sm-6">
              <label class="btn btn-primary">
                <img src="assets/img/icons/vavuna.jpg" alt="Vacunacion" class="img-thumbnail img-check"><input type="checkbox" name="serv4" id="item4" value="vacunacion," class="hidden" autocomplete="off">
              </label>
            </div>
            
            <div class="col-md-4 col-sm-6">
              <label class="btn btn-primary">
                <img src="assets/img/icons/funeraria.jpg" alt="Funeraria" class="img-thumbnail img-check"><input type="checkbox" name="serv4" id="item4" value="funeraria," class="hidden" autocomplete="off">
              </label>
            </div>
            
            <div class="col-md-4 col-sm-6">
              <label class="btn btn-primary">
                <img src="assets/img/icons/guarderia.jpg" alt="Guarderia" class="img-thumbnail img-check"><input type="checkbox" name="serv4" id="item4" value="guarderia," class="hidden" autocomplete="off">
              </label>
            </div>
            
            <div class="col-md-4 col-sm-6">
              <label class="btn btn-primary">
                <img src="assets/img/icons/adiestramiento.jpg" alt="Adiestramiento" class="img-thumbnail img-check"><input type="checkbox" name="serv11" id="item4" value="adiestramiento," class="hidden" autocomplete="off">
              </label>
            </div>
            
            <div class="col-md-4 col-sm-6">
              <label class="btn btn-primary">
                <img src="assets/img/icons/accesorios.jpg" alt="Accesorios" class="img-thumbnail img-check"><input type="checkbox" name="serv12" id="item4" value="accesorios," class="hidden" autocomplete="off">
              </label>
            </div>
            
            <div class="col-md-4 col-sm-6">
              <label class="btn btn-primary">
                <img src="assets/img/icons/odontologia.jpg" alt="Odontologia" class="img-thumbnail img-check"><input type="checkbox" name="serv13" id="item4" value="odontologia," class="hidden" autocomplete="off">
              </label>
            </div>
            
            <div class="col-md-4 col-sm-6" >
              <label class="btn btn-primary">
                <img src="assets/img/icons/peluqueria.jpg" alt="Peluqueria" class="img-thumbnail img-check"><input type="checkbox" name="serv14" id="item4" value="peluqueria," class="hidden" autocomplete="off">
              </label>
            </div>
            <div class="col-md-4 col-sm-6" >
              <label class="btn btn-primary">
                <img src="assets/img/icons/alimentos.jpg" alt="Alimentos" class="img-thumbnail img-check"><input type="checkbox" name="serv15" id="item4" value="alimentos," class="hidden" autocomplete="off">
              </label>
            </div>
            <div class="col-md-4 col-sm-6" >
              <label class="btn btn-primary">
                <img src="assets/img/icons/24.jpg" alt="24 horas" class="img-thumbnail img-check"><input type="checkbox" name="serv16" id="item4" value="atencion 24 horas," class="hidden" autocomplete="off">
              </label>
            </div>
            <div class="col-md-4 col-sm-6" >
              <label class="btn btn-primary">
                <img src="assets/img/icons/adopcion.jpg" alt="adopcion" class="img-thumbnail img-check"><input type="checkbox" name="serv16" id="item4" value="adopcion" class="hidden" autocomplete="off">
              </label>
            </div>
            </center>
          </div>
          <br>
          <hr>
            <input type="submit" value="Enviar Solicitud" class="btn btn-success form-control">
				  <!-- servicios end -->
				<!-- <input type="submit" value="Enviar" class="btn btn-success " onclick="validar()" > -->
			</form>
		</div>
	</div>
		</div>
		<div class="col-md-2"></div>
	</div>
</div>
