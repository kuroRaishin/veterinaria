<?php 
/**
* 
*/
class Propietario extends Conexion
{
	private $nombre,$apellido,$documento,$email,$genero,$direccion,$telefono,$fecha_creacion,$activo;
	private $model,$password,$rol;

	function __construct()
	{
		$this->model=parent::__construct();
	}
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
	public function getDocumento() {
		return $this->documento;
	}
	public function setDocumento($documento) {
		$this->documento=$documento;
	}
	public function getEmail() {
		return $this->email;
	}
	public function setEmail($email) {
		$this->email=$email;
	}
	public function getGenero() {
		return $this->nombre;
	}
	public function setGenero($genero) {
		$this->genero=$genero;
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
		return $this->fecha_creacion;/*aaaa-mm-dd*/
	}
	public function setFecha_creacion($fecha_creacion) {
		$this->fecha_creacion=$fecha_creacion;
	}
	public function getPassword() {
		return $this->password;
	}
	public function setPassword($password) {
		$this->password=$password;
	}
	public function getRol() {
		return $this->rol;
	}
	public function setRol($rol) {
		$this->rol=$rol;
	}

	public function insertar(){

		try {

			$query="INSERT INTO propietario(nombre,apellido,documento,genero,email,direccion,telefono,fecha_creacion) VALUES ('".$this->nombre."','".$this->apellido."','".$this->documento."','".$this->genero."','".$this->email."','".$this->direccion."','".$this->telefono."','".$this->fecha_creacion."')";

			$stmt=$this->model->prepare($query);
			$stmt->execute();

			$query2="INSERT INTO usuario(documento, email, password, rol ) VALUES ('".$this->documento."','".$this->email."','".$this->password."','".$this->rol."')";

			$stmt=$this->model->prepare($query2);
			$stmt->execute();
			return true;
			
		} catch (PDOException $e) {

			die($e->getMessage());
			
		}		
	}

	public function actualizar(){

		try {

			$query="UPDATE usuario SET nombre='".$this->nombre."', apellido='".$this->apellido."', P.genero='".$this->genero."', email='".$this->email."', telefono='".$this->telefono."', direccion='".$this->direccion."' WHERE documento='".$this->documento."'";

			$stmt=$this->model->prepare($query);
			$stmt->execute();

			return true;
			
		} catch (PDOException $e) {

			return $e->getMessage();
			
		}		
	}


	public function eliminar(){//Bloquea registros de dos tablas con el usuario, email o documento

		try {

			$query="UPDATE propietario SET activo=0 WHERE documento='".$this->documento."'";
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

		$query="SELECT * FROM propietario WHERE activo='1'";

		$stmt=$this->model->prepare($query);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_OBJ);
	}

	public function listarId(){
		/*$query="SELECT * FROM propietario WHERE documento='".$documento."'";
		$stmt=$this->model->prepare($query);
		$stmt->execute();
		return $stmt->fetch(PDO::FETCH_ASSOC);*/

		try {
    		$query= "SELECT * FROM usuario U INNER JOIN propietario P ON U.documento=P.documento WHERE  U.documento='".$this->documento."'AND P.activo='1'";

    		$stmt= $this->model->prepare($query);
    		$stmt->execute();
    		return $stmt->fetch(PDO::FETCH_ASSOC);

    	} catch (PDOException $e) {
    		return die($e->getMessage());
    	}
	}
}
 ?>