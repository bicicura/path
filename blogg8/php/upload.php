<?php 

try{
	
	// Mover el archivo subido al directorio correspondiente
	$target_path = '../blog_images/'. basename($_FILES['inputThumbnail']['name']);
	move_uploaded_file($_FILES['inputThumbnail']['tmp_name'], $target_path);
	echo 'exito!';

}catch(Excaption $e){
	echo $e;	
}

 ?>