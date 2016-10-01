<?php
	require_once('conexion.php');
	
	
	$nombreEmpresa 	= $_POST["nombreEmpresa"];
	$documento		= $_POST["documento"];
	$nombre			= $_POST["nombre"];
	$apellido		= $_POST["apellido"];
	$email			= $_POST["email"];
	$direccion		= $_POST["direccion"];
	$telefono		= $_POST["telefono"];
	$idServicios	= $_POST["idServicios"];
			
	$return = getCoordenadas($direccion);
	$latVet = $return[0];
	$lonVet = $return[1];
	 

	$sql = "INSERT INTO  veterinaria (nombreEmpresa,documento,nombre,apellido,email,direccion,telefono,idServicios,latVet,lonVet)  
	VALUES ('$nombreEmpresa', '$documento', '$nombre', '$apellido', '$email', '$direccion', '$telefono',  '$idServicios', '$latVet', '$lonVet') ;";
	
	$con=new Conexion();
	$db = $con->conectar();
    $query = mysqli_query($db, $sql) or die ("no se insertaron los datos".mysqli_error($db));
	
	if ($query){
		echo "<script>alert(\"Exito al registrar.\"); </script>";
		echo "<script>location.href='IngresarVeterinaria.php'</script>";
	}else{
		echo "<script>alert(\"Error al registrar\"); </script>";
		echo "<script>location.href='IngresarVeterinaria.php'</script>";
	}
	
	 
function getCoordenadas($address){
    $address = urlencode($address);
    $url = "http://maps.google.com/maps/api/geocode/json?sensor=false&address=" . $address;
    $response = file_get_contents($url);
    $json = json_decode($response,true);
 
    $lat = $json['results'][0]['geometry']['location']['lat'];
    $lng = $json['results'][0]['geometry']['location']['lng'];
 
    return array($lat, $lng);
}
 
 
	?>