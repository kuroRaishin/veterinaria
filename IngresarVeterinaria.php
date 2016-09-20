<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Ingresar Datos Veterinaria</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<section id="formulario">
	
		<p id="titulo">Ingresar Datos Veterinaria</p>

		<form action="buscarCoordenadas.php" method="post">
        
        			<input type="text" id="nombreEmpresa" name="nombreEmpresa" placeholder="Nombre Veterinaria">
            <input type="text" id="documento" name="documento" placeholder="Documento">
			<input type="text" id="nombre" name="nombre" placeholder="Nombre">
            <input type="text" id="apellido" name="apellido" placeholder="Apellido">
			<input type="mail" id="email" name="email" placeholder="Correo electr&oacute;nico">
			<input type="text" id="direccion" name="direccion" placeholder="Dirección">
            <input type="text" id="telefono" name="telefono" placeholder="Telefono">
            <input type="text" id="idServicios" name="idServicios" placeholder="Servicios">
            
			<input type="submit" value="enviar">
		</form>
	</section>
</body>
</html>