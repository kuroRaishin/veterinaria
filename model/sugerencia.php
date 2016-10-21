<?php 
/**
* 
*/
class Sugerencia extends Conexion
{
	private $model;
	private $id, $sugerencia, $tipo, $usuario, $resuelta, $fecha;
	function __construct()
	{
		$this->model = parent::__construct();
	}

	public function getId() {
		return $this->Id;
	}
	public function setId($Id) {
		$this->Id=$Id;
	}
	public function getSugerencia() {
		return $this->sugerencia;
	}
	public function setSugerencia($sugerencia) {
		$this->sugerencia=$sugerencia;
	}
	public function getTipo() {
		return $this->tipo;
	}
	public function setTipo($tipo) {
		$this->tipo=$tipo;
	}
	public function getUsuario() {
		return $this->usuario;
	}
	public function setUsuario($usuario) {
		$this->usuario=$usuario;
	}
	public function getResuelta() {
		return $this->resuelta;
	}
	public function setResuelta($resuelta) {
		$this->resuelta=$resuelta;
	}
	public function getfecha() {
		return $this->fecha;
	}
	public function setfecha($fecha) {
		$this->fecha=$fecha;
	}
	public function nuevaSugerencia() {
		try {
			$query="INSERT INTO sugerencia(sugerencia, tipo, usuario, fecha) VALUES ('".$this->sugerencia."','".$this->tipo."','".$this->usuario."','".$this->fecha."')";
			$stmt=$this->model->prepare($query);
			$stmt->execute();
			return true;

		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}
	public function resolverSugerencia() {
		try {
			$query="UPDATE sugerencia SET resuelta=1 WHERE id_sugerencias='".$this->id."'";
			$stmt=$this->model->prepare($query);
			$stmt->execute();

			return true;
		} catch (PDOException $e) {
			return false;
		}
	}
	public function listar(){
		$query="SELECT * FROM sugerencia";

		$stmt=$this->model->prepare($query);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_OBJ);
	}
}
 ?>