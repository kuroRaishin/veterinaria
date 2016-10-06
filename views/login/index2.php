<div class="">
	<div class="navbar navbar-inverse navbar-static-top">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
	          <span class="sr-only">Toggle navigation</span>
	          <span class="icon-bar"></span>
	          <span class="icon-bar"></span>
	          <span class="icon-bar"></span>
        </button>
        <a class="navbar brand" href="#">PET-LINE
        </a>
		</div>
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<li><a href="">opcion 1</a></li>
				<li><a href="">opcion 2</a></li>
				<li><a href="">opcion 3</a></li>
				<li><a href="">opcion 4</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="">sesion</a></li>
			</ul>
		</div>
	</div>
</div>
<!-- end -->

<!-- slider -->
<div class="row">
<div class="carousel slide" id="slide" data-ride="carousel">
	<ol class="carousel-indicators">
		<li data-slide-to="0" data-target="#slide" class="active"></li>
		<li data-slide-to="1" data-target="#slide" ></li>
		<li data-slide-to="2" data-target="#slide" ></li>
	</ol>	

	<div class="carousel-inner" role="listbox">
		<div class="item active">
			<img src="assets/image/main1.jpg" />
		</div>		
		<div class="item">
			<img src="assets/image/main2.jpg" />
		</div>	
		<div class="item">
			<img src="assets/image/main3.jpg" />
		</div>	
		
	</div>
		
		<a href="#slide" class="left carousel-control" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
		<a href="#slide" class="right carousel-control" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>

</div>

<!--  carousel end-->
<!-- modal login -->
<div id="modal" class="modal fade" role="dialog">
	<div class="modal-dialog">

	<div class="modal-content">
		<div class="modal-body">
	
			<div class="panel panel-success ">
			<div class="panel-heading"><h1 class="text-center">Iniciar Sesión</h1></div>
			<div class="panel-body">
			<form method="post" action="?controller=login&accion=logeo">
				
				<div class="form-group">
					<label for="usuario">correo</label>
					<input type="text" name="email" class="form-control" title="correo "  required="required">
				</div>
				<div class="form-group">
					<label for="password">pasword</label>
					<input type="password" name="password" class="form-control" required="required">
				</div>
				
				<div class="form-group">
					<button type="submit" class="btn btn-success">INGRESAR</button>
				</div>
				
				

			</form>	
			<hr>
				<a href=""><button class="btn btn-info">no esta registrado? Registrar</button></a>
			</div>
			</div>
	


		</div>
	<div class="modal-footer">
		<button class="btn btn-danger" data-dismiss="modal">Cerrar</button>
	</div>
	</div>	
	</div>
</div>

<!-- modal login end-->
<!-- Servicios section start -->

<div class="primary-section">
	<div class="title">
			<h2 class="text-center" >Servicios</h2>
				<p class="text-center">dale clic a la imagen para descubrir más sobre nuestros servicios</p>

		</div>
	<br>
	<div class="row" id="servicios">
		<div class="col-md-4 col-sm-12 " >
			<a href="" data-toggle="modal" data-target="#heal">
				<div class="responsive-image img-circle text-center">
					<img class="responsive-image img-circle" src="assets/image/health.jpg">
				</div>
			</a>
		</div>
		<div class="col-md-4 col-sm-12">
			<a href="" data-toggle="modal" data-target="#fashion">
				<div class="responsive-image img-circle text-center">
					<img class="responsive-image img-circle" src="assets/image/clothes.jpg">
				</div>
			</a>
		</div>
		<div class="col-md-4 col-sm-12">
			<a href="" data-toggle="modal" data-target="#adoption">
				<div class="responsive-image img-circle text-center">
					<img class="responsive-image img-circle" src="assets/image/adoption.jpg">
				</div>
			</a>
		</div>
	</div>
</div>
<!-- servicios section end -->
<!-- modal servicios start -->

<div id="heal" class="modal fade" role="dialog">
	<div class="modal-dialog">

	<div class="modal-content">
		<div class="modal-body">
	
			<div class="panel panel-success ">
			<div class="panel-heading"><h1 class="text-center">SALUD</h1></div>
			<div class="panel-body">
					<div class="responsive-image">
						
					</div>
					<p><img src="assets/image/health.jpg" align="left">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			
				<div class="">
					<a href="">
					<button type="button" class="btn btn-success">INGRESAR</button>
					</a>
				</div>

			
			</div>
			</div>
	


		</div>
	<div class="modal-footer">
		<button class="btn btn-danger" data-dismiss="modal">Cerrar</button>
	</div>
	</div>	
	</div>
</div>




<div id="fashion" class="modal fade" role="dialog">
	<div class="modal-dialog">

	<div class="modal-content">
		<div class="modal-body">
	
			<div class="panel panel-primary ">
			<div class="panel-heading"><h1 class="text-center">MODA</h1></div>
			<div class="panel-body">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				
				<div class="">
					<a href="">
					<button type="button" class="btn btn-primary">INGRESAR</button>
					</a>
				</div>

			</div>
			</div>
	


		</div>
	<div class="modal-footer">
		<button class="btn btn-danger" data-dismiss="modal">Cerrar</button>
	</div>
	</div>	
	</div>
</div>



<div id="adoption" class="modal fade" role="dialog">
	<div class="modal-dialog">

	<div class="modal-content">
		<div class="modal-body">
	
			<div class="panel panel-danger ">
			<div class="panel-heading"><h1 class="text-center">ADOPCIÓN</h1></div>
			<div class="panel-body">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				
				<div class="">
					<a href="">
					<button type="submit" class="btn btn-danger">INGRESAR</button>
					</a>
				</div>

			
			</div>
			</div>
	


		</div>
	<div class="modal-footer">
		<button class="btn btn-danger" data-dismiss="modal">Cerrar</button>
	</div>
	</div>	
	</div>
</div>

<!-- modal servicios end -->

