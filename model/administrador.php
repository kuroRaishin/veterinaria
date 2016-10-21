<?php 
require_once 'model/conexion.php';
class Administrador extends Conexion{

	private $nombre,$apellido,$documento,$email,$direccion,$telefono,$activo,$fecha_creacion;
	private $model,$password,$rol;


	public function __construct(){

		$this->model=parent::__construct();
	}

	public function getDocumento(){
		return $this->documento;
	}
	public function setDocumento($documento){
		$this->documento=$documento;
	}
	
	public function getPassword(){
		return $this->password;
	}
	public function setPassword($password){
		$this->password=$password;
	}

	public function getRol(){
		return $this->password;
	}
	public function setRol($rol){
		$this->rol=$rol;
	}

	public function getEmail(){
		return $this->email;
	}
	public function setEmail($email){
		$this->email=$email;
	}
	
	/**/
	public function getNombre() {
		return $this->nombre;
	}
	public function setNombre($nombre) {
		$this->nombre=$nombre;
	}
	public function getApellido() {
		return $this->apellido;
	}
	public function setApellido($apellido) {
		$this->apellido=$apellido;
	}
	public function getDireccion() {
		return $this->direccion;
	}
	public function setDireccion($direccion) {
		$this->direccion=$direccion;
	}
	public function getTelefono() {
		return $this->telefono;
	}
	public function setTelefono($telefono) {
		$this->telefono=$telefono;
	}
	public function getActivo() {
		return $this->nombre;
	}
	public function setActivo($activo) {
		$this->activo=$activo;
	}
	public function getFecha_creacion() {
		return $this->fecha_creacion;/*aaaa-mm-dd 00:00:00*/
	}
	/*public function setFecha_creacion($fecha_creacion) {
		$this->fecha_creacion=$fecha_creacion;
	}*/


	public function insertar(){

		try {
			$query="INSERT INTO administrador(nombre,apellido,documento,email,direccion,telefono) VALUES ('".$this->nombre."','".$this->apellido."','".$this->documento."','".$this->email."','".$this->direccion."','".$this->telefono."')";

			$stmt=$this->model->prepare($query);
			$stmt->execute();


			$query2="INSERT INTO usuario(documento,email,password,rol) VALUES ('".$this->documento."','".$this->email."','".$this->password."','".$this->rol."')";

			$stmt=$this->model->prepare($query2);
			$stmt->execute();

			return true;
			
		} catch (PDOException $e) {

			die($e->getMessage());
			
		}		
	}

	public function actualizar(){

		try {

			$query="UPDATE administrador A INNER JOIN usuario U ON A.documento=U.documento SET U.documento='".$this->documento."', U.password='".$this->password."', A.nombre='".$this->nombre."', A.apellido='".$this->apellido."', U.rol='".$this->rol."', A.documento='".$this->documento."', A.email='".$this->email."', U.email='".$this->email."', A.telefono='".$this->telefono."', A.direccion='".$this->direccion."' WHERE U.documento='".$this->documento."'";

			$stmt=$this->model->prepare($query);
			$stmt->execute();

			return "<script type='text/javascript'>
						alert('El registro se realizó correctamente');
						window.location='?controller=administrador&accion=index';
						</script>";
			
		} catch (PDOException $e) {

			return false;
			
		}		
	}


	public function eliminar(){//bloquea registros de dos tablas con el usuario, email o documento

		try {

			$query="UPDATE administrador SET activo=0 WHERE documento='".$this->documento."'";
			$stmt=$this->model->prepare($query);
			$stmt->execute();
			$query2="UPDATE usuario SET activo=0 WHERE documento='".$this->documento."'";
			$stmt=$this->model->prepare($query2);
			$stmt->execute();
			return true ;
					
		} catch (PDOException $e) {

			return false;
			
		}		
	}

	public function listar() {

		$query="SELECT * FROM administrador WHERE activo='1'";
		$stmt=$this->model->prepare($query);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_OBJ);
	}

	public function listarId(){
		$query="SELECT * FROM administrador WHERE documento='".$this->documento."'";
		$stmt=$this->model->prepare($query);
		$stmt->execute();
		return $stmt->fetch(PDO::FETCH_ASSOC);
	}
}


 ?>