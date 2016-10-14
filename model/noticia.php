<?php 
/**
* 
*/
class Noticia extends Conexion
{
	private $model,$titulo,$imagen,$descripcion,$creador,$activo,$fecha_creacion;
	function __construct()
	{
		$this->model = parent::__construct();
	}
	public function getTitulo() {
		return $this->titulo;
	}
	public function setTitulo($titulo) {
		$this->titulo=$titulo;
	}
	public function getImagen() {
		return $this->imagen;
	}
	public function setImagen($imagen) {
		$this->imagen=$imagen;
	}
	public function getDescripcion() {
		return $this->descripcion;
	}
	public function setDescripcion($descripcion) {
		$this->descripcion=$descripcion;
	}
	public function getCreador() {
		return $this->creador;
	}
	public function setCreador($creador) {
		$this->creador=$creador;
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

			$query="INSERT INTO noticias(titulo, imagen, descripcion, creador, fecha_creacion) VALUES ('".$this->titulo."','".$this->imagen."','".$this->descripcion."','".$this->creador."','".$this->fecha_creacion."')";
			$stmt=$this->model->prepare($query);
			$stmt->execute();
			return true;
			
		} catch (PDOException $e) {

			die($e->getMessage());
			
		}
	}
	public function actualizar(){
		try {

			$query="UPDATE noticias SET titulo='".$this->titulo."', imagen='".$this->imagen."', descripcion='".$this->descripcion."', creador='".$this->creador."'";
			$stmt=$this->model->prepare($query);
			$stmt->execute();

			return true;
			
		} catch (PDOException $e) {

			return false;
			
		}	
	}
	public function eliminar(){
		try {

			$query="UPDATE noticias SET activo=0 WHERE creador='".$this->creador."'";
			$stmt=$this->model->prepare($query);
			$stmt->execute();

			return true;
			
		} catch (PDOException $e) {

			return $e->getMessage();
			
		}	
	}
	public function listar(){
		$query="SELECT * FROM noticias";

		$stmt=$this->model->prepare($query);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_OBJ);
	}
	public function listarId($id){
		$query="SELECT * FROM noticias WHERE id='".$id."'";
		$stmt=$this->model->prepare($query);
		$stmt->execute();
		return $stmt->fetch(PDO::FETCH_ASSOC);
	}
	public function listaRel(){
		$query="SELECT * FROM noticias WHERE creador='".$this->creador."'";
		$stmt=$this->model->prepare($query);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_OBJ);
	}
}
 ?>