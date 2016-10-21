<?php
include_once 'class/conexion.php';//INCLUIR CONEXION DE BASE DE DATOS

class Puntos
{
    private $r;
    public function __construct()
    {
        $this->r = array();
    }
    
    public function listar_todo()
    {
        $sql= "select * from veterinaria";
        $con=new Conexion();
        $db = $con->conectar();
        $rpta = mysqli_query($db, $sql) or die ("no se encuentran los datos".mysqli_error($db));
        
        
       
    
    
}
  
        
?>

<?php 
public function listar_todo() {
    $veterinaria =$this->vet;
    $stmt=$veterinaria->listar();
     while($res = $stmt->fetch(PDO::FETCH_ASSOC))
            {
                $r[] = $stmt;
            }   
            
            return $r;   
     }



 ?>