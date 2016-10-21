<?php

/**
* 
*/
class Usuario extends Conexion
{

	private $nombre_usuario,$nombre,$apellido,$email,$password,$activo,$fecha_creacion,$documento_usuario,$rol;
	private $model;

	public function __construct()
	{
		$this->model = parent::__construct();
	}
	public function getDocumento() {
		return $this->documento;
	}
	public function setDocumento($documento){
		$this->documento = $documento;
	}
	public function getEmail() {
		return $this->email;
	}
	public function setEmail($email){
		$this->email = $email;
	}
	public function getPassword() {
		return $this->password;
	}
	public function setPassword($password){
		$this->password = $password;
	}
	public function getActivo() {
		return $this->activo;
	}
	public function setActivo($activo){
		$this->activo = $activo;
	}
	public function getRol() {
		return $this->nombre;
	}
	public function setRol($rol){
		$this->rol = $rol;
	}
	public function logeo(){
		$query = "SELECT * FROM usuario WHERE email='".$this->email."'AND password='".$this->password."' AND activo ='1' ";
		$stmt = $this->model->prepare($query); 
		$stmt->execute();
		return $stmt->fetch(PDO::FETCH_ASSOC);
	}

	public function cambio_password(){
		try {
			$query = "UPDATE usuario SET password='".$this->password."' WHERE documento='".$this->documento."'";
			$stmt = $this->model->prepare($query); 
			$stmt->execute();
			return true;
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}
}