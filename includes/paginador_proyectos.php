<?php

 
	$query=mysqli_query($conexion,"select count(id) from ".$tabla."");
	$row = mysqli_fetch_row($query);
	$rows = $row[0];
	$page_rows = 4; 
	$last = ceil($rows/$page_rows); 
	if($last < 1){$last = 1;} 
	$pagenum = 1; 
	if(isset($_GET['pn'])){$pagenum = preg_replace('#[^0-9]#', '', $_GET['pn']);}
	if ($pagenum < 1) {$pagenum = 1;} 
	else if ($pagenum > $last) {$pagenum = $last;} 
	$limit = 'LIMIT ' .($pagenum - 1) * $page_rows .',' .$page_rows;
 if($_GET['accion']=='v'){$nquery=mysqli_query($conexion,"select * from ".$tabla." WHERE id_proyecto = ".$_GET['getId']." ".$limit." ");}
 if($_GET['accion']=='p'){$nquery=mysqli_query($conexion,"select * from ".$tabla." WHERE id_build = ".$_GET['getId']."  ".$limit." ");}
 if($_GET['ordena']){$nquery=mysqli_query($conexion,"select * from ".$tabla." order by id_proyecto ".$_GET['ordena']."  ".$limit." ");} 
 if($_GET['ordene']){$nquery=mysqli_query($conexion,"select * from ".$tabla." order by estado ".$_GET['ordene']."  ".$limit." ");}   
 else {$nquery=mysqli_query($conexion,"select * from ".$tabla." order by fecha_creacion DESC  ".$limit." ");}
 if($_GET['valor_busqueda']){	
       $quer_saniti = $conexion->escape_string($_GET['valor_busqueda']);
			 $nquery=mysqli_query($conexion,"		 
			 select * from buil_builds WHERE nombre_build LIKE '%".$quer_saniti."%' OR id LIKE '%".$quer_saniti."%'");
 } 
 
	$paginationCtrles = 'eee';
 
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