<?php 

// Si no esta logineado, lo rajamos

session_start();

if(!isset($_SESSION['user'])){
    header('location: login.php?notLogged=1');
}

if(isset($_GET['logout'])){

	session_start();

	if(session_destroy()){
	    header('location: login.php');
	}

}

require 'php/entradas.php';

$entradas = new Entradas;
$entradas = $entradas->verEntradas();

 ?>
<input type="hidden" id="entradas-json" value='<?php echo json_encode($entradas) ?>'>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Blogg8</title>
	<link rel="stylesheet" href="css/index.css">
	
	<!-- Stylesheet del editor de texto -->
	<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

	<!-- Incluyendo la libreria de Quill JS -->
	<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>


</head>
<body>

	<!-- Mensaje de exito -->
	<div id="msj-volador">
		<div>
			Guardado con Exito!
		</div>
	</div>

	<!-- Boton sticky multiuso -->
	<div id="btn-sticky" class="tab-btn">GUARDAR</div>

	<div id="big-cont">
		
		<div class="col" id="side-bar">
			
			<div id="identity">
				<div id="blogg8">Blogg<span>8</span></div>
				<div>By plannet.cc</div>
			</div>

			<div id="menu">
				
				<div class="tab-btn" id="nueva-entrada">Nueva Entrada</div>
				<div class="tab-btn" id="archivo">Archivo<span id="notificacion">!</span></div>

			</div>

		</div>

		<div id="work-area">
			
			<div class="col" id="mid-bar">
				<div id="nueva-entrada-mid">
					
					<div class="input-cont">
						<div>Titulo</div>
						<input type="text" name="" id="ipt-titulo">
					</div>

					<div class="input-cont">
						<div>Autor</div>
						<input type="text" name="" id="ipt-autor">
					</div>

					<div class="input-cont">
						<div>Categoría (opcional)</div>
						<input type="text" id="ipt-categoria">
						<!-- A momento es un input text -->
						<!-- <select name="" id="ipt-categoria">
							<option value="Sin Categoría">Sin Categoría</option>
						</select> -->
					</div>

					<div class="input-cont">
						<div>Imagen Destacada</div>
							<input type="file" id="thumbnail-file" class="input-file">
							<div id="file-prev-cont">
								
							</div>
						<div id="img-prev">
							
						</div>
					</div>


				</div>	
				
				<div id="archivo-mid">
					
					<?php 

					foreach ($entradas as $entrada) {

					 ?>

					<div class="archivo-big-cont" id="<?php echo $entrada['id'] ?>">
						<div class="archivo-img" style="background-image: url('blog_images/<?php echo $entrada['thumbnail'] ?>')"></div>

						<div>
							<div  class="archivo-des-row">
								<div class="archivo-titulo"><?php echo $entrada['titulo'] ?></div>
								<div class="archivo-autor"><?php echo $entrada['autor'] ?></div>

							</div>
						</div>
					</div>

					<?php  
					}
					?>					

				</div>

			</div>

			<div class="col" id="right-bar">
				
				<div id="nueva-entrada-right">
					
					<div>
						<div class="label">Cuerpo</div>
						<!-- Creando el contenedor para el editor de texto -->
						<div id="editor">
						  <p>Toda gran historia comienza con una página en blanco...</p>
						</div>
					</div>
				</div>

				<div id="archivo-right">
					
					<div class="archivo-big-cont-tit">
						<div>
							<div class="archivo-prev-titulo"></div>
							<div class="archivo-prev-autor"></div>
						</div>
					
						<div id="icons-cont">
							<div class="icon-cont editar" id="editar-entrada"><img src="imgs/edit.svg" alt="edit"></div>
							<div class="icon-cont borrar" id="borrar-entrada"><img src="imgs/delete.svg" alt="edit"></div>
						</div>
					</div>

					<div class="archivo-prev-cuerpo">
						<div class="archivo-prev-pastela"></div>
					</div>

					<div>
						<div class="thumbnail-label">Categoría</div>
						<div class="archivo-prev-categoria">
					</div>
					<br>
					</div>

					<div class="archivo-thumbnail-cont">
						<div class="thumbnail-label">Imagen Destacada</div>
						<div class="archivo-thumbnail" id="prev-thumbnail">
							
						</div>
					</div>

				</div>

			</div>
			
			<div id="quote-cont">
				<div id="quote">
					
				</div>
			</div>

		</div>


	</div>


