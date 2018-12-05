<?php  session_start();
require('lib/conexion.php');




if (isset($_SESSION['sessiousuari'])) {header ("Location: ".$pathRecursos."/ca/index");}	

$thispage = 'login';
 $sqlGeneralSetti = "SELECT * FROM sett_settings WHERE id = '1' ";
        if(!$resultGeneralSetti = mysqli_query($conexion, $sqlGeneralSetti)) die();
        if($rowSettings = mysqli_fetch_array($resultGeneralSetti))
        $version=$rowSettings['version'];

//=========================================================================================
// FUNCIONS PER COMPROVAR DADES LOGIN (no faig plana apart per no fer saturacio de arxius
//=========================================================================================
//variabkes que em diuen si em mostren el login el recupero pass per jQury
$sievero='display:none;';
$sinonevero='';
// A) funcio login
//=========================================================================
//=========================================================================
if($_POST['login_btn_fora']){	
//en ser obligatoris, els camps sempre hi son, ens estalviem comprovar si existeixen
 if(trim($_POST["login_username_home"]) != "" && trim($_POST["login_password_home"]) != "")
 {       
 	
 	
    // tomamos todos los usuarios en linea
	$sqlUsuarioResp = "SELECT * FROM gente_online ";
	if(!$resultResp = mysqli_query($conexion, $sqlUsuarioResp)) die();
	while($rowLoget = mysqli_fetch_array($resultResp)) 	
	{	
		// Si son los mismo actualizamos la tabla gente_online
		if($rowLoget['usuario']==$_POST["login_username_home"]) {
			echo "<script>alert('El usuario ya se encuentra logeado en otra sesion. No puede haber dos sesiones con el mismo usuario.');</script>";
			

			unset($_SESSION['sessiousuari']);
			echo '<meta http-equiv="Refresh" content="0;url='.$pathRecursos.'/login.php">';
			exit(); 
		}
	}        	
        		
 	
 	
 	
 	
 	                            	
 	  //si documento els dos camps
    $usuari_home= strtolower(htmlentities($_POST["login_username_home"], ENT_QUOTES));   
    $pass_home = $_POST["login_password_home"];
     $sqlUsuarioLGH = "SELECT contrasenya, nombre_usuario FROM usua_usuarios WHERE nombre_usuario='".$usuari_home."' ";
        if(!$sqlUoLGH = mysqli_query($conexion, $sqlUsuarioLGH)) die();
        if($row = mysqli_fetch_array($sqlUoLGH))
        {

                //si el pass coincideix
                if($row["contrasenya"] == $pass_home){
                	
                	
                	
 // Tiempo máximo de espera
$time = 5 ;
// Momento que entra en línea
$date = date('Y-m-d H:i:s') ;
// Recuperamos su IP
$ip = $_SERVER['REMOTE_ADDR'];
// Tiempo Limite de espera 
$limiter = $date-$time*60 ;

if(!isset($_SESSION['sessiousuari'])){
	$eliminarr = "delete from gente_online OR date < '".$limiter."' ";
	if (mysqli_query($conexion, $eliminarr)) {}
}
// si se supera el tiempo limite (5 minutos) lo borramos
$eliminarr = "delete from gente_online where usuario = '".$row['nombre_usuario']."' OR date < '".$limiter."' ";
if (mysqli_query($conexion, $eliminarr)) {}


$sqlsdd = "INSERT INTO gente_online (date,ip,usuario) VALUES ('".$date."','".$ip."','".$row['nombre_usuario']."')";
if (mysqli_query($conexion, $sqlsdd)) {}



                	
                	
                	
																								$host= $_SERVER["HTTP_HOST"];
																								$url= $_SERVER["REQUEST_URI"];
																								$redireccion = 'http://'.$host.''.$url;                                     
                                    	          //LOGIN NORMAL                          
                                                $_SESSION["sessiousuari"] = $row['nombre_usuario'];
                                                $_SESSION["sesioncaduca"] = 'voy a caducar';
																			          echo '<script type="text/javascript">';
																			          echo 'setTimeout(function () { swal("ACCESO PERMITIDO","identificado con éxito","success");';
																			          echo '}, 200);</script>';
                                                echo '<meta http-equiv="Refresh" content="1;url='.$pathRecursos.'/ca/index">'; 
                                                                                        
                } else {
                       //mal password
                       //llanco alert sweetalert
                       echo '<script type="text/javascript">';
                       echo 'setTimeout(function () { swal("ERROR","Password incorrecto","error");';
                       echo '}, 100);</script>';
                       echo '<meta http-equiv="Refresh" content="1;url='.$pathRecursos.'/login.php">';                                            
                }              	
     } else {
           // el usuari no es el correcte
           //llanco alert sweetalert
          echo '<script type="text/javascript">';
          echo 'setTimeout(function () { swal("ERROR","Usuario incorrecto","error");';
          echo '}, 100);</script>';
          //echo "<script>alert('usuari incorrecte');</script>";
          echo '<meta http-equiv="Refresh" content="1;url='.$pathRecursos.'/login.php">'; 

      }
      mysqli_free_result($result);
 mysqli_close($conexion);
 }
}
                    
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="<?=$pathRecursos;?>/favicon.ico">
	<title>NUEVO PROYECTO - TestBuild ({$version}) - {$nombre_proyecto}</title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="<?=$pathRecursos;?>/css/estil.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
   <link rel="stylesheet" href="<?=$pathRecursos;?>/css/sweetalert.css" />
