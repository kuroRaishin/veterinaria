<?php 
error_reporting(0);
session_start();

  switch ($_SESSION['rol']) {
    case 'administrador':
      $sign='<li class="dropdown" id="selectmenu"><a href="" class="dropdown-toggle" data-toggle="dropdown" >'.$_SESSION['email'].'<span class="fa fa-chevron-down"></a>
          <ul class="dropdown-menu">
            <li><a href="?controller=administrador&accion=index">cuenta</a></li>
            <li><a href="?controller=login&accion=salir">cerrar sesion</a></li>
          </ul>
         </li>';
      break;

      case 'veterinaria':
      $sign='<li class="dropdown" id="selectmenu"><a href="" class="dropdown-toggle" data-toggle="dropdown" >'.$_SESSION['email'].'<span class="fa fa-chevron-down"></a>
          <ul class="dropdown-menu">
            <li><a href="?controller=veterinaria&accion=index">cuenta</a></li>
            <li><a href="?controller=login&accion=salir">cerrar sesion</a></li>
          </ul>
         </li>';
      break;
    case 'cliente':
      $sign='<li class="dropdown" id="selectmenu"><a href="" class="dropdown-toggle" data-toggle="dropdown" >'.$_SESSION['email'].'<span class="fa fa-chevron-down"></a>
          <ul class="dropdown-menu">
            <li><a href="?controller=cliente&accion=index">cuenta</a></li>
            <li><a href="?controller=login&accion=salir">cerrar sesion</a></li>
          </ul>
         </li>';
      break;
    default:
      $sign='<li><a href="" class="button"  data-toggle="modal" data-target="#modal" />iniciar sesión <span class="fa fa-sign-in"></span> </a></li>';
      break;

}


 ?>

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
	      <li><a href="?controller=login&accion=events"><input type="button" class="button-green" value="Eventos" /></a></li>
	      <li><a href="?controller=login&accion=about"><input type="button" class="button-violet" value="Conócenos" /></a></li>
    	</ul>
    	<ul class="nav navbar-nav navbar-right">
    		<br>
			<?php echo $sign; ?>
      
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
      <div class="text-right"><span class="fa fa-remove" data-dismiss="modal"></span></div>
    <div class="modal-body">
  
      <div class="panel panel-info ">
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
          <button type="submit" class="btn btn-info btn-block">INGRESAR</button>
        </div>
      </form> 
      <hr>
        <a href="?controller=login&accion=opcion"><b>no esta registrado? </b></a>
     </div>
    </div>
   </div>
  </div>  
 </div>
</div>
<!-- modal login end -->