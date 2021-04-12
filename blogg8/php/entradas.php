<?php 

require 'conexion.php';

class Entradas {
 
	// public $id;
 
	// function __construct($id) {
	// 	$this->id = $id;
	// }
 
 
	function verEntradas() {
		global $pdo;

		$entradas = $pdo->prepare("SELECT * FROM entradas");
        $entradas->execute(); 
        $entradas = $entradas->fetchAll();

        return $entradas;
	}

	function verEntrada($id) {
		global $pdo;

		$stmt = $pdo->prepare("SELECT * FROM entradas WHERE id=?");
		$stmt->execute([$id]); 
		$entrada = $stmt->fetch();

        return $entrada;
	}


	function guardarNueva($titulo, $autor, $categoria, $cuerpo, $thumbnail){

		global $pdo;

		try {
		    $sql = "INSERT INTO entradas (titulo, autor, categoria, cuerpo, thumbnail) VALUES (?,?,?,?,?)";
			$stmt= $pdo->prepare($sql);
			$stmt->execute([$titulo, $autor, $categoria, $cuerpo, $thumbnail]);
			$m = 'exito';
		} catch (Exception $e) {
		    $m = 'Algo salio mal: ' .  $e->getMessage() . "\n";
		}

		return $m;

	}

	function guardarArchivo($titulo, $autor, $categoria, $cuerpo, $id){

		global $pdo;

		try {
		    $sql = "UPDATE entradas SET titulo=?, autor=?, categoria=?, cuerpo=? WHERE id=?";
			$stmt= $pdo->prepare($sql);
			$stmt->execute([$titulo, $autor, $categoria, $cuerpo, $id]);
			$m = 'exito';
		} catch (Exception $e) {
		    $m = 'Algo salio mal: ' .  $e->getMessage() . "\n";
		}

		return $this->verEntrada($id);

	}


	function borrarArchivo($id){
		global $pdo;

		try {
			$sql = "DELETE FROM entradas WHERE id = ?";        
		    $stmt = $pdo->prepare($sql);
		    $response = $stmt->execute(array($id));   
		    $m = 'exito'; 
		}catch (Exception $e) {
			$m = 'Algo salio mal: ' . $e->getMessage() . "\n";
		}

		return $m;
	}





}

?>