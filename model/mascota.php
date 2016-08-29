<?php 
/**
* 
*/
class Mascota extends Conexion
{
	private $nombre,$genero,$tipo,$raza,$documento,$activo,$fecha_creacion,$id_veterinaria;
	private $model;

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
	/*public function setFecha_creacion($fecha_creacion) {
		$this->fecha_creacion=$fecha_creacion;
	}*/
	
	public function insertar(){

		try {

			$query="INSERT INTO mascota(nombre,genero,tipo,raza,documento_dueño,activo,fecha_creacion,id_veterinaria) VALUES ('".$this->nombre."','".$this->genero."','".$this->tipo."','".$this->raza."','".$this->documento."','".$this->activo."', NOW(), '".$this->fecha_creacion."')";

			$stmt=$this->model->prepare($query);
			$stmt->execute();

			/*$query2="INSERT INTO usuario(nombre_usuario, nombre, apellido, email, password, activo, fecha_creacion, documento, rol) VALUES ('".$this->nombre_usuario."','".$this->documento."','".$this->nombre."','".$this->apellido."','".$this->email."','".$this->password."','".$this->activo."')";

			$stmt=$this->model->prepare($query2);
			$stmt->execute();*/

			return "<script type='text/javascript'>
						alert('El registro se realizó correctamente');
						window.location='?controller=administrador&accion=index';
						</script>";
			
		} catch (PDOException $e) {

			/*return false*/ die($e->getMessage());
			
		}		
	}

	public function actualizar(){//pendiente

		try {

			$query="UPDATE usuario U INNER JOIN dueño D ON U.documento_usuario=D.documento SET U.documento='".$this->documento."', U.password='".$this->password."', D.nombre='".$this->nombre."', D.apellido='".$this->apellido."', D.rol='".$this->rol."', D.documento='".$this->documento."', D.email='".$this->email."' WHERE U.documento_usuario='".$this->documento."'";
			// $query="UPDATE usuarios U INNER JOIN instructores I ON U.documento=I.documento SET U.documento='".$this->documento."', U.password='".$this->password."', I.nombre='".$this->nombre."', I.apellido='".$this->apellido."', I.rol='".$this->rol."', I.documento='".$this->documento."', I.email='".$this->email."' WHERE U.usuario='".$this->user."'";

			$stmt=$this->model->prepare($query);
			$stmt->execute();

			return true;
			
		} catch (PDOException $e) {

			return false;
			
		}		
	}


	public function eliminar(){//Elimina registros de dos tablas con el usuario, email o documento

		try {

			/*$query="DELETE U.*,I.* FROM usuarios U INNER JOIN instructores I ON U.documento=I.documento WHERE U.documento='".$this->documento."'";

			$stmt=$this->model->prepare($query);
			$stmt->execute();*/

			$query="UPDATE mascota  SET activo='0' WHERE documento_dueño='".$this->documento."'";
			$stmt=$this->model->prepare($query);
			$stmt->execute();
			return "<script type='text/javascript'>
						alert('El registro se realizó correctamente');
						window.location='?controller=administrador&accion=index';
						</script>";;
			
		} catch (PDOException $e) {

			return $e.getMessage();
			
		}		
	}

	public function listar() {

		$query="SELECT * FROM mascota";

		$stmt=$this->model->prepare($query);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_OBJ);
	}
	public function listarId($documento){
		$query="SELECT * FROM mascota WHERE documento_dueño='".$documento."'";
		$stmt=$this->model->prepare($query);
		$stmt->execute();
		return $stmt->fetch(PDO::FETCH_ASSOC);
	}
}
 ?>