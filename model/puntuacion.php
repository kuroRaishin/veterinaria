<?php 
/**
* 
*/
class Puntuacion extends Conexion
{
	private $model;
	private $id, $puntos, $doc_user, $doc_vet;
	function __construct()
	{
		$this->model = parent::__construct();
	}
	public function getId() {
		return $this->id_star;
	}
	public function setId($id_star){
		$this->id_star = $id_star;
	}
	public function getPuntos() {
		return $this->puntos;
	}
	public function setPuntos($puntos){
		$this->puntos = $puntos;
	}
	public function getDoc_user() {
		return $this->doc_user;
	}
	public function setDoc_user($doc_user){
		$this->doc_user = $doc_user;
	}
	public function getDoc_vet() {
		return $this->doc_vet;
	}
	public function setDoc_vet($doc_vet){
		$this->doc_vet = $doc_vet;
	}
	public function puntuar(){
		try {
			$query = "INSERT INTO puntuacion (puntos, doc_user, doc_vet) VALUES('".$this->puntos."','".$this->doc_user."','".$this->doc_vet."')";
			$stmt = $this->model->prepare($query); 
			$stmt->execute();

			return true;

		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}
	public function corregir(){
		try {
			$query ="UPDATE puntuacion SET puntos='".$this->puntos."' WHERE doc_vet='".$this->doc_vet."' AND doc_user='".$this->doc_user."'";
			$stmt = $this->model->prepare($query); 
			$stmt->execute();
			return true;
		} catch (PDOException $e) {
			
		}
	}
	public function validar(){
		$query = "SELECT * FROM puntuacion WHERE doc_user='".$this->doc_user."' AND doc_vet='".$this->doc_vet."'";
		$stmt = $this->model->prepare($query); 
		$stmt->execute();

		return $stmt->fetch(PDO::FETCH_ASSOC);
	}
	public function getValor(){
		$query = "SELECT * FROM puntuacion WHERE doc_vet='".$this->doc_vet."'";
		$stmt = $this->model->prepare($query); 
		$stmt->execute();

		return $stmt->fetchAll(PDO::FETCH_OBJ);
	}
	public function calcularPuntos($stars){
		$consulta = new Puntuacion();
		$stmt=$consulta->getValor($stars);
		var_dump($stmt);
		foreach ($stmt as $key) {
			$i++;
			$rating = $rating + $key->puntos;
		}
		$resultado = $rating / $i;
		return $resultado;
	}
}
 ?>