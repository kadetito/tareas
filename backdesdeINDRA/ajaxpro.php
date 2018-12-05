<?php include('lib/conexion.php');



	


	$sql = "SELECT nombre FROM usua_usuarios
			WHERE nombre LIKE '%".$_GET['query']."%'
			LIMIT 10"; 


	$result = $conexion->query($sql);


	$json = [];
	while($row = $result->fetch_assoc()){
	     $json[] = $row['nombre'];
	}


	echo json_encode($json);
?>