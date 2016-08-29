<?php 
/**
* 
*/
class Dueno extends Conexion
{
	private $nombre,$apellido,$documento,$email,$genero,$direccion,$telefono,$activo,$fecha_creacion;
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
		return $this->fecha_creacion;/*aaaa-mm-dd 00:00:00*/
	}
	/*public function setFecha_creacion($fecha_creacion) {
		$this->fecha_creacion=$fecha_creacion;
	}*/

	public function insertar(){

		try {

			$query="INSERT INTO dueño(nombre,apellido,documento,genero,email,direccion,telefono,activo,fecha_creacion) VALUES ('".$this->nombre."','".$this->apellido."','".$this->documento."','".$this->genero."','".$this->email."','".$this->direccion."','".$this->telefono."','".$this->activo."', NOW())";

			$stmt=$this->model->prepare($query);
			$stmt->execute();

			$query2="INSERT INTO usuario(nombre_usuario, nombre, apellido, email, password, activo, fecha_creacion, documento, rol) VALUES ('".$this->nombre_usuario."','".$this->documento."','".$this->nombre."','".$this->apellido."','".$this->email."','".$this->password."','".$this->activo."')";

			$stmt=$this->model->prepare($query2);
			$stmt->execute();
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

			$stmt=$this->model->prepare($query);
			$stmt->execute();

			return true;
			
		} catch (PDOException $e) {

			return false;
			
		}		
	}


	public function eliminar(){//Elimina registros de dos tablas con el usuario, email o documento

		try {

			/*$query="DELETE U.*,I.* FROM usuarios U INNER JOIN dueño D ON U.documento=I.documento WHERE U.documento='".$this->documento."'";

			$stmt=$this->model->prepare($query);
			$stmt->execute();*/

			$query="UPDATE dueño D INNER JOIN usuario ON U.documento_usuario=D.documento SET U.activo='0', D.activo='0' WHERE U.documento_usuario='".$this->documento."'";
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

		$query="SELECT * FROM dueño WHERE activo='1'";

		$stmt=$this->model->prepare($query);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_OBJ);
	}

	public function listarId(){
		/*$query="SELECT * FROM dueño WHERE documento='".$documento."'";
		$stmt=$this->model->prepare($query);
		$stmt->execute();
		return $stmt->fetch(PDO::FETCH_ASSOC);*/

		try {
    		$query= "SELECT * FROM usuario U INNER JOIN dueño D ON U.documento_usuario=D.documento WHERE  U.documento_usuario='".$this->documento."'AND D.documento='".$this->documento."'";

    	$stmt= $this->model->prepare($query);
    	$stmt->execute();
    	return $stmt->fetch(PDO::FETCH_ASSOC);

    	} catch (PDOException $e) {
    		return false;
    	}
	}
}
 ?>