<script>

//Arrays de comentarios pelotudos
var cmtsModificar = ['Sip, quedó mucho mejor', 'Me gusta eso que hiciste', 'Uh, bien ahi!', 'Ahhh. Ahora si!', 'Un paso más cerca del éxito!']
var cmtsNueva = ['Borges te dicen a vos!', 'Se ve genial!', 'Un tanto gardel', 'Guou :O', 'Creo que les va a gustar ;)']
var cmtsBorrar = ['Si, me parece lo mejor', 'Tranca, era malísima!', 'Estoy de acuerdo', 'A la basura!', 'Que parezca un accidente, entendido ;)', 'Menos es mas.']

var cmtsHome = ["No formula is the formula.", "Perhaps you are avoiding something.", "Focus on whats real.", "Upon pressure, new ways.", "All was created out of the night.", "Out of nothing, in an instant. Everything.", "Hope all you want. Actions determine the outcome.", "Constant interrumptions are the destruction of the imagination.", "A front kick to the future.", "Isolation is the gift.", "A shot in the dark at first. A gate to the future at last.", "Doubt causes chaos.", "All work and no play makes Jack a dull boy.", "Break the pattern."]

document.getElementById('quote').innerHTML = '"' + cmtsHome[Math.floor(Math.random() * cmtsHome.length)] + '"';


// Listener para cuando adjuntan un archivo
var adjuntar = document.getElementById('thumbnail-file')
adjuntar.addEventListener('change', showPreview)

var prevCont = document.getElementById('file-prev-cont')
var imgPrev = document.getElementById('img-prev')

// Funcion que muestra preview del archivo adjuntado
function showPreview(){

	prevCont.innerHTML = '<div>'+this.files[0].name+' <span id="remove-file" onclick="removeFile()">x</span></div>'
	var previewImage = URL.createObjectURL(adjuntar.files[0]);
	// Escupiendo la preview image al div
	imgPrev.style.backgroundImage = 'url('+previewImage+')'


}

function removeFile(){
	console.log('hola!')
	prevCont.innerHTML = ""
	imgPrev.style.backgroundImage = ""
	document.getElementById('thumbnail-file').value = ""

}


function subirThumbnail(){
	const formThumbnail = document.getElementById('form-thumbnail')
	const inputThumbnail = document.getElementById('thumbnail-file')

	const endpoint = 'php/upload.php';
	const formData = new FormData();

	console.log(inputThumbnail.files)
	var file_name = inputThumbnail.files[0].name

	formData.append('inputThumbnail', inputThumbnail.files[0])

	fetch(endpoint, {
		method: 'post',
		body: formData
	}).then(function(response) {
  		console.log(response)
  		if(response.status == 200){
  			// Mostramos el preview del thumbnail
  			console.log('exito!')

  		}
	}).catch(console.error)

	return file_name

}


// Funcion para mostrar la notificacion
function notify(action){
	var notif = document.getElementById('notificacion')
	if(action == 1){
		notif.style.opacity = 1
		notif.style.transform = 'translate(40px, -15px) scale(1)'
	}else if (action == 0){
		notif.style.opacity = 0
		notif.style.transform = 'translate(40px, -15px) scale(0.1)'
		setTimeout(function(){
			notif.style.transform = 'translate(40px, -15px) scale(3)'
		}, 300)

	}
}


// Animacion de mensajes
function animate(mensaje){
	var msjCont = document.getElementById('msj-volador')
	var msj = document.querySelector('#msj-volador div')

	msj.innerHTML = mensaje

	// Realizamos la animacions
	msjCont.style.zIndex = 1

	msj.style.opacity = 1
	msj.style.transform = 'scale(1)'

	setTimeout(function(){
		msj.style.transform = 'scale(0.1)'
		msj.style.opacity = 0
	}, 1000)

	// Reestablecemos todo a la normalidad
	setTimeout(function(){
		msjCont.style.zIndex = -1

		msj.style.opacity = 0
		msj.style.transform = 'scale(2.5)'

	}, 1400)
}

