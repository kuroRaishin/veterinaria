<?php include_once 'views/administrador/menu.php'; 
 if ($_SESSION['estado']!= 1) {
  header("location:index.php");
}
?>
<div class="row">
	<div class="col-md-2">
		<?php include_once 'views/administrador/adminMenu.php'; ?>
	</div>
	<div class="col-md-8 col-md-offset-1">
		<div id="mapa">
        	<h2>Aqui irá el mapa!</h2>
    	</div>
	</div>
</div>
<div id="map">
  <img src="http://petline.esy.es/geolocalizacion2.html">
</div>
<script type="text/javascript" src="http://code.jquery.com/jquery-2.0.3.min.js" ></script>
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
               url:"views/administrador/ventajax.php",
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
                                title: item.nombre_empresa,
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