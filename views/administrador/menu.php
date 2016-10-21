
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
	      <li><a href="?controller=administrador&accion=noticias"><input type="button" class="button-yllw" value="Noticias" /></a></li>
	      <li><a href="?controller=administrador&accion=solicitudes"><input type="button" class="button-blue" value="Solicitudes" /></a></li>
	      <li><a href="?controller=administrador&accion=sugerencias"><input type="button" class="button-green" value="sugerencias" /></a></li>
	      <li><a href="#"><input type="button" class="button-violet" value="Reclamos" /></a></li>
    	</ul>
    	<ul class="nav navbar-nav navbar-right">
    		<br>
			   <li class="dropdown" id="selectmenu"><a href="" class="dropdown-toggle" data-toggle="dropdown" ><?php echo $_SESSION['email']; ?><span class="fa fa-chevron-down"></a>
          <ul class="dropdown-menu">
            <li><a href="?controller=administrador&accion=index">Panel de control</a></li>
            <li><a href="?controller=login&accion=salir">cerrar sesion</a></li>
          </ul>
         </li>
		  </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
    <!--/.container-fluid -->
  </nav>