// Creando objeto xhttp para Ajax Calls
var xhttp = new XMLHttpRequest();

function traerEntrada(id){

	// Funcion que se ejecuta cuando el Ajax brinda una respuesta exitosa
	xhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
	    console.log(this.responseText)
	    var entrada = JSON.parse(this.responseText)
	    return entrada

	  }
	};

	// llamado Ajax con JS Vainilla
	xhttp.open("POST", "api.php", false);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send("type=ver-entrada&id="+id);
}

// Llena el archivo-mid con las entradas
function llenarArchivo(){

	var entradas = document.getElementById('entradas-json').value
	entradas = JSON.parse(entradas)

	var archivoMid = document.getElementById('archivo-mid')
	var html = ""

	for(c in entradas){

		html += '<div class="archivo-big-cont" id="'+entradas[c].id+'"><div class="archivo-img" style="background-image: url(blog_images/'+entradas[c].thumbnail+')"></div><div><div class="archivo-des-row"><div class="archivo-titulo">'+entradas[c].titulo+'</div><div class="archivo-autor">'+entradas[c].autor+'</div></div></div></div>'

	}

	archivoMid.innerHTML = html

}

// Actualizar el input de jsons
function actualizarEntradasJson(){

	var entradasJson = document.getElementById('entradas-json')

	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
		    console.log(this.responseText)
		    entradasJson.value = this.responseText
		    llenarArchivo()

		    // Creando los listeners nuevamente
		    // Listener para cuando cliquean en una entrada
			var entradas = document.getElementsByClassName('archivo-big-cont');
			for(entrada in entradas){
				if(entradas[entrada].id!=undefined){
					entradas[entrada].addEventListener("click", verEntrada)
				}
			}

		    
		}

	};

	// llamado Ajax con JS Vainilla
	xhttp.open("POST", "api.php", false);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send("type=ver-entradas");

}


// Inicializando el editor de JS
var toolbarOptions = [
  ['bold', 'italic', 'underline', 'image'],        // toggled buttons

  [{ 'list': 'ordered'}, { 'list': 'bullet' }],
  [{ 'indent': '-1'}, { 'indent': '+1' }],          // outdent/indent

  [{ 'header': [1, 2, 3, 4, 5, 6, false] }],

  [{ 'color': [] }, { 'background': [] }],
  [{ 'align': [] }],          // dropdown with defaults from theme


  ['clean']                                         // remove formatting button
];

var quill = new Quill('#editor', {
  modules: {
    toolbar: toolbarOptions
  },
  theme: 'snow'
});

// Seleccionando botones/cosas para usar luego
var nueva = document.getElementById('nueva-entrada')
var archivo = document.getElementById('archivo')
var btnSticky = document.getElementById('btn-sticky')
var borrar = document.getElementById('borrar-entrada')


archivo.addEventListener("click", expand)
archivo.addEventListener("click", verArchivo)
nueva.addEventListener("click", expand);
nueva.addEventListener("click", nuevaEntrada);

function expand(){

	var midBar = document.getElementById('mid-bar')
	var rightBar = 	document.getElementById('right-bar')

	var quote = document.getElementById('quote-cont')
	quote.style.display = "none"
	if(!this.classList.contains('active')){

		var menu = document.getElementById('menu')
		var tabs = menu.children;
		for (var i = 0; i < tabs.length; i++) {
		  var child = tabs[i];
		  if(child.classList.contains('active')){
		  	child.classList.remove('active')
		  }
		}
		this.classList.add('active')
		midBar.classList.add('mid-expand')
		rightBar.classList.add('right-expand')
	}else{
		// Escondemos todo
		midBar.classList.remove('mid-expand')
		rightBar.classList.remove('right-expand')
		this.classList.remove('active')

		var archivoMid = document.getElementById('archivo-mid')
		var archivoRight = document.getElementById('archivo-right')
		archivoMid.style.display = "none"
		archivoRight.style.display = "none"

		var rightBarCont = document.getElementById('nueva-entrada-right')
		var midBarCont = document.getElementById('nueva-entrada-mid')
		midBarCont.style.display = "none"
		rightBarCont.style.display = "none"

		btnSticky.style.display = "none"


	}
}

