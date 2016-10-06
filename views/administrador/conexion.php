<?php 
class Conexion
{
    //servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos
    protected $host;
    protected $usuario;
    protected $pass;
    protected $db;
    
    public function conectar()
    {
        $host= "localhost";
        $usuario = "root";
        $pass = "";
        $db = "veterinaria";
        
        $conexion = new mysqli($host,$usuario,$pass,$db)or die ("no se conecta a la base de datos"); 
    
        return $conexion;
    }   
}
 ?>