<?php 

///////////////////////////////////////////////////////////////////////////////
//  ============================== CONDICION SI NO ESTOY LOGIN =================
////////////////////////////////////////////////////////////////////////////////   
if (isset($_SESSION['sessiousuari'])) {

$use=$_SESSION['sessiousuari'];
//echo '<script>alert("'.$use.'");</script>';
     $querySOMG = "SELECT contrasenya, nombre_usuario FROM usua_usuarios WHERE nombre_usuario='".$use."' ";
        if(!$SettingsOMG = mysqli_query($conexion, $querySOMG)) die();
        if($rowOMG = mysqli_fetch_array($SettingsOMG))
        	
$nombredelusuario=$rowOMG['nombre_usuario'];  
  

	
} else {
	  header ("Location: ".$pathRecursos."/login.php");
}
//******************************************************************************
//  ============================== FIN CONDICION SI NO ESTOY LOGIN =================
//******************************************************************************


?>