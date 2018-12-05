<?php session_start();
      require('lib/configuracion.php');
      
      $titulo_seccion1 =$TEXT_Gestionar_proyectos_de_pruebas;
      $titulo_seccion =$TEXT_EditarBuilds;
      $titulo_seccion2 =$TEXT_ListaBuilds;
      $tabla='buil_builds';
      require('lib/paginador.php');
        if(($_GET['getId']=='') || ($_GET['getId']=='000000')){header('Location: '.$path.'/index');} else {$getId=$_GET['getId'];$sqlGeneral = "SELECT * FROM proy_proyectos WHERE id = ".$_GET['getId']." ";}
        if(!$resultGeneral = mysqli_query($conexion, $sqlGeneral)) die();
        if($rowGeneral = mysqli_fetch_array($resultGeneral))
        { 
        include('lib/funciones.php');
        $urlpagina1 = '<li class="breadcrumb-item"><a href="'.$path.'/'.$lengua.'/'.$getId.'/gestion-proyectos">'.$titulo_seccion1.'</a></li>';
        $urlpagina2 = '<li class="breadcrumb-item"><a href="'.$path.'/'.$lengua.'/'.$getId.'/v/builds">'.$titulo_seccion2.'</a></li>';
        $urlpagina3 = '<li class="breadcrumb-item active">'.$titulo_seccion.'</li>';

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
<body>
	<div class="container-fluid" id="wrapper">
		<div class="row">
			<?php include('includes/sidebar.php');?>
			<main class="col-xs-12 col-sm-8 col-lg-8 col-xl-9 pt-3 pl-4 ml-auto">
				<?php include('includes/header.php');?>
				<section class="row">
					<div class="col-sm-12">
						<section class="row">
								<!--breadcrumb-->
						<div class="col-md-12 col-lg-12"><?php include('breadcrumb.php');?></div>

							<div class="col-md-12 col-lg-12">
<div class="card mb-4">
									<div class="card-block">
										<h3 class="card-title"><?=$TEXT_EditarBuilds;?></h3>
										<div class="dropdown card-title-btn-container">
											<button class="btn btn-sm btn-subtle dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><em class="fa fa-cog"></em></button>
											<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="#"><em class="fa fa-search mr-1"></em> More info</a>
												<a class="dropdown-item" href="#"><em class="fa fa-thumb-tack mr-1"></em> Pin Window</a>
												<a class="dropdown-item" href="#"><em class="fa fa-remove mr-1"></em> Close Window</a></div>
										</div>
										<h6 class="card-subtitle mb-2 text-muted"><?=$TXT_AquiPuedeEditarBuilds;?></h6>
										
			<form action="" method="POST">		
					<div class="form-group">
						<div class="col-12 no-padding text-right">
		        <input type="submit" class="btn btn-primary btn-md" name="guardar" value="<?=$TXT_Modificar;?>" />
					  </div>
					</div>								
			<?php 
			echo '<div class="row">';
				echo '<div class="col-md-12 col-lg-12">';
				recuperarArrayBuilds($path,$lengua,$getId,$recup,$valor,$tabla);
				echo '</div>';
			echo '</div>';
			?>	
										
			</form>				
			<?php guardarMasivoBuild($path,$lengua,$getId);?>					
										

									</div>
</div>
							</div>
						</section>
						<section class="row">
							<div class="col-12 mt-1 mb-4"><?=$TEXT_Developed_by;?> <a target="_blank" href="<?=$rowSettings['webdeveloper'];?>"><?=$rowSettings['developer'];?></a></div>
						</section>
					</div>
				</section>
			</main>
		</div>
	</div>
<?php } mysqli_close($conexion);?>
    <script src="<?=$pathRecursos;?>/js/jquery-3.2.1.min.js"></script>
    <script src="<?=$pathRecursos;?>/js/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="<?=$pathRecursos;?>/js/jquery-ui.min.js"></script>
		<script>
		 $( function() {
		    $( document ).tooltip({
		      track: true
		    });
		  } );
		</script>
<script src="<?=$pathRecursos;?>/js/sweetalert.min.js"></script>
    <script src="<?=$pathRecursos;?>/js/jquery.cookie.js"></script>
    <script src="<?=$pathRecursos;?>/js/menupersistente.js"></script>
    <script src="<?=$pathRecursos;?>/js/bootstrap-datepicker.js"></script>
    <script src="<?=$pathRecursos;?>/js/custom.js"></script>
    <script src="<?=$pathRecursos;?>/js/jquery.validate.min.js"></script>
    
        <script type="text/javascript">
$(document).ready(function(){
 
	//Checkbox
	$("input[name=checktodos]").change(function(){
		$('input[type=checkbox]').each( function() {			
			if($("input[name=checktodos]:checked").length == 1){
				this.checked = true;
			} else {
				this.checked = false;
			}
		});
	});
}); 

</script>
		<script>
		$(function(){  

		    $(document).ready(function(){ 
				$('.insidecollapse .collapse').on('show.bs.collapse',function(){
				$('.insidecollapse .collapse.show').collapse('toggle');
				});
			});

		});
		</script>
		
		<link rel="stylesheet" href="<?=$pathRecursos;?>/css/colorbox.css" />
		<script src="<?=$pathRecursos;?>/js/jquery.colorbox-min.js"></script>
		<script>
			$(document).ready(function(){
				$(".iframe").colorbox({iframe:true, width:"80%", height:"80%",overlayClose:false,onClosed:reloadPage});
				$(".iframeb").colorbox({iframe:true, width:"30%", height:"20%",overlayClose:false,onClosed:reloadPage});
			});
										
			
			function reloadPage() {
    location.reload(true); 
}

		</script>
		<script>
		$(document).ready(function () {

    $('#formualta').validate({ // initialize the plugin
        rules: {
            nombre_proyecto: {
                required: true
               
            },
            descripcion_proyecto: {
                required: true,
                minlength: 5
            }
        }
    });

});
</script>

    <script src="<?=$pathRecursos;?>/js/tether.min.js" language="javascript"></script>
	</body>
</html>

