<?php
 if ($_SESSION['estado']!= 1) {
	header("location:index.php");
}
include_once 'views/administrador/menu.php';
 ?>

 <div class="row">
 	<div class="col-md-2 col-sm-12">
		<?php include_once 'adminMenu.php'; ?>
	</div>

	<div class="col-md-10">
		<div class="secondary-section">
			<div class="row">
				<div class="col-md-9">
					<div class="row">
						
							<?php 
							foreach ($stmt as $key) {
								echo '
							<div class="col-md-3">
								<h3 class="text-center">'.$key->nombre.'</h3>
							<center>
							 <img src="data:image/jpg;base64,'. base64_encode($key->imagen).'" alt="'.$key->nombre.'" class="img-circle" height="100" width="100">
							</center>
							</div>';
							}
							 ?>
						
					</div>
				</div>
				<div class="col-md-3">
					<div class="panel panel-info">
						<div class="panel-heading">
							<h2 class="text-center">Crear Servicio</h2>
						</div>
						<div class="panel-body">
							<form method="post" action="?controller=administrador&accion=new_service" enctype="multipart/form-data">
								<div class="form-group">
									<input type="" name="nombre" placeholder="Nombre" required>
								</div>
								<div class="form-group">
									<input type="file" name="imagen" required>
								</div>
								<button class="btn btn-info btn-block">crear</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
 </div>