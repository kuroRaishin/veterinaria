<?php 
/**
* 
*/
class Veterinaria extends Conexion
{
	private $nombre_empresa,$documento,$nombre,$apellido,$email,$genero,$direccion,$telefono,$activo,$fecha_creacion,$id_servicios,$imagen,$rating,$descripcion,$latVet,$lonVet,$password,$rol;
	private $model;

	function __construct()
	{
		$this->model=parent::__construct();
	}
	public function getNombre_empresa() {
		return $this->nombre;
	}
	public function setNombre_empresa($nombre_empresa) {
		$this->nombre_empresa=$nombre_empresa;
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
	public function getLonVet() {
		return $this->lonvet;
	}
	public function setLonvet($lonvet) {
		$this->lonvet=$lonvet;
	}
	public function getLatVet() {
		return $this->latVet;
	}
	public function setLatVet($latVet) {
		$this->latVet=$latVet;
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
		return $this->fecha_creacion;
	}
	public function setFecha_creacion($fecha_creacion) {
		$this->fecha_creacion=$fecha_creacion;
	}
	public function getId_servicios() {
		return $this->nombre;
	}
	public function setId_servicios($id_servicios) {
		$this->id_servicios=$id_servicios;
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
	public function getRating() {
		return $this->rating;
	}
	public function setRating($rating) {
		$this->rating=$rating;
	}
	public function getPassword() {
		return $this->password;
	}
	public function setPassword($password){
		$this->password = $password;
	}
	public function getRol() {
		return $this->nombre;
	}
	public function setRol($rol){
		$this->rol = $rol;
	}
	public function insertar(){

		try {

			$query="INSERT INTO veterinaria(nombre_empresa, documento, nombre, apellido, email, direccion, latVet, lonvet, telefono, fecha_creacion, id_servicios, imagen, rating, descripcion) VALUES ('".$this->nombre_empresa."','".$this->documento."','".$this->nombre."','".$this->apellido."','".$this->email."','".$this->direccion."','".$this->latVet."','".$this->lonvet."','".$this->telefono."','".$this->fecha_creacion."','".$this->id_servicios."','".$this->imagen."','".$this->rating."','".$this->descripcion."')";

			$stmt=$this->model->prepare($query);
			$stmt->execute();

			$query2="INSERT INTO usuario(documento,email,password,rol) VALUES ('".$this->documento."','".$this->email."','".$this->password."','".$this->rol."')";

			$stmt=$this->model->prepare($query2);
			$stmt->execute();
			return true;
			
		} catch (PDOException $e) {

			/*return false*/ die($e->getMessage());
			
		}		
	}

	public function actualizar(){//pendiente

		try {

			$query="UPDATE veterinaria V INNER JOIN usuario U ON U.documento=V.documento SET U.documento='".$this->documento."', U.password='".$this->password."', V.nombre_empresa='".$this->nombre_empresa."', V.nombre='".$this->nombre."', v.apellido='".$this->apellido."', U.rol='".$this->rol."', V.documento='".$this->documento."', V.direccion='".$this->direccion."', V.telefono='".$this->telefono."', V.imagen='".$this->imagen."', V.rating='".$this->rating."', V.descripcion='".$this->descripcion."', V.email='".$this->email."', U.email='".$this->email."' WHERE U.documento='".$this->documento."'";

			$stmt=$this->model->prepare($query);
			$stmt->execute();

			return true;
			
		} catch (PDOException $e) {

			return false;
			
		}		
	}


	public function eliminar(){//bloquea registros de dos tablas con el usuario, email o documento

		try {

			$query="UPDATE veterinaria SET activo=0 WHERE documento='".$this->documento;
			$stmt=$this->model->prepare($query);
			$stmt->execute();

			$query2="UPDATE usuario SET activo=0 WHERE documento='".$this->documento;
			$stmt=$this->model->prepare($query2);
			$stmt->execute();
			return true;
			
		} catch (PDOException $e) {

			return $e.getMessage();
			
		}		
	}

	public function listar() {

		$query="SELECT * FROM veterinaria WHERE activo='1'";

		$stmt=$this->model->prepare($query);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_OBJ);
	}

	public function listarId(){
		$query="SELECT * FROM veterinaria WHERE documento='".$documento."'";
		$stmt=$this->model->prepare($query);
		$stmt->execute();
		return $stmt->fetch(PDO::FETCH_ASSOC);
	}

	public function listaServicios() {

		$query="SELECT * FROM servicios ORDER BY nombre";

		$stmt=$this->model->prepare($query);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_OBJ);
	}

	function getCoordenadas($address){
    $address = urlencode($address);
    $url = "http://maps.google.com/maps/api/geocode/json?sensor=false&address=" . $address;
    $response = file_get_contents($url);
    $json = json_decode($response,true);
 
    $lat = $json['results'][0]['geometry']['location']['lat'];
    $lng = $json['results'][0]['geometry']['location']['lng'];
 
    return array($lat, $lng);
	}
}
 ?>