function nuevaEntrada(){
	var archivoMid = document.getElementById('archivo-mid')
	var archivoRight = document.getElementById('archivo-right')
	archivoMid.style.display = "none"
	archivoRight.style.display = "none"

	if(this.classList.contains('active')){
	var midBarCont = document.getElementById('nueva-entrada-mid')
	var rightBarCont = document.getElementById('nueva-entrada-right')
	midBarCont.style.display = "flex";
	rightBarCont.style.display = "flex";

	// Mostrar boton de "Guardar"
	var btnSticky = document.getElementById('btn-sticky')
	btnSticky.style.display = "block"
	btnSticky.classList.add('guardar-nueva')
	
	}

}

function verArchivo(){

	notify(0)

	// Sacamos el 'guardar-nueva' al btnSticky dado que ahora estamos en la cateogira de archivo
	btnSticky.classList.remove('guardar-nueva')


	var editarEntrada = document.getElementById('editar-entrada')
	if(editarEntrada.classList.contains('editar')){
		btnSticky.style.display = "none"
	}

	var rightBarCont = document.getElementById('nueva-entrada-right')
	var midBarCont = document.getElementById('nueva-entrada-mid')
	midBarCont.style.display = "none"
	rightBarCont.style.display = "none"

	if(this.classList.contains('active')){

		var archivoRight = document.getElementById('archivo-right')
		var archivoMid = document.getElementById('archivo-mid')
		archivoMid.style.display = "flex"
		archivoRight.style.display = "flex"

	}
}

// Seleccionando los elementos del previsualizador del blog para su uso posterior
var tituloPrev = document.querySelector('.archivo-prev-titulo')
var autorPrev = document.querySelector('.archivo-prev-autor')
var contenidoPrev = document.querySelector('.archivo-prev-pastela') 
var categoriaPrev = document.querySelector('.archivo-prev-categoria') 
var thumbnailPrev = document.querySelector('.archivo-thumbnail')
	
// Event listener para cuando guardan entrada
btnSticky.addEventListener("click", guardar);

