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
        <a class="navbar brand" href="index.php"><img src="assets/image/logomin.png" alt="Pet-Line">
        </a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
	      <li><a href="index.php"><input type="button" class="button-yllw" value="Inicio" /></a></li>
	      <li><a href="?controller=login&accion=busquedas"><input type="button" class="button-blue" value="Busqueda" /></a></li>
	      <li><a href="#"><input type="button" class="button-green" value="Eventos" /></a></li>
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