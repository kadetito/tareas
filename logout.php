<?php session_start(); require('lib/conexion.php');  

    

$eliminarr = "delete from gente_online where usuario = '".$_SESSION['sessiousuari']."' ";
if (mysqli_query($conexion, $eliminarr)) {}

     unset($_SESSION['sessiousuari']);
    
     echo '<meta http-equiv="Refresh" content="1;url='.$pathRecursos.'/login.php">'; 

//******************************************************************************
//  ============================= FIN LOGOUT =====================================
//******************************************************************************

?>