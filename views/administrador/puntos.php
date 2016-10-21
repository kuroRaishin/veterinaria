<?php
include_once 'model/conexion.php';//INCLUIR CONEXION DE BASE DE DATOS

class Puntos
{
    private $r;
    public function __construct()
    {
        $this->r = array();
    }
    
    public function listar_todo()
    {

        $sql= "SELECT * FROM veterinaria";
        $con=new Conexion();
		$db = $con->conectar();
        $rpta = mysqli_query($db, $sql) or die ("no se encuentran los datos".mysqli_error($db));
        
		
        while($fila = mysqli_fetch_assoc($rpta))
        {
            $this->r[] = $fila;
        }	
		
        return $this->r;   
	}
	
	
}
  
		
?>