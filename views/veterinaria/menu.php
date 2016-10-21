<?php 

if (!isset($_SESSION['nombre'])) {
  $sign='<li><a href="" class="button-sp"  data-toggle="modal" data-target="#modal" />iniciar sesión <span class="fa fa-sign-in"></span> </a></li>';
}
else{
  $sign='<li class="dropdown"><a href="" class="dropdown-toggle" data-toggle="dropdown" ><span class="fa fa-user-md"></span> '.$_SESSION['email'].' <span class="fa fa-chevron-down"></a>
          <ul class="dropdown-menu">
            <li><a href="?controller=login&accion=salir"><span class="fa fa-user-md"></span> Cerrar Sesión</a></li>
          </ul>
         </li>';
}

 ?>

<!-- navbar -->
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
	      <li><a href="#servicios"><input type="button" class="button-yllw" value="servicios" /></a></li>
	      <li><a href="#"><input type="button" class="button-blue" value="mascotas" /></a></li>
	      <li><a href="#"><input type="button" class="button-green" value="noticias" /></a></li>
	      <li><a href="#"><input type="button" class="button-violet" value="cerca.." /></a></li>
    	</ul>
    	<ul class="nav navbar-nav navbar-right">
    		<br>
			<li class="dropdown"><a href="" class="dropdown-toggle" data-toggle="dropdown" ><span class="fa fa-user-md"></span> <?php echo $_SESSION['email']; ?> <span class="fa fa-chevron-down"></a>
          <ul class="dropdown-menu">
            <li><a href="?controller=login&accion=salir"><span class="fa fa-config"></span> cuenta</a></li>
            <li><a href="?controller=login&accion=salir"><span class="fa fa-log-out"></span> Cerrar Sesión</a></li>
          </ul>
         </li>
		</ul>
      </div>
      <!--/.nav-collapse -->
    </div>
    <!--/.container-fluid -->
  </nav>
