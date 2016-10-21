<?php 
  require_once 'views/login/mainmenu.php';
 ?>
<center><h1>Formulario de registro de usuarios nuevos</h1></center>

<div class="row">
  <div class="container">
    <div class="col-md-3"></div>

    <div class="col-md-6">
      <div class="panel panel-info">
    <div class="panel-heading">
      <h3 class="text-center">Nuevo Usuario</h3>
    </div>
    <div class="panel-body">
      <form action="?controller=login&accion=nuevo" method="post" id="form" >
        <h3>Datos Personales Dueño</h3>
        <div class="from-group">
        <label for="nom">Nombre</label>
          <input type="text" id="nom"  name="nombre" class="form-control" required >
        </div>
        <div class="from-group">
        <label for="ap">Apellido</label>
          <input type="text" id="ap"  name="apellido" class="form-control" required >
        </div>
        <div class="from-group">
        <label for="doc">Documento</label>
          <input type="number" id="doc"  name="documento" class="form-control" required>
        </div>
        <div class="from-group">
        <label for="genero">Genero</label>
          <select name="genero" id="genero" required class="form-control">
            <option value="masculino">Masculino</option>
            <option value="femenino">Femenino</option>
          </select>
        </div>
        <div class="from-group">
        <label for="email">Correo</label>
          <input type="email" id="email"  name="email" class="form-control" required >
        </div>
        <div class="from-group">
        <label for="doc">Direccion</label>
          <input type="text" id="doc"  name="direccion" class="form-control" required>
        </div>
        <div class="from-group">
        <label for="doc">Telefono</label>
          <input type="number" id="doc"  name="telefono" class="form-control" required>
        </div>
        
        <hr>
        <h6 class="text-center">crea una contraseña para su nuevo usuario</h6>
        <div class="from-group">
        <label for="password">Contraseña</label>
          <input type="password" id="password" name="password" class="form-control" required>
        </div><br>
        <input type="submit" value="Enviar" class="btn btn-success ">
      </form>
    </div>
  </div>
    </div>
    <div class="col-md-3"></div>
  </div>
</div>