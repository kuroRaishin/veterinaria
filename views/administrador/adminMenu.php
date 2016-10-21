 <div id="MainMenu">
	<div class="list-group panel">
	  	<a href="?controller=Administrador&accion=index" class="list-group-item list-group-item-inverse"  data-parent="#MainMenu">Home</a>
	    <a href="#funcionarios" class="list-group-item list-group-item-inverse" data-toggle="collapse" data-parent="#MainMenu">Clientes</a>
	    <div class="collapse" id="funcionarios">
	      <a href="?controller=Administrador&accion=listaPropietario" class="list-group-item">Ver lista</a>
	      <a href="?controller=Administrador&accion=formularioPropietario" class="list-group-item">Crear Nuevo</a>
	      <a href="?controller=Administrador&accion=index" class="list-group-item">Lista Mascotas</a>
	    </div>
	    <a href="#administrador" class="list-group-item list-group-item-inverse" data-toggle="collapse" data-parent="#MainMenu">Administrador</a>
	    <div class="collapse" id="administrador">
	      <a href="?controller=Administrador&accion=listaAdmin" class="list-group-item">Ver Lista</a>
	      <a href="?controller=Administrador&accion=formAdmin" class="list-group-item">Crear Nuevo</a>
	    </div>
	    <a href="#veterinaria" class="list-group-item list-group-item-inverse" data-toggle="collapse" data-parent="#MainMenu">Veterinarias</a>
	    <div class="collapse" id="veterinaria">
	      <a href="?controller=Administrador&accion=listaVet" class="list-group-item">Ver Lista</a>
	      <a href="?controller=Administrador&accion=formularioVet" class="list-group-item">Crear Nuevo</a>
	      <a href="?controller=Administrador&accion=servicios" class="list-group-item">Servicios</a>
	      <a href="?controller=Administrador&accion=mapa" class="list-group-item">Mapa</a>
	    </div>
	</div>
</div> 