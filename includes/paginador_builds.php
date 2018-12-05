<?php

	//echo "<script>alert('".$_POST['filtrado']."')</script>";

$filtramiento = $_POST['filtrado'];
switch ($filtramiento) {
	case "id_proyecto": $optionSeleccionada = '<option value="'.$_POST['filtrado'].'" selected>'.$TXT_FORM_id_proyecto.'</option>';break;
	case "prioridad": $optionSeleccionada = '<option value="'.$_POST['filtrado'].'" selected>'.$TXT_FORM_prioridad.'</option>';break;
	case "fecha_creacion": $optionSeleccionada = '<option value="'.$_POST['filtrado'].'" selected>'.$TXT_FORM_fecha_creacion.'</option>';break;
	case "nombre_build": $optionSeleccionada = '<option value="'.$_POST['filtrado'].'" selected>'.$TXT_FORM_nombre_build.'</option>';break;
	case "1600000": $optionSeleccionada = '<option value="'.$_POST['filtrado'].'" selected>'.$TXT_FORM_Aplazada.'</option>';break;
	case "1600001": $optionSeleccionada = '<option value="'.$_POST['filtrado'].'" selected>'.$TXT_FORM_EnSupervision.'</option>';break;
	case "1600002": $optionSeleccionada = '<option value="'.$_POST['filtrado'].'" selected>'.$TXT_FORM_Dudasinternas.'</option>';break;
	case "1600003": $optionSeleccionada = '<option value="'.$_POST['filtrado'].'" selected>'.$TXT_FORM_Consultacliente.'</option>';break;
	case "1600004": $optionSeleccionada = '<option value="'.$_POST['filtrado'].'" selected>'.$TXT_FORM_Completada.'</option>';break;
	case "1600005": $optionSeleccionada = '<option value="'.$_POST['filtrado'].'" selected>'.$TXT_FORM_Detenida.'</option>';break;
	case "1500002": $optionSeleccionada = '<option value="'.$_POST['filtrado'].'" selected>'.$TXT_FORM_endesarrollo.'</option>';break;
	case "1500001": $optionSeleccionada = '<option value="'.$_POST['filtrado'].'" selected>'.$TXT_FORM_test.'</option>';break;
	case "1500005": $optionSeleccionada = '<option value="'.$_POST['filtrado'].'" selected>'.$TXT_FORM_resuelta.'</option>';break;
	case "1500003": $optionSeleccionada = '<option value="'.$_POST['filtrado'].'" selected>'.$TXT_FORM_reabierta.'</option>';break;
	case "1500000": $optionSeleccionada = '<option value="'.$_POST['filtrado'].'" selected>'.$TXT_FORM_abierta.'</option>';break;
	case "1500004": $optionSeleccionada = '<option value="'.$_POST['filtrado'].'" selected>'.$TXT_FORM_cerrada.'</option>';break;
	case "1500006": $optionSeleccionada = '<option value="'.$_POST['filtrado'].'" selected>'.$TXT_FORM_encurso.'</option>';break;
	
	case "$perfil_id_usuario": $optionSeleccionada = '<option value="'.$_POST['filtrado'].'" selected>'.$TXT_FORM_asignadasAmi.'</option>';break;
}


	$query=mysqli_query($conexion,"select count(id) from ".$tabla."");
	$row = mysqli_fetch_row($query);
	$rows = $row[0];
	$page_rows = 55; 
	$last = ceil($rows/$page_rows); 
	if($last < 1){$last = 1;} 
	$pagenum = 1; 
	if(isset($_GET['pn'])){$pagenum = preg_replace('#[^0-9]#', '', $_GET['pn']);}
	if ($pagenum < 1) {$pagenum = 1;} 
	else if ($pagenum > $last) {$pagenum = $last;} 
	$limit = 'LIMIT ' .($pagenum - 1) * $page_rows .',' .$page_rows;



