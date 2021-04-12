<?php 

require 'php/conexion.php';

//INICIO DE SESIÓN
session_start();


$_SESSION['message']="";

if(isset($_POST['login'])){
	$mail = $_POST['mail'];
	$psw = $_POST['password'];

	$user = $pdo->prepare("SELECT * FROM users WHERE mail=:mail AND psw=:psw");
	$user->execute(['mail' => $mail, 'psw'=>$psw]); 
	$number_of_rows = $user->fetchColumn(); 
	$user = $user->fetch();
	if($number_of_rows>0){
		$_SESSION['user']='User';
		$_SESSION['mail']=$user['mail'];
		header('location: index.php');
	}else{
		$_SESSION['message'] = 'Mail o contraseña incorrectos';
	}

}


 ?>

<style>
	
body{
	margin: 0;
}

#mother{
	width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    background-color: #121212;
    align-items: center;
}

#sub-mother-cont{
	display: flex;
    justify-content: center;
    flex-direction: column;
    align-items: center;
}

#inputs-cont{
	display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    margin-bottom: 30px;
}

.button{
	background-color: transparent;
    padding: 8px 15px;    
    color: #cfcfcf;
    font-weight: 300;
    font-size: .7em;
    border-radius: 5px;
    margin-top: 5%;
    cursor: pointer;
    border: none;
    border: 2px solid #d6197a;
    transition: .2s;
    outline: none;
}

.button:hover{
    color: white;
    background-color: #d6197a;
}

input{
	margin-bottom: 5px;
    outline: none;
    background-color: transparent;
    color: #d6197a;
    padding: 5px;
    border: 2px solid #d6197a;
    border-radius: 5px;
}

form{
	display: flex;
	flex-direction: column;
	justify-content: center;
	align-items: center;
}

#logo{
	margin-bottom: 35px;
}


</style>

 <div id="mother">
 	
 	<div id="sub-mother-cont">

		<div id="logo"><img src="imgs/logo-atom.png" height="50px" alt=""></div>

 		
 		<form action="" method="post">
	 		<div id="inputs-cont">
	 			<input type="email" name="mail" placeholder="Mail">
	 			<input type="password" name="password" placeholder="Password">
	 		</div>

	 		<div style="width: 100%;justify-content: center;display: flex;">
	 			<input type="submit" name="login" value="ACCEDER" class="button">
	 		</div>
	 		<div style="color: white; margin-top: 10px;"><?php if(isset($_POST['login'])){ echo $_SESSION['message']; } ?></div>
 		</form>

 	</div>

 </div>