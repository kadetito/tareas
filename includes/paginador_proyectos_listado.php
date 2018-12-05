<?php

 
	$query=mysqli_query($conexion,"select count(id) from ".$tablapr."");
	$row = mysqli_fetch_row($query);
	$rows = $row[0];
	$page_rows = 12; 
	$last = ceil($rows/$page_rows); 
	if($last < 1){$last = 1;} 
	$pagenum = 1; 
	if(isset($_GET['pn'])){$pagenum = preg_replace('#[^0-9]#', '', $_GET['pn']);}
	if ($pagenum < 1) {$pagenum = 1;} 
	else if ($pagenum > $last) {$pagenum = $last;} 
	$limit = 'LIMIT ' .($pagenum - 1) * $page_rows .',' .$page_rows;


 	$nprquery=mysqli_query($conexion,"select * from ".$tablapr." order by fecha_creacion DESC  ".$limit." ");



	$paginationCtrlesProyectos = '';
 
if($last != 1){
 
	if ($pagenum > 1) {
        $previous = $pagenum - 1;
		$paginationCtrlesProyectos .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$previous.'" ><button type="button" class="btn "><span class="fa fa-arrow-left"></span></button></a>';
 
		for($i = $pagenum-4; $i < $pagenum; $i++){
			if($i > 0){
		 $paginationCtrlesProyectos .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$i.'"><button type="button" class="btn btn-secondary">'.$i.'</button></a> &nbsp; ';
			}
	    }
    }
 
	$paginationCtrlesProyectos .= ''.$pagenum.' &nbsp; ';
 
	for($i = $pagenum+1; $i <= $last; $i++){
	$paginationCtrlesProyectos .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$i.'"><button type="button" class="btn btn-secondary">'.$i.'</button></a> &nbsp; ';
		if($i >= $pagenum+4){
			break;
		}
	}
 
    if ($pagenum != $last) {
        $next = $pagenum + 1;
       $paginationCtrlesProyectos .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$next.'" ><button type="button" class="btn "><span class="fa fa-arrow-right"></span></button></a>';
    }
}
 


?>