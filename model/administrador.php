<?php 
require_once 'model/conexion.php';
class Administrador extends Conexion{

	private $nombre_usuario,$nombre,$apellido,$email,$password,$activo,$fecha_creacion,$documento_usuario,$rol;
	private $model;


	public function __construct(){

		$this->model=parent::__construct();
	}

	public function getUsuario(){
		return $this->user;
	}

	public function setUsuario($usuario){
		$this->user=$usuario;
	}
	
	public function getDocumento(){
		return $this->documento;
	}

	public function setDocumento($documento_usuario){
		$this->documento_usuario=$documento_usuario;
	}
	
	public function getNombre(){
		return $this->nombre;
	}

	public function setNombre($nombre){
		$this->nombre=$nombre;
	}
	public function getApellido(){
		return $this->apellido;
	}

	public function setApellido($apellido){
		$this->apellido=$apellido;
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
	
	


	public function insertar(){

		try {

			$query="INSERT INTO usuario(nombre,apellido,documento,rol,email) VALUES ('".$this->nombre."','".$this->apellido."','".$this->documento."','".$this->rol."','".$this->email."')";

			$stmt=$this->model->prepare($query);
			$stmt->execute();

			/*$query2="INSERT INTO usuario(usuario,documento,password) VALUES ('".$this->user."','".$this->documento."','".$this->password."')";

			$stmt=$this->model->prepare($query2);
			$stmt->execute();*/
			return true;
			
		} catch (PDOException $e) {

			/*return false*/ die($e->getMessage());
			
		}		
	}

	public function actualizar(){

		try {

			$query="UPDATE usuario U INNER JOIN usuario I ON U.documento=I.documento SET U.documento='".$this->documento."', U.password='".$this->password."', I.nombre='".$this->nombre."', I.apellido='".$this->apellido."', I.rol='".$this->rol."', I.documento='".$this->documento."', I.email='".$this->email."' WHERE U.documento='".$this->documento."'";
			// $query="UPDATE usuarios U INNER JOIN usuario I ON U.documento=I.documento SET U.documento='".$this->documento."', U.password='".$this->password."', I.nombre='".$this->nombre."', I.apellido='".$this->apellido."', I.rol='".$this->rol."', I.documento='".$this->documento."', I.email='".$this->email."' WHERE U.usuario='".$this->user."'";

			$stmt=$this->model->prepare($query);
			$stmt->execute();

			return true;
			
		} catch (PDOException $e) {

			return false;
			
		}		
	}


	public function eliminar(){//Elimina registros de dos tablas con el usuario, email o documento

		try {

			$query="DELETE U.*,I.* FROM usuario U INNER JOIN usuario I ON U.documento=I.documento WHERE U.documento='".$this->documento."'";

			$stmt=$this->model->prepare($query);
			$stmt->execute();

			return true;
			
		} catch (PDOException $e) {

			return false;
			
		}		
	}

	public function listar() {

		$query="SELECT * FROM usuario WHERE rol='administrador'";
		$stmt=$this->model->prepare($query);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_OBJ);
	}

	public function listarId($documento){
		$query="SELECT * FROM usuario WHERE documento='".$documento_usuario."'";
		$stmt=$this->model->prepare($query);
		$stmt->execute();
		return $stmt->fetch(PDO::FETCH_ASSOC);
	}
}


 ?>