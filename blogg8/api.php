<?php 

require 'php/entradas.php';
$entradas = new Entradas;

// Empiezan atajadas de la API
$type = $_POST['type'];

if($type == 'guardar-nueva'){

	echo $entradas->guardarNueva($_POST['titulo'], $_POST['autor'], $_POST['categoria'], $_POST['cuerpo'], $_POST['thumbnail']);

}else if($type == 'guardar-archivo'){

	echo json_encode($entradas->guardarArchivo($_POST['titulo'], $_POST['autor'], $_POST['categoria'], $_POST['cuerpo'], $_POST['id']));	

}else if($type == 'ver-entrada'){

	echo json_encode($entradas->verEntrada($_POST['id']));	

}else if($type == 'ver-entradas'){

	echo json_encode($entradas->verEntradas());	

}else if($type == 'borrar-archivo'){

	echo $entradas->borrarArchivo($_POST['id']);

}

 ?>