//**
//
// FILTRADO Y CASOS ESPECÍFICOS DE USUARIOS CON PRIVILEGIOS
//////

	  switch ($nivelPrivilegiosUsuario) {
		    case "superadmin":
				 if(($_POST['filtrado']=='fecha_creacion') OR ($_POST['filtrado']=='nombre_build')){ 	
				 	$nquery=mysqli_query($conexion,"select * from ".$tabla." order by ".$_POST['filtrado']." DESC  ".$limit."");
				 	}   
				elseif(
					($_POST['filtrado']=='1600006') OR ($_POST['filtrado']=='1600000') OR ($_POST['filtrado']=='1600001') OR ($_POST['filtrado']=='1600002') OR ($_POST['filtrado']=='1600003') OR ($_POST['filtrado']=='1600004') OR ($_POST['filtrado']=='1600005')

				){ 
				 	$nquery=mysqli_query($conexion,"select * from ".$tabla." WHERE estatus = '".$_POST['filtrado']."' order by fecha_creacion DESC ".$limit." ");
				 	}  
				elseif(($_POST['filtrado']=='1500000') OR ($_POST['filtrado']=='1500001') OR ($_POST['filtrado']=='1500002') OR ($_POST['filtrado']=='1500003') OR ($_POST['filtrado']=='1500004') OR ($_POST['filtrado']=='1500005'))
				{ 	
				 	$nquery=mysqli_query($conexion,"select * from ".$tabla." WHERE status = '".$_POST['filtrado']."'  ".$limit." ");
				 	} 
				elseif($_POST['filtrado']==$perfil_id_usuario){ 	
				 	$nquery=mysqli_query($conexion,"select * FROM asig_asignada asig
									LEFT JOIN buil_builds buil ON buil.id = asig.id_issue
									WHERE asig.usuario = '".$_POST['filtrado']."' order by buil.fecha_creacion DESC  ".$limit." ");
				 	} 
				 	else {
							 if(isset($_POST['valor_busqueda'])){	
							 	echo '<script>alert('.$_POST['valor_busqueda'].');</script>';
							        $quer_saniti = $conexion->escape_string($_POST['valor_busqueda']);
											$nquery=mysqli_query($conexion,"select * from ".$tabla." WHERE nombre_build LIKE '%".$quer_saniti."%' OR id LIKE '%".$quer_saniti."%'");			 		 
							 } else {				 		
											$nquery=mysqli_query($conexion,"select * from ".$tabla." order by fecha_creacion DESC  ".$limit."");
							 }				    
				    }
		        break;
		    case "admin":
				 if(($_POST['filtrado']=='fecha_creacion') OR ($_POST['filtrado']=='nombre_build')){ 	
					$nquery=mysqli_query($conexion,"select 
					proy.id AS idproyecto,
					proy.coordina AS coordinap,
					buil.coordina AS coordinab,
					buil.id AS builid
					FROM buil_builds buil 
					INNER JOIN proy_proyectos proy ON proy.coordina=buil.coordina
					WHERE
					proy.coordina = '".$perfil_id_usuario."' AND
					buil.id_proyecto = proy.id 
					order by '".$_POST['filtrado']."' DESC  ".$limit."
					");
				 	}   
				elseif(($_POST['filtrado']=='1600006') OR ($_POST['filtrado']=='1600000') OR ($_POST['filtrado']=='1600001') OR ($_POST['filtrado']=='1600002') OR ($_POST['filtrado']=='1600003') OR ($_POST['filtrado']=='1600004') OR ($_POST['filtrado']=='1600005')){ 	
					$nquery=mysqli_query($conexion,"select 
					proy.id AS idproyecto,
					proy.coordina AS coordinap,
					buil.coordina AS coordinab,
					buil.id AS builid
					FROM buil_builds buil 
					INNER JOIN proy_proyectos proy ON proy.coordina=buil.coordina
					WHERE
					proy.coordina = '".$perfil_id_usuario."' AND
					buil.id_proyecto = proy.id AND
					estatus = '".$_POST['filtrado']."'
					order by buil.fecha_creacion DESC  ".$limit."
					");
				 	}  
				elseif(($_POST['filtrado']=='1500000') OR ($_POST['filtrado']=='1500001') OR ($_POST['filtrado']=='1500002') OR ($_POST['filtrado']=='1500003') OR ($_POST['filtrado']=='1500004') OR ($_POST['filtrado']=='1500005')){ 	
					$nquery=mysqli_query($conexion,"select 
					proy.id AS idproyecto,
					proy.coordina AS coordinap,
					buil.coordina AS coordinab,
					buil.id AS builid
					FROM buil_builds buil 
					INNER JOIN proy_proyectos proy ON proy.coordina=buil.coordina
					WHERE
					proy.coordina = '".$perfil_id_usuario."' AND
					buil.id_proyecto = proy.id AND
					status = '".$_POST['filtrado']."'
					order by buil.fecha_creacion DESC  ".$limit."
					");
				 	} 
				elseif($_POST['filtrado']==$perfil_id_usuario){ 	
				 	$nquery=mysqli_query($conexion,"select * FROM asig_asignada asig
									LEFT JOIN buil_builds buil ON buil.id = asig.id_issue
									WHERE asig.usuario = '".$_POST['filtrado']."' order by buil.fecha_creacion DESC  ".$limit." ");
				 	} 
				 	else {
							 if($_GET['valor_busqueda']){															 
						 	    $nquery=mysqli_query($conexion,"select * FROM asig_asignada asig
									LEFT JOIN buil_builds buil ON buil.id = asig.id_issue
									 WHERE nombre_build  LIKE '%".$quer_saniti."%' OR id LIKE '%".$quer_saniti."%'");	
							 } else {				 		
				 					$nquery=mysqli_query($conexion,"select * FROM asig_asignada asig
									LEFT JOIN buil_builds buil ON buil.id = asig.id_issue
									WHERE asig.usuario = '".$_POST['filtrado']."' order by buil.fecha_creacion DESC  ".$limit." ");
							 }
				    }
		        break;
		    case "empleado":					
					if(($_POST['filtrado']=='fecha_creacion') OR ($_POST['filtrado']=='nombre_build')){ 	
				 	$nquery=mysqli_query($conexion,"select * FROM asig_asignada asig
					LEFT JOIN buil_builds buil ON buil.id = asig.id_issue
					WHERE asig.usuario = '".$perfil_id_usuario."' AND estado = '".$_POST['filtrado']."' order by ".$_POST['filtrado']." DESC  ".$limit."
					");
				 	}   
				elseif(($_POST['filtrado']=='1600006') OR ($_POST['filtrado']=='1600000') OR ($_POST['filtrado']=='1600001') OR ($_POST['filtrado']=='1600002') OR ($_POST['filtrado']=='1600003') OR ($_POST['filtrado']=='1600004') OR ($_POST['filtrado']=='1600005')){ 	
				 	$nquery=mysqli_query($conexion,"select * FROM asig_asignada asig
					LEFT JOIN buil_builds buil ON buil.id = asig.id_issue
					WHERE asig.usuario = '".$perfil_id_usuario."' AND estatus = '".$_POST['filtrado']."' order by buil.fecha_creacion DESC  ".$limit."
					");
				 	}  
				elseif(($_POST['filtrado']=='1500000') OR ($_POST['filtrado']=='1500001') OR ($_POST['filtrado']=='1500002') OR ($_POST['filtrado']=='1500003') OR ($_POST['filtrado']=='1500004') OR ($_POST['filtrado']=='1500005')){ 	
				 	$nquery=mysqli_query($conexion,"select * FROM asig_asignada asig
					LEFT JOIN buil_builds buil ON buil.id = asig.id_issue
					WHERE asig.usuario = '".$perfil_id_usuario."' AND status = '".$_POST['filtrado']."' order by buil.fecha_creacion DESC  ".$limit."
					");
				 	} 
				elseif($_POST['filtrado']==$perfil_id_usuario){ 	
					$nquery=mysqli_query($conexion,"select * FROM asig_asignada asig
					LEFT JOIN buil_builds buil ON buil.id = asig.id_issue
					WHERE asig.usuario = '".$perfil_id_usuario."' order by buil.fecha_creacion DESC  ".$limit."
					");
				 	} 
				else {
					if($_GET['valor_busqueda']){															 
								$nquery=mysqli_query($conexion,"select * FROM asig_asignada asig
								LEFT JOIN buil_builds buil ON buil.id = asig.id_issue
								 WHERE nombre_build LIKE '%".$quer_saniti."%' OR id LIKE '%".$quer_saniti."%'");	
							 } else {				 		
								$nquery=mysqli_query($conexion,"select * FROM asig_asignada asig
								LEFT JOIN buil_builds buil ON buil.id = asig.id_issue
								WHERE asig.usuario = '".$perfil_id_usuario."' order by buil.fecha_creacion DESC  ".$limit."
								");
					  	 }				 		
				   }
		        break;
		    case "invitado":
		        echo "i es un pastel";
		        break;        
	   }


 
 	

 
	$paginationCtrles = '';
 
if($last != 1){
 
	if ($pagenum > 1) {
        $previous = $pagenum - 1;
		$paginationCtrles .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$previous.'&ordena='.$_GET['ordena'].'&ordene='.$_GET['ordene'].'&valor_busqueda='.$_GET['valor_busqueda'].'" ><button type="button" class="btn "><span class="fa fa-arrow-left"></span></button></a>';
 
		for($i = $pagenum-4; $i < $pagenum; $i++){
			if($i > 0){
		 $paginationCtrles .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$i.'&ordena='.$_GET['ordena'].'&ordene='.$_GET['ordene'].'&valor_busqueda='.$_GET['valor_busqueda'].'"><button type="button" class="btn btn-secondary">'.$i.'</button></a> &nbsp; ';
			}
	    }
    }
 
	$paginationCtrles .= ''.$pagenum.' &nbsp; ';
 
	for($i = $pagenum+1; $i <= $last; $i++){
	$paginationCtrles .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$i.'&ordena='.$_GET['ordena'].'&ordene='.$_GET['ordene'].'&valor_busqueda='.$_GET['valor_busqueda'].'"><button type="button" class="btn btn-secondary">'.$i.'</button></a> &nbsp; ';
		if($i >= $pagenum+4){
			break;
		}
	}
 
    if ($pagenum != $last) {
        $next = $pagenum + 1;
       $paginationCtrles .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$next.'&ordena='.$_GET['ordena'].'&ordene='.$_GET['ordene'].'&valor_busqueda='.$_GET['valor_busqueda'].'" ><button type="button" class="btn "><span class="fa fa-arrow-right"></span></button></a>';
    }
}
 


?>