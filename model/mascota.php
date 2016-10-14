<?php 
/**
* 
*/
class Mascota extends Conexion
{
	private $id,$nombre,$genero,$tipo,$raza,$documento,$activo,$fecha_creacion,$id_veterinaria;
	private $model;

	function __construct()
	{
		$this->model=parent::__construct();
	}
	public function getId() {
		return $this->id;
	}
	public function setId($id) {
		$this->id=$id;
	}
	public function getNombre() {
		return $this->nombre;
	}
	public function setNombre($nombre) {
		$this->nombre=$nombre;
	}
	public function getDocumento() {
		return $this->documento;
	}
	public function setDocumento($documento) {
		$this->documento=$documento;
	}
	public function getTipo() {
		return $this->tipo;
	}
	public function setTipo($tipo) {
		$this->tipo=$tipo;
	}
	public function getGenero() {
		return $this->nombre;
	}
	public function setGenero($genero) {
		$this->genero=$genero;
	}
	public function getRaza() {
		return $this->raza;
	}
	public function setRaza($raza) {
		$this->raza=$raza;
	}
	public function getId_veterinaria() {
		return $this->id_veterinaria;
	}
	public function setId_veterinaria($id_veterinaria) {
		$this->id_veterinaria=$id_veterinaria;
	}
	public function getActivo() {
		return $this->nombre;
	}
	public function setActivo($activo) {
		$this->activo=$activo;
	}
	public function getFecha_creacion() {
		return $this->fecha_creacion;
	}
	public function setFecha_creacion($fecha_creacion) {
		$this->fecha_creacion=$fecha_creacion;
	}
	
	public function insertar(){

		try {

			$query="INSERT INTO mascota(nombre, genero ,tipo, raza, documento, fecha_creacion, id_veterinaria) VALUES ('".$this->nombre."','".$this->genero."','".$this->tipo."','".$this->raza."','".$this->documento."','".$this->fecha_creacion."','".$this->id_veterinaria."')";

			$stmt=$this->model->prepare($query);
			$stmt->execute();

			return true;
			
		} catch (PDOException $e) {

			die($e->getMessage());
			
		}		
	}

	public function actualizar(){

		try {

			$query="UPDATE mascota SET documento='".$this->documento."', nombre='".$this->nombre."',  raza='".$this->raza."', tipo='".$this->tipo."', genero='".$this->genero."' WHERE id_mascota='".$this->id."'";
			
			$stmt=$this->model->prepare($query);
			$stmt->execute();

			return true;
			
		} catch (PDOException $e) {

			return false;
			
		}		
	}


	public function eliminar($id){//Bloquea los registros de la tabla mascota

		try {

			$query="UPDATE mascota  SET activo=0 WHERE id_mascota='".$id."'";
			$stmt=$this->model->prepare($query);
			$stmt->execute();
			return true;
			
		} catch (PDOException $e) {

			return $e->getMessage();
			
		}		
	}

	public function listar() {

		$query="SELECT * FROM mascota WHERE activo=1";
		$stmt=$this->model->prepare($query);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_OBJ);
	}

	public function listarId($id){
		$query="SELECT * FROM mascota WHERE id_mascota='".$id."' AND activo=1";
		$stmt=$this->model->prepare($query);
		$stmt->execute();
		return $stmt->fetch(PDO::FETCH_ASSOC);
	}
	public function listarPropietario(){
		$query="SELECT * FROM mascota WHERE documento='".$this->documento."' AND activo=1";
		$stmt=$this->model->prepare($query);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_OBJ);
	}

	public function listarVet(){
		$query="SELECT * FROM mascota WHERE id_veterinaria='".$this->id_veterinaria."' AND activo=1";
		$stmt=$this->model->prepare($query);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_OBJ);
	}
}
 ?>