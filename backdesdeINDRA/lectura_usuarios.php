<?php
require('lib/configuracion.php');

//CREATE QUERY TO DB AND PUT RECEIVED DATA INTO ASSOCIATIVE ARRAY
if (isset($_REQUEST['query'])) {
    $query = $_REQUEST['query'];	
	
                             $sqli = "SELECT * FROM usua_usuarios  WHERE nombre LIKE '%".$query."%' LIMIT 10";
							 if(!$resul = mysqli_query($conexion, $sqli)) die();
							 $data = [];
							 while($row = mysqli_fetch_array($resul)){	
							 $array[] = array (
								$data[] = $row['nombre'];
							  );
							  }	
							 echo json_encode ($data);
}

?>    
   