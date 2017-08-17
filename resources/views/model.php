<?php
class ConexionModel
{
	private $pdo;

	public function __CONSTRUCT(){
		try{
			$this->pdo = new PDO('mysql:host=localhost;dbname=cedula', 'root', '');
			$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);		        
		}
		catch(Exception $e){
			die($e->getMessage());
		}
	}

	public function Listar(){
		try{
			$result = array();
			$stm = $this->pdo->prepare("SELECT * FROM cedula limit 0, 500000");
			$stm->execute();
			foreach($stm->fetchAll(PDO::FETCH_OBJ) as $r){
				$Conexion = new Conexion();
				$Conexion->__SET('ID', $r->ID);
				$Conexion->__SET('Cedula', $r->Cedula);
				$result[] = $Conexion;
			}
			return $result;
		}
		catch(Exception $e){
			die($e->getMessage());
		}
	}
	public function ingreso($id,$cedula){
		try{
			$stm = $this->pdo->prepare("INSERT INTO cedula VALUES (".$ID.",".$Cedula.")");
			$stm->execute();
			return true;
		}
		catch(Exception $e){
			die($e->getMessage());
		}
	}
}