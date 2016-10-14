
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

<!-- navbar responsive start-->

  <nav class="navbar navbar-inverse navbar-static-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar brand" href="#"><img src="assets/image/logomin.png" alt="Pet-Line">
        </a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
	      <li><a href="#servicios"><input type="button" class="button-yllw" value="servicios" /></a></li>
	      <li><a href="#"><input type="button" class="button-blue" value="flores" /></a></li>
	      <li><a href="#"><input type="button" class="button-green" value="opcion3" /></a></li>
	      <li><a href="#"><input type="button" class="button-violet" value="opcion4" /></a></li>
    	</ul>
    	<ul class="nav navbar-nav navbar-right">
    		<br>
			<li><a href="" class="button-sp"  data-toggle="modal" data-target="#modal" /><span class="glyphicon glyphicon-user"></span> iniciar sesión</a></li>
		</ul>
      </div>
      <!--/.nav-collapse -->
    </div>
    <!--/.container-fluid -->
  </nav>

<!-- navbar responsive end -->
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
			<form method="post" action="?controller=login&accion=logeo" id="logeo">
				
				<div class="form-group">
					<label for="email">correo</label>
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
				<b>no esta registrado? </b><a href="?controller=login&accion=opcion"><button class="btn btn-info"> Registrar</button></a>
			</div>
			</div>
	


		</div>
	<div class="modal-footer">
		<button class="btn btn-danger" data-dismiss="modal">Cerrar</button>
	</div>
	</div>	
	</div>
</div>
<!-- modal login end -->
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
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</article>
				<center><a href="?controller=login&accion=busquedas"><button class="btn btn-primary">Iniciar Busqueda</button></a></center>
			</div>
		</div>
		<div class="col-md-6 col-xs-12">
			<div id="mapa">
		        <h2>Aqui irá el mapa!</h2>
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
	<div class="col-md-6 primary-section"><img src="assets/image/bg5.jpg"></div>
</div>
<div class="clearfix"></div>	
</div>

<!--  -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDL_7-6zzI4qzB8qqjdiC8vgC9pEYefDSM"></script>
<script>
    //VARIABLES GENERALES
		//declaras fuera del ready de jquery
    
    var marcadores_bd= [];
    var mapa = null; //VARIABLE GENERAL PARA EL MAPA
    //FUNCION PARA QUITAR MARCADORES DE MAPA
    function limpiar_marcadores(lista)
    {
        for(i in lista)
        {
            //QUITAR MARCADOR DEL MAPA
            lista[i].setMap(null);
        }
    }
	//ready de jquery
    $(document).on("ready", function(){		
		var divMapa = document.getElementById('mapa');
		
        
        var punto = new google.maps.LatLng(4.670522,-74.09816);
        var config = {
            zoom:12,
            center:punto,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
		
		//VARIABLE MAPA
        mapa = new google.maps.Map( divMapa, config );       
        
        //CARGAR PUNTOS AL TERMINAR DE CARGAR LA PAGINA
        listar();//PUNTOS EN EL MAPA DE LAS VETERINARIAS
    });
	
	
    //FUERA DE READY DE JQUERY
    //FUNCTION PARA RECUPERAR PUNTOS DE LA BD
    function listar()
    {
        //ANTES DE LISTAR MARCADORES
        //SE DEBEN QUITAR LOS ANTERIORES DEL MAPA
       limpiar_marcadores(marcadores_bd);
       
       $.ajax({
               type:"POST",
               url:"vetajax.php",
               dataType:"JSON",
               data:"&tipo=listar",
               success:function(data){
                   if(data.estado=="ok")
                    {
                        //alert("Hay puntos en la BD");
                        $.each(data.mensaje, function(i, item){
                            //OBTENER LAS COORDENADAS DEL PUNTO
                            var posi = new google.maps.LatLng(item.latVet, item.lonVet);//bien
                            //CARGAR LAS PROPIEDADES AL MARCADOR
                            var marca = new google.maps.Marker({
                                idMarcador:item.idVeterinaria,
                                position:posi,
                                title: item.nombreEmpresa,
                                cx:item.latVet,//esas coordenadas vienen de la BD
                                cy:item.lonVet//esas coordenadas vienen de la BD
                            });
                            //AGREGAR EVENTO CLICK AL MARCADOR
                            //MARCADORES QUE VIENEN DE LA BASE DE DATOS
                            google.maps.event.addListener(marca, "click", function(){
                               //ENTRAR EN EL SEGUNDO COLAPSIBLE
                               //Y OCULTAR EL PRIMERO
                               $("#collapseTwo").collapse("show");
                               $("#collapseOne").collapse("hide");                               
                               
                            });
                            //AGREGAR EL MARCADOR A LA VARIABLE MARCADORES_BD
                            marcadores_bd.push(marca);
                            //UBICAR EL MARCADOR EN EL MAPA
                            marca.setMap(mapa);
                        });
                    }
                else
                    {
                        alert("NO hay puntos en la BD");
                    }
               },
               beforeSend:function(){
                   
               },
               complete:function(){
                   
               }
           });
    }
    //PLANTILLA AJAX
    
</script>
