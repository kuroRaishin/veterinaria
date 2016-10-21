<?php 
include_once 'views/login/mainmenu.php';
 ?>
 <div class="section">
	<div class="title">
		<h1>Noticias y Eventos</h1>
		<p>Mantente enterado de eventos, noticias y actualizaciones de las veterinarias</p>
	</div>
</div>
<div class="row" id="noticias">
	<div class="container">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<?php 
            	foreach ($stmt as $key) {
            		echo '
            		<div class="section">
						<div class="title">
							<h1></h1>
							<p></p>
						</div>
					</div>
            		<div class="row" id="contenido">
            			<h2><b>'.$key->titulo.'</b></h>
            			<div class="col-md-6">
							<img class="img-responsive" src="data:image/jpg;base64,'. base64_encode($key->imagen).'">
						</div>
						<div class="col-md-6">
							<p>'.$key->descripcion.'</p>
						</div>  
                    </div>
                    ';
            	}
             ?>
		</div>
		<div class="col-md-3"></div>
	</div>
</div>