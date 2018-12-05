<?php
require('lib/configuracion.php');
         echo '<script>alert();</script>';
//evitar inserccion de cualquier caracter que no sea letra o numero
function HayHack($string)
{  
    if (ereg("[^A-Za-z0-9]+",$string))
    {
        $hack = true;
    }
    else
    {
        $hack = false;
    }
    return $hack;
}  

if(HayHack($_POST['asignarusuario']) )
{
    echo "Hay algo que pasó y no lo hicé yo, serás tu?."; 
}
else
{
    //variables POST
    $asignarusuario = 'roberto reley';
  
$consultainsert = "INSERT INTO usua_usuarios (nombre) VALUES ('".$asignarusuario."')";    
    if (mysqli_query($conexion, $consultainsert)) {
																         
        echo "Empleado Guardado Correctamente";
    }
    else
    {
        echo "No se pudieron guardar los datos";
    }
}
?>