<?php 
include_once 'views/login/mainmenu.php';
 ?>
 <div class="section">
  <div class="title">
    <h1><?php echo $stmt['nombre_empresa']; ?></h1>
    <p>encuentra todo para el bienestar de tu mascota</p>
  </div>
</div>
<div class="container">
  <div id="tabs">
    <ul>
      <li><a href="#info">Informacion Basica</a></li>
      <li><a href="#citas">Agendar</a></li>
      <li><a href="#noticias">Noticias</a></li>
    </ul>
    <div id="info">
      <div class="row">
        <div class="col-md-3">
          <center>
          <?php 
            echo '<img class="img-circle" width="200" height="200" src="data:image/jpg;base64,'.base64_encode($stmt['imagen']).'">';
           ?>
           <form method="post" action="?controller=login&accion=puntuar">
           <h5><input id="input-21e"  type="number" class="rating" min=0 max=5 step=0.5 data-size="xs" value=<?php echo $stmt['rating']; ?> ></h5>
           </center>
           <button class="ui-button ui-widget ui-corner-all btn-block">Enviar calificación</button>
           </form><hr>
           <br><br><hr>
           <div class="text-justify">
             <div class="panel panel-info">
               <div class="panel-heading">
                 <h3 class="text-center"><?php echo $stmt['tags']; ?></h3>
               </div>
               <div class="panel-body">
                 <b>Representante: </b>
                 <p><?php echo $stmt['nombre']; ?> <?php echo $stmt['apellido']; ?></p>
                 <hr>
                 <br>
                 <b>Correo: </b>
                 <p><?php echo $stmt['email']; ?></p>
                 <hr>
                 <b>Telefonos: </b>
                 <p><?php echo $stmt['telefono']; ?></p>
                 <hr>
                 <b>Direccion: </b>
                 <p><?php echo $stmt['direccion']; ?></p>
               </div>
             </div>
           </div>
        </div>
        <div class="col-md-9">
          <div class="row">
            <div class="col-md-12">
              <?php echo $stmt['descripcion']; ?>
            </div>
            <div class="col-md-8 col-md-offset-2">
              <br>
              <br>
              <br>
              <h2 class="text-center">Servicios que ofrece</h2>
              <p><?php 
        
                $array = $stmt['id_servicios'];
                $array = explode(',', $array);

                for ($i=0; $i < sizeof($array); $i++) { 
                  echo '<ol><h3><span class="glyphicon glyphicon-ok-sign"></span>  '.ucwords($array[$i]).'</h3></ol><br>';
                }
                 ?></p>
            </div>
          </div> 
        </div>
      </div>
    </div>
    <div id="citas">
      <p>Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque molestie turpis. Sed fringilla, massa eget luctus malesuada, metus eros molestie lectus, ut tempus eros massa ut dolor. Aenean aliquet fringilla sem. Suspendisse sed ligula in ligula suscipit aliquam. Praesent in eros vestibulum mi adipiscing adipiscing. Morbi facilisis. Curabitur ornare consequat nunc. Aenean vel metus. Ut posuere viverra nulla. Aliquam erat volutpat. Pellentesque convallis. Maecenas feugiat, tellus pellentesque pretium posuere, felis lorem euismod felis, eu ornare leo nisi vel felis. Mauris consectetur tortor et purus.</p>
    </div>
    <div id="noticias">
      <div class="row">
      <?php 
      if ($stmt2==false) {
        echo "<br><br>
        <center><h3 id='noti'>No hay noticias para mostrar</h3></center>
        <br><br>";
      }else{
        foreach ($stmt2 as $key ) {
          
          echo '<div class="col-md-12 notice" id="noti">
          <h3>'.$key->titulo.'</h3>
          <div class="col-md-3">
          <img class="img-responsive" width="200" height="150" src="data:image/jpg;base64,'. base64_encode($key->imagen).'"></div>
          <div class="col-md-8">
          <article>'.$key->descripcion.'</article>
          <h6 class="text-right">estado actual: '.$key->estado.'</button></h6>
          </div></div><br><br>';
        }
      }

       ?>   
    </div>
  </div>
  </center>
  </div>
</div>
