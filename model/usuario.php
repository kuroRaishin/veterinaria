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
	public function getNombre_suario() {
		return $this->nombre_usuario;
	}
	public function setNombre_usuario($nombre_usuario){
		$this->nombre_usuario = $nombre_usuario;
	}
	public function getNombre() {
		return $this->nombre;
	}
	public function setNombre($nombre){
		$this->nombre = $nombre;
	}
	public function getApellido() {
		return $this->apellido;
	}
	public function setApellido($apellido){
		$this->apellido = $apellido;
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
		$query = "SELECT * FROM usuario WHERE email='".$this->email."'AND password='".$this->password."'";
		$stmt = $this->model->prepare($query); 
		$stmt->execute();
		return $stmt->fetch(PDO::FETCH_ASSOC);
	}
}