<link href="https://fonts.googleapis.com/css?family=Bitter:400,700" rel="stylesheet">
</head>
<body id="background">

<div class="posicionadorhaches">
<h1>Gesti&oacute;n de proyectos y tareas</h1>
<h3>Controla el tiempo invertido en tu trabajo</h3>
</div>
<div class="ljko">
<div class="container">
<div class="d-flex justify-content-center h-100 ljko">
		<div class="card">
			<div class="card-header">
				<h3>Acceso</h3>
				<div class="d-flex justify-content-end social_icon">
					<span><i class="fab fa-facebook-square"></i></span>
					<span><i class="fab fa-google-plus-square"></i></span>
					<span><i class="fab fa-twitter-square"></i></span>
				</div>
			</div>
			<div class="card-body">
				<form action="<?=$pathRecursos;?>/login.php" method="POST" id="login-form" >
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" value="rafa" name="login_username_home" placeholder="username">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" name="login_password_home" value="1234" class="form-control" placeholder="password">
					</div>
					<div class="row align-items-center remember">
						&nbsp;
					</div>
					<div class="form-group text-center">
						<input type="submit" name="login_btn_fora" value="Acceder" class="btn boton_custom btn-grande">
					</div>
				</form>
			</div>
			<div>

				<div class="text-center whtxt silence">

				</div>
				
				
			</div>

		</div>

	</div>
</div>	
</div>




		<div class="row fixed-bottom">
			<div class="col-md-12 text-center footlogin">
				&copy; <?=date('Y');?> - versi&oacute;n <?=$version;?> - Webentorn.com - <a href="mailto:info@webentorn.com">info@webentorn.com</a>
				</div>
		</div>
			
			
			

    <script src="<?=$pathRecursos;?>/js/jquery-3.2.1.min.js"></script>
    <script src="<?=$pathRecursos;?>/js/popper.min.js"></script>
		<script src="<?=$pathRecursos;?>/js/bootstrap.min.js"></script>
		<script src="<?=$pathRecursos;?>/js/sweetalert.min.js"></script>
    <script src="<?=$pathRecursos;?>/js/jquery.cookie.js"></script>
<script type="text/javascript">
 var images = ['home-office-1867761_1920.jpg', 'building-2762319_1920.jpg', 'beer-1513436_1920.jpg', 'office-620822_1920.jpg', 'no-grain-no-pain-1326753-1920x1280.jpg'];
 $('#background').css({'background-image': 'url(http://www.webentorn.com/tareas/img/' + images[Math.floor(Math.random() * images.length)] + ')'});
</script>
  </body>
</html>
