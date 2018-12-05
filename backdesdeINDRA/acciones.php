<?php session_start();
      require('lib/configuracion.php');
      $titulo_seccion1 =$TEXT_Gestionar_proyectos_de_pruebas;
      $titulo_seccion =$TEXT_EditarProyectosPrueba;
      if($_POST['botonguardarbuild']) {
      $tabla='proy_proyectos';}
      if($_POST['botonguardarsuite']) {
      $tabla='buil_builds';
      }
      	
      require('lib/paginador.php');
        if(($_GET['getId']=='') || ($_GET['getId']=='000000')){header('Location: '.$path.'/index');} else {$getId=$_GET['getId'];$sqlGeneral = "SELECT * FROM ".$tabla." WHERE id = ".$_POST['getId']." ";}
        if(!$resultGeneral = mysqli_query($conexion, $sqlGeneral)) die();
        if($rowGeneral = mysqli_fetch_array($resultGeneral))
        { 
        include('lib/funciones.php');
        $urlpagina1 = '<li class="breadcrumb-item"><a href="'.$path.'/'.$lengua.'/'.$getId.'/gestion-proyectos">'.$titulo_seccion1.'</a></li>';
        $urlpagina2 = '<li class="breadcrumb-item active">'.$titulo_seccion.'</li>';
?><!DOCTYPE html>
<html lang="<?=$lengua;?>">
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="<?=$rowSettings['metas'];?>">
	<meta name="author" content="<?=$rowSettings['autor'];?>">
	<link rel="icon" href="<?=$pathRecursos;?>/favicon.ico">
	<title><?=$TEXT_Gestionar_proyectos_de_pruebas;?> - TestBuild (<?=$rowSettings['version'];?>) - <?=$rowGeneral['nombre_proyecto'];?></title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="<?=$pathRecursos;?>/css/sweetalert.css">
    <link rel="stylesheet" href="<?=$pathRecursos;?>/css/jquery-ui.css">
    <link href="<?=$pathRecursos;?>/css/font-awesome.css" rel="stylesheet">
    <link href="<?=$pathRecursos;?>/css/style.css" rel="stylesheet">

</head>
<body><?php

  if($_GET['accion']=='b'){
  	
  	
  	borrado($path,$lengua);
  	eliminarYvolver($path,$lengua,$getId,$getId);
  	
  	
  	} 
  else {
  }

if($_POST['botonguardarbuild']) {
	  guardarNuevaBuild($path,$lengua,$getId,$nombre_build,$descripcion_build,$fecha_build);
	  }
if($_POST['botonguardarsuite']) { 
	  guardarNuevaSuite($path,$lengua,$getId,$idBuild,$nombre_suite,$descripcion_suite,$fecha_suite);
	  }

?>

<?php } mysqli_close($conexion);?>


</body>
</html>