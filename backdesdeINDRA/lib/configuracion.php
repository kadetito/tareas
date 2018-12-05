<?php
$conexion = mysqli_connect("localhost", "testbuild", "JRK441e22", "test");
mysqli_query ($conexion,"SET NAMES 'utf8'");
$pathRecursos='http://www.webentorn.com/tareas';
$path='http://www.webentorn.com/tareas';
if (!$conexion) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

if ($_SESSION['Idioma']=='')   $_SESSION['Idioma']= 'es'; 
if ($_REQUEST['idioma'] == 'en')  $_SESSION['Idioma']='en'; 
if ($_REQUEST['idioma'] == 'es')  $_SESSION['Idioma']='es'; 
if ($_REQUEST['idioma'] == 'fr')  $_SESSION['Idioma']='fr';
if ($_REQUEST['idioma'] == 'ca') $_SESSION['Idioma']='ca';
if ($_REQUEST['idioma'] == 'ge')  $_SESSION['Idioma']='ge';
if ($_REQUEST['idioma'] == 'eu')  $_SESSION['Idioma']='eu';

require_once("traduccion/".$_SESSION['Idioma'].".php");
        $sqlGeneralSetti = "SELECT * FROM sett_settings WHERE id = '1' ";
        if(!$resultGeneralSetti = mysqli_query($conexion, $sqlGeneralSetti)) die();
        if($rowSettings = mysqli_fetch_array($resultGeneralSetti))
        
?>