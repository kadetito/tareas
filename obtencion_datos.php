<?php session_start();require('lib/conexion.php');
    $sqlUsuarioSetti = "SELECT * FROM usua_usuarios WHERE id = '8000001' ";
        if($rowUsuario = mysqli_fetch_array($resultUsuarioSetti))
$Privileg = $rowUsuario['privilegios'];
  switch ($Privileg) {
		    case "superadmin":
				        $nquery = "SELECT nombre_build FROM buil_builds WHERE nombre_build LIKE '%".$_GET['query']."%' LIMIT 20";
		        break;
		    case "admin":					 
								$nquery="select buil.nombre_build FROM asig_asignada asig
								LEFT JOIN buil_builds buil ON buil.id = asig.id_issue
								WHERE asig.usuario = '".$_SESSION['usuario_session']."' AND nombre_build LIKE '%".$_GET['query']."%' LIMIT 20";			 		
		        break;
		    case "empleado":					
								$nquery="select buil.nombre_build FROM asig_asignada asig
								LEFT JOIN buil_builds buil ON buil.id = asig.id_issue
								WHERE asig.usuario = '".$_SESSION['usuario_session']."' AND nombre_build LIKE '%".$_GET['query']."%' LIMIT 20";			 		
		        break;
		    case "invitado":
		        break;        
	   }
	   
$nquery = "SELECT nombre_build FROM buil_builds WHERE nombre_build LIKE '%".$_GET['query']."%' LIMIT 20";
$resultset = mysqli_query($conexion, $nquery) or die("database error:". mysqli_error($conexion));
$json = array();
while( $rows = mysqli_fetch_assoc($resultset) ) {
$json[] = substr($rows["nombre_build"],0,70);
}
echo json_encode($json);
?>