function guardar(){
	if(this.classList.contains('guardar-nueva')){

		// Guardamos una nueva entrada
		console.log('guardar nueva')

		// Seleccionamos la info de los inputs
		var titulo = document.getElementById('ipt-titulo')
		var autor = document.getElementById('ipt-autor')
		var categoria = document.getElementById('ipt-categoria')
		var cuerpo = document.querySelector('#editor div')
		var inputThumbnail = document.getElementById('thumbnail-file')
		if(inputThumbnail.value!=""){
			var file_name = inputThumbnail.files[0].name
		}else{
			var file_name = ""
		}

		var inputs = [titulo, autor, categoria, cuerpo]

		// Chequeamos que no haya ningun input vacio
		if(titulo.value == '' || autor.value == '' || categoria.value == '' || cuerpo.innerHTML == ''){
			for(c in inputs){
				if(inputs[c].value == ''){
					console.log(inputs[c].id + ' esta vacio!')
					inputs[c].style.border = '1px solid #d6197a'
				}
			}
			return
		}

		// Funcion que se ejecuta cuando el Ajax brinda una respuesta exitosa
		xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
		    console.log(this.responseText)

		    // Actualizamos el JSON de entradas
			actualizarEntradasJson()

			// Conseguimos la frase para el mensaje de exito
			var randomMsj = cmtsNueva[Math.floor(Math.random() * cmtsNueva.length)];

			// Mostramos el mensaje de exito
			animate(randomMsj)

			// Refrescamos los inputs
			titulo.style.transform = 'rotateX(360deg)'
			titulo.value = ""
			titulo.style.border = 'none'
			autor.style.transform = 'rotateX(360deg)'
			autor.value = ""
			autor.style.border = 'none'
			categoria.style.transform = 'rotateX(360deg)'
			categoria.value = ""
			categoria.style.border = 'none'
			cuerpo.style.transform = 'rotateX(360deg)'
			cuerpo.innerHTML = ""
			inputThumbnail.style.transform = 'rotateX(360deg)'

			// Sacamos el archivo del thumbnail
			removeFile()

			// Cerramos el creador de blog y le mostramos la notificacion de la nueva entrada
			setTimeout(function(){
				nueva.click()
			}, 700)

			// Disparamos la  notficacion
			setTimeout(function(){
				notify(1)
			}, 900)

		  }
		};

		// llamado Ajax con JS Vainilla
		xhttp.open("POST", "api.php", true);
		xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		xhttp.send("type=guardar-nueva&titulo="+titulo.value+"&autor="+autor.value+"&categoria="+categoria.value+"&cuerpo="+cuerpo.innerHTML+"&thumbnail="+file_name);

		// Subimos la imagen y la mostramos como preview
		var thumbnail_path = subirThumbnail()
		thumbnail_path = 'blog_images/'+thumbnail_path
		var img_prev = document.getElementById('img-prev')
		img_prev.style.backgroundImage = 'url('+thumbnail_path+')'


	}else if(this.classList.contains('guardar-archivo')){
		// Guardamos una entrada siendo modificada
		console.log('guardar archivo')

		var titulo = document.getElementById('ed-tit')
		var autor = document.getElementById('ed-aut')
		var categoria = autor // Hardcodeandola por ahora
		var cuerpo = document.querySelector('#ed-cuer div')
		console.log(cuerpo.innerHTML)
		var idEntrada = activa.id

		// Funcion que se ejecuta cuando el Ajax brinda una respuesta exitosa
		xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
		    console.log(this.responseText)
		    var actualizada = JSON.parse(this.responseText)
		    console.log(actualizada)
		    tituloPrev.innerHTML = actualizada.titulo
		    autorPrev.innerHTML = actualizada.autor
		    contenidoPrev.innerHTML = actualizada.cuerpo

		    // Reestableciendo el icono de editar
		    var img = document.querySelector('#editar-entrada img')
		    img.src = "imgs/edit.svg"
			img.style.height = "20px"
			document.getElementById('editar-entrada').classList.add('editar')

			// Actualizamos el JSON de entradas
			actualizarEntradasJson()

			// Conseguimos la frase para el mensaje de exito
			var randomMsj = cmtsModificar[Math.floor(Math.random() * cmtsModificar.length)];

			// Mostramos el mensaje de exito
			animate(randomMsj)
		  }
		};

		// llamado Ajax con JS Vainilla
		xhttp.open("POST", "api.php", true);
		xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		xhttp.send("type=guardar-archivo&titulo="+titulo.value+"&autor="+autor.value+"&categoria="+categoria.value+"&cuerpo="+cuerpo.innerHTML+"&id="+idEntrada);

	}

}


// Listener para cuando cliquean en una entrada
var entradas = document.getElementsByClassName('archivo-big-cont');
for(entrada in entradas){
	if(entradas[entrada].id!=undefined){
		entradas[entrada].addEventListener("click", verEntrada)
	}
}

var activa = undefined

function verEntrada(){

	// Simulamos un click en "editar" para que en caso de que este abierto, se cierre
	var e = document.getElementById('editar-entrada')
	if(e.classList.contains('editar')==false){
		e.click()
	}


	// Por si acabamos de hacer volar una, reestablecemos las propiedades
	var archivoRight = document.getElementById('archivo-right')
	archivoRight.style.transform = 'translateY(0px)'
	archivoRight.style.opacity = 1

	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
		    console.log(this.responseText)
		    var entrada = JSON.parse(this.responseText)
		    activa = entrada
			// Mostramos esta entrada en la barra de la derecha
			tituloPrev.innerHTML = entrada.titulo
			autorPrev.innerHTML = entrada.autor
			contenidoPrev.innerHTML = entrada.cuerpo
			categoriaPrev.innerHTML = entrada.categoria
			thumbnailPrev.style.backgroundImage = "url('blog_images/"+entrada.thumbnail+"')"

			// Le ponemos el opacity al right side bar
			var archivoRight = document.getElementById('archivo-right')
			archivoRight.style.opacity = 1

		}

	};

	// llamado Ajax con JS Vainilla
	xhttp.open("POST", "api.php", false);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send("type=ver-entrada&id="+this.id);

}


