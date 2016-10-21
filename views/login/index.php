
<!--
 __    __   __      __  __________     _________
|  |  / /  |  |    |  | |         |   / ___     \
|  | / /   |  |    |  | | _______ |  / \   \     \
|  |/ /    |  |    |  | | |     | |  |  \   \    |
|    /     |  |    |  | | |     | |  | __\   \   |
|    \     |  |    |  | | |_____| |  | \   ___\  |
|     \    |  |    |  | |  ___   _|  |  \  \     |
|  |\  \   |  |____|  | | |   \  \   |   \ _\    |
|  | \  \  |          | | |    \  \  |    \\     |
|  |  \  \  \        /  | |     \  \ \     \\    /
|..|...\..\  \______/   |.|......\..\ \_________/
 -->

<?php 
include_once 'views/login/mainmenu.php';
 ?>
<!-- slider -->
<div class="row">
<div class="carousel slide" id="slide" data-ride="carousel">
	<ol class="carousel-indicators">
		<li data-slide-to="0" data-target="#slide" class="active"></li>
		<li data-slide-to="1" data-target="#slide" ></li>
		<li data-slide-to="2" data-target="#slide" ></li>
	</ol>	

	<div class="carousel-inner" role="listbox">
		<div class="item">
			<img src="assets/image/main1.jpg" />
			<div class="carousel-caption" id="info1"><br><br><span class="fa fa-heart"></span>
				<h2><span class="fa fa-star"></span>Busca la mejor opción <span class="fa fa-star"></span><br><span class="fa fa-star"></span>para el cuidado de tu mascota. <span class="fa fa-star"></span></h2>
			</div>
		</div>		
		<div class="item">
			<img src="assets/image/main2.jpg" /><br><br>
			<div class="carousel-caption" id="info2">
				<h2>tu mascota ideal <br>En la veterinaria ideal <br><span >PET-LINE</span></h2>
			</div>
		</div>	
		<div class="item active">
			<img src="assets/image/main3.jpg" /><br><br>
			<div class="carousel-caption" id="info3">
				PET-LINE <br>
				<h2>Publica tú veterinaria, <br>date a conocer, <br>y haz parte de esta gran comunidad</h2>
				<br>
				<a href="?controller=login&accion=opcion" class="carousel-caption-btn button" ><h3> Haz Parte </h3></a>
			</div>
		</div>	
		
	</div>
		
		<a href="#slide" class="left carousel-control" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
		<a href="#slide" class="right carousel-control" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>

</div>
<!--  carousel end-->
<!--  -->
<div class="section">
	<div class="title">
		<h1>BUSQUEDAS</h1>
		<p>usa nuestro filtro de busquedas, o ubica la opcion mas cercana en el mapa</p>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-6 col-xs-12">
			<div class="third-section">
				<div class="title">
					<h2 class="center">Buscar</h2>
				</div>
				<article class="text-justify">
					<br>
					<br>
					¿y cual es la <br>mejor opción?
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					
				</article>
				
			</div>
		</div>
		<div class="col-md-6 col-xs-12">
			<div id="info4">
				<h3>PET-LINE cuenta con un listado en el cual podras filtrar las veterinarias dependiendo del tipo de necesidad, tambien puedes usar los Tags de busqueda para separar la busqueda por tendencias <br>ingresa y descubre un mundo de opciones para ti y tu mascota.</h3><br><br>
				<center><a href="?controller=login&accion=busquedas"><button class="button"> <h2>Iniciar Busqueda</h2></button></a></center>
			</div>
		</div>
	</div>
</div>
<div class="section">
	<div class="title">
		<h1>NOTICIAS</h1>
		<p>encuentra todo para el bienestar de tu mascota</p>
	</div>
</div>

<div class="container">
	<div class="row" id="noticias">
		<div class="carousel slide" id="notice">
        <div class="carousel-inner">
        	<div class="item active">
                <ul class="thumbnails">
            <?php 
            	foreach ($stmt as $key) {
            		echo '
            	
                        <li class="col-sm-3">
    						<div class="fff">
								<div class="thumbnail">
									<a href="#"><img class="img-responsive" width="200" height="200" src="data:image/jpg;base64,'. base64_encode($key->imagen).'"></a>
								</div>
								<div class="caption">
									<h4>'.$key->titulo.'</h4>
									<p>'.substr($key->descripcion, 0, 100).'</p>
									<a class="btn btn-mini" href="?controller=login&">» Ver más</a>
								</div>
                            </div>
                        </li>
                    ';
            	}
             ?>
             	
             	</ul>
            </div>
            <!-- /Slide1 360x240--> 
        </div>

	   <nav>
			<ul class="control-box pager">
				<li><a data-slide="prev" href="#notice" class=""><i class="glyphicon glyphicon-chevron-left"></i></a></li>
				<li><a data-slide="next" href="#notice" class=""><i class="glyphicon glyphicon-chevron-right"></i></a></li>
			</ul>
		</nav>
	   <!-- /.control-box -->   
                              
    	</div>
	</div>
</div>
<div class="section">
	<div class="title">
		<h1>ADOPCION</h1>
		<p>Encuentra la opción más cercana, o ubica la opcion mas cercana en el mapa. para adoptar tu nuevo compañero.</p>
	</div>
</div>
<div class="container">
<div class="row">
	<div class="col-md-6 primary-section">
		<h2 class="center">Centros de adopcion</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. </p>
	</div>
	<div class="col-md-6 primary-section">
		<div class="img-responsive">
			<img src="assets/image/cute.jpg" width="580" height="440">
			<div class="carousel-caption" id="info5">
				<h2>Da un hogar a quien te dara su eterno amor</h2>
			</div>
		</div>
	</div>
</div>
<div class="clearfix"></div>	
</div>
