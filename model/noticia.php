<?php 
/**
* 
*/
class Noticia extends Conexion
{
	private $model,$id,$titulo,$imagen,$descripcion,$creador,$estado,$fecha_creacion,$fecha_caducidad;
	function __construct()
	{
		$this->model = parent::__construct();
	}
	public function getId() {
		return $this->id;
	}
	public function setId($id) {
		$this->id=$id;
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
	public function getEstado() {
		return $this->estado;
	}
	public function setEstado($estado) {
		$this->estado=$estado;
	}
	public function getFecha_creacion() {
		return $this->fecha_creacion;
	}
	public function setFecha_creacion($fecha_creacion) {
		$this->fecha_creacion=$fecha_creacion;
	}
	public function getFecha_caducidad() {
		return $this->fecha_caducidad;
	}
	public function setFecha_caducidad($fecha_caducidad) {
		$this->fecha_caducidad=$fecha_caducidad;
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
	public function actualizar(){//incompleta
		try {

			$query="UPDATE noticias SET titulo='".$this->titulo."', imagen='".$this->imagen."', descripcion='".$this->descripcion."', creador='".$this->creador."'";
			$stmt=$this->model->prepare($query);
			$stmt->execute();

			return true;
			
		} catch (PDOException $e) {

			return false;
			
		}	
	}
	public function aceptar(){
		try {

			$query="UPDATE noticias SET fecha_caducidad='".$this->fecha_caducidad."', estado='".$this->estado."' WHERE id_noticia='".$this->id."'";
			$stmt=$this->model->prepare($query);
			$stmt->execute();

			return true;
			
		} catch (PDOException $e) {

			die($e->getMessage());
			
		}	
	}
	public function rechazar(){
		try {

			$query="UPDATE noticias SET  estado='".$this->estado."' WHERE id_noticia='".$this->id."'";
			$stmt=$this->model->prepare($query);
			$stmt->execute();

			return true;
			
		} catch (PDOException $e) {

			die($e->getMessage());
			
		}	
	}
	public function fechaLimite(){
		$consulta = new Noticia();
		$stmt=$consulta->Listar();
		$hoy=date("Y-m-d");
		foreach ($stmt as $key) {
		$date1= new DateTime($key->fecha_caducidad);
		$date2= new DateTime($hoy);
		$interval = $date1->diff($date2);
		$tiempo=$interval->format('%R%a');
		if ($tiempo>0) {
			$estado="caducado";
			$query="UPDATE noticias SET estado='".$estado."' WHERE id_noticia='".$key->id_noticia."'";
			$stmt=$this->model->prepare($query);
			$stmt->execute();
		}
		
		}
	
	
		$query2="SELECT * FROM noticias WHERE estado='publicado'  ORDER BY fecha_creacion DESC" ;
		$stmt=$this->model->prepare($query2);
		$stmt->execute();
		return $stmt ->fetchAll(PDO::FETCH_OBJ);
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