// Listener para cuando cliquean en editar entrada
var editarEntrada = document.getElementById('editar-entrada')
editarEntrada.addEventListener("click", editar)

function editar(){
	
	var img = document.querySelector('#editar-entrada img')

	if(this.classList.contains('editar')){
		// Mostramos el btnSticky con el texto "GUARDAR"
		btnSticky.style.display = "block"
		btnSticky.classList.add('guardar-archivo')
		// Cambiamos el edit.svg por una X
		img.src = "imgs/cancel.svg"
		img.style.height = "10px"

		// Sacamos el editar
		this.classList.remove('editar')

		// Mostramos el iconito de borrar
		borrar.style.display = "flex"
		borrar.style.transform = "translateX(-75px)"
		borrar.style.opacity = 1

		// Traemos la info directo de la BBDD
		xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
			    console.log(this.responseText)
			    var entrada = JSON.parse(this.responseText)
			    activa = entrada
				// Ponemos inputs en modo editable
				tituloPrev.innerHTML = '<input type="text" value="'+activa.titulo+'" class="editando" id="ed-tit">'
				autorPrev.innerHTML = '<input type="text" value="'+activa.autor+'" class="editando" id="ed-aut">'
				categoriaPrev.innerHTML = '<input type="text" value="'+activa.categoria+'" class="editando" id="ed-cat">'
				contenidoPrev.innerHTML = '<div id="ed-cuer">'+activa.cuerpo+'</div>'


				var quill = new Quill('#ed-cuer', {
				  modules: {
				    toolbar: toolbarOptions
				  },
				  theme: 'snow'
				});

			}

		};

		// llamado Ajax con JS Vainilla
		xhttp.open("POST", "api.php", false);
		xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		xhttp.send("type=ver-entrada&id="+activa.id);


	}else{
		// Ocultamos el btnSticky
		btnSticky.style.display = "none"
		// Cambiamos el cancel.svg por edit.svg
		img.src = "imgs/edit.svg"
		img.style.height = "20px"

		// Agregamos el editar
		this.classList.add('editar')

		// Sacar inputs
		tituloPrev.innerHTML = activa.titulo
		autorPrev.innerHTML = activa.autor
		contenidoPrev.innerHTML = activa.cuerpo

		// Ocultamos el borrar
		borrar.style.transform = "translateX(-34px)"
		borrar.style.opacity = 0
	}
}

borrar.addEventListener('click', borrarArchivo)

function borrarArchivo(){

	if(confirm("Estas seguro que queres borrar esta entrada?")){

		xhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
				    console.log(this.responseText)

				    // Mostramos algun mensaje de exito
				    if(this.responseText == 'exito'){
				    	// Lo hacemos volar
				    	var archivoRight = document.getElementById('archivo-right')
				    	archivoRight.style.transform = 'translateY(-500px)'
				    	archivoRight.style.opacity = 0

				    	// Hacemos desaparecer el del archivo mid
				    	var borrado = document.getElementById(activa.id)
				    	borrado.style.display = "none"

				    	// Conseguimos la frase para el mensaje de exito
						var randomMsj = cmtsBorrar[Math.floor(Math.random() * cmtsBorrar.length)];
				    	animate(randomMsj)

				    	return
				    }

				}

			};

			// llamado Ajax con JS Vainilla
			xhttp.open("POST", "api.php", false);
			xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			xhttp.send("type=borrar-archivo&id="+activa.id);

	}

}

</script>

</body>
</html>