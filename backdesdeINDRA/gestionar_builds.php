<?php session_start();
      require('lib/configuracion.php');
      $titulo_seccion =$TEXT_Gestionar_builds;
      $tabla='buil_builds';
      $titulo_seccion1 =$TEXT_Gestionar_proyectos_de_pruebas;
      require('lib/paginador.php');
	    $token = 'tokl77832489fdf32463298dd67386432fd9864638962398';
?><!DOCTYPE html>
<html lang="<?=$lengua;?>">
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="<?=$rowSettings['metas'];?>">
	<meta name="author" content="<?=$rowSettings['autor'];?>">
	<link rel="icon" href="<?=$pathRecursos;?>/favicon.ico">
	<title><?=$_GET['getId'];?><?=$TEXT_Gestionar_builds;?> - TestBuild (<?=$rowSettings['version'];?>) - <?=$rowGeneral['nombre_build'];?></title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="<?=$pathRecursos;?>/css/sweetalert.css">
    <link rel="stylesheet" href="<?=$pathRecursos;?>/css/jquery-ui.css">
    <link href="<?=$pathRecursos;?>/css/font-awesome.css" rel="stylesheet">
    <link href="<?=$pathRecursos;?>/css/style.css" rel="stylesheet">
</head>
<body>
<?php         if(($_GET['getId']=='') || ($_GET['getId']=='000000')){header('Location: '.$path.'/index');} else {$getId=$_GET['getId'];$sqlGeneral = "SELECT * FROM ".$tabla." WHERE id_proyecto = '".$_GET['getId']."' ";}
        $resultGeneral = mysqli_query($conexion, $sqlGeneral);
        //if(!$resultGeneral = mysqli_query($conexion, $sqlGeneral)) die();
        if($rowGeneral = mysqli_fetch_array($resultGeneral))
        { 
        	
        $sqlProyecto = "SELECT * FROM proy_proyectos WHERE id = ".$_GET['getId']." ";
        if(!$resultProyecto = mysqli_query($conexion, $sqlProyecto)) die();
        if($rowProyecto = mysqli_fetch_array($resultProyecto))
        {        	
        include('lib/funciones.php');
        $urlpagina1 = '<li class="breadcrumb-item"><a href="'.$path.'/'.$lengua.'/'.$getId.'/gestion-proyectos">'.$titulo_seccion1.'</a></li>';
        $urlpagina2 = '<li class="breadcrumb-item active">'.$titulo_seccion.'</li>';?>	
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
						<div class="col-md-12 col-lg-8">
<div class="card mb-4">
									<div class="card-block">
										<h3 class="card-title"><?=$rowProyecto['nombre_proyecto'];?></h3>
															<div class="dropdown card-title-btn-container">
																<button class="btn btn-sm btn-subtle dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><em class="fa fa-cog"></em></button>
																<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
																</div>
															</div>
										<h6 class="card-subtitle mb-2 text-muted"><?=$TEXT_TodosLosBuiilds;?></h6>
										<div class="table-responsive">
											<form action="" id="forumlario" id="forumlario" method="POST">
												<input type="hidden" name="identiff" value="<?=$getId;?>">
											<table class="table table-striped">
												<thead>
													<tr>
														<th style="width:5%;">		
																				<input type="checkbox" name="checktodos" id="customCheck555">
																</th>
														<th style="width:10%;">ID</th>
														<th style="width:75%;"><?=$TEXT_TNombredelplan;?></th>
														<th   style="width:10%;"><?=$TEXT_Acciones;?></th>
													</tr>
												</thead>
												<tbody>					
													<?php	
													//BUCLE TABLA BUILDS
													  $ii=0;
														while($crowd = mysqli_fetch_array($nquery)){
															$iii=$ii++;
															
				 
				bucleTablaBuilds($crowd,$path,$lengua,$tabla);									        
									 
															 
															  
														} 
														?>											
                          <tr>
                          	
                          	<td colspan="2">
                          	<input class="btn btn-sm btn-subtle dropdown-item" name="eliminacionmasiva" type="submit" value="borrar seleccionados" /></div>                          	
                          	</td>
                          	<td>
                          	<input class="btn btn-sm btn-subtle dropdown-item" name="modificacionmasiva" id="modmass" type="submit" value="editar seleccionados" /></div>
                          	</td>
                          	<td>
                          			<input class="btn btn-sm btn-subtle dropdown-item" name="activacionmasiva" id="actmass" type="submit" value="activar/desactivar" /></div>
                          	</td>
                          	<td></td>
                          	
                          	</tr>
												</tbody>
											</table>
											</form>
										<?php borrarMasivoProyecto($path,$lengua,$getId,$checkbox,$value,$tabla);?>
										<?php editarMasivoBuilds($path,$lengua,$getId,$campo,$valor,$tabla);?>
										<?php activarDesactivarmasivo($path,$lengua,$getId,$campo,$valor,$tabla);?>
									  <?php eliminarYvolver();?>
						</div>
				</div>
   </div>								
								<div class="card mb-6">
										<div class="btn-group">								
												<div id="pagination_controls"><?php echo $paginationCtrls; ?></div>				
										</div>	
								</div>
							</div>
							<div class="col-md-12 col-lg-4">
<div class="card mb-4">
									<div class="card-block">
										<h3 class="card-title"><?=$TEXT_AniadirBuilaesteProyectos;?></h3>
										<div class="dropdown card-title-btn-container">
											<button class="btn btn-sm btn-subtle dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><em class="fa fa-cog"></em></button>
											<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="#"><em class="fa fa-search mr-1"></em> More info</a>
												<a class="dropdown-item" href="#"><em class="fa fa-thumb-tack mr-1"></em> Pin Window</a>
												<a class="dropdown-item" href="#"><em class="fa fa-remove mr-1"></em> Close Window</a></div>
										</div>
										<h6 class="card-subtitle mb-2 text-muted"><?=$TXT_AquiPuedeAniadirNUevasBuildsProyectosDePruebas;?></h6>
										




<form class="form-horizontal" id="formualta" action="" method="post">
												<input value="<?=$getId;?>" name="getId" type="hidden">
												<input value="<?=date();?>" name="fecha_build" type="hidden">
											<fieldset>
												<!-- Name input-->
												<div class="form-group">
													<label class="col-12 control-label no-padding" for="name"><?=$TXT_Nombredelabuild;?></label>
													<div class="col-12 no-padding">
														<input id="nombre_proyecto" name="nombre_build" required  type="text" placeholder="<?=$TXT_NombredelplandepruebasBuild;?>" class="form-control">
													</div>
												</div>
												<!-- Message body -->
												<div class="form-group">
													<label class="col-12 control-label no-padding" for="message"><?=$TXT_DescripcionBuild;?></label>
													<div class="col-12 no-padding">
														<textarea class="form-control" id="descripcion_build" required name="descripcion_build" placeholder="<?=$TXT_DescripciondelBuildplandepruebas;?>" rows="5"></textarea>
													</div>
												</div>
												
												<!-- Form actions -->
												<div class="form-group">
													<div class="col-12  no-padding">
														<input type="submit" name="botonguardarbuild" class="btn btn-lg btn-primary" value="<?=$TXT_botonCrearBuild;?>" />
												
													</div>
												</div>
											</fieldset>
</form>




										<?php guardarBuild($path,$lengua);?>

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
<?php } } else {
	
	          //echo '<script type="text/javascript">';
						//echo 'setTimeout(function () { swal({   title: "PROYECTO VACIO",   text: "el proyecto no tiene builds disponibles",   timer: 3000,   showConfirmButton: false });  ';   
						//echo '}, 100);</script>';
						//echo '<meta http-equiv="Refresh" content="2;url='.$path.'/'.$lengua.'/'.$getId.'/gestion-proyectos">';  																								 
	
	

	echo '<div class="row">
		<div class="col-md-12">

			
			<div class="modal fade" id="modal-container-857358" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="myModalLabel">
								PROYECTO VAC&Iacute;O
							</h5> 
						</div>
						<div class="modal-body"><p>Desea crear ahora una build para este proyecto?</p>
<form class="form-horizontal" id="formualta" action="'.$path.'/'.$lengua.'/'.$getId.'/'.$token.'/acciones" method="post">
												<input value="'.$getId.'" name="getId" type="hidden">
												<input value="'.date().'" name="fecha_build" type="hidden">
											<fieldset>
												<!-- Name input-->
												<div class="form-group">
													<label class="col-12 control-label no-padding" for="name">'.$TXT_Nombredelabuild.'</label>
													<div class="col-12 no-padding">
														<input id="nombre_proyecto" name="nombre_build" required  type="text" placeholder="'.$TXT_NombredelplandepruebasBuild.'" class="form-control">
													</div>
												</div>
												<!-- Message body -->
												<div class="form-group">
													<label class="col-12 control-label no-padding" for="message">'.$TXT_DescripcionBuild.'></label>
													<div class="col-12 no-padding">
														<textarea class="form-control" id="descripcion_build" required name="descripcion_build" placeholder="'.$TXT_DescripciondelBuildplandepruebas.'" rows="5"></textarea>
													</div>
												</div>
												
												<!-- Form actions -->
												<div class="form-group">
													<div class="col-12  no-padding">
														<input type="submit" name="botonguardarbuild" class="btn btn-lg btn-primary" value="'.$TXT_botonCrearBuild.'" />
												
														<a href="'.$path.'/'.$lengua.'/'.$getId.'/gestion-proyectos"><button type="button" name="cancelar" class="btn btn-lg btn-secondary">'.$TXT_NoCancelarf.'</button></a>
													</div>
												</div>
											</fieldset>
</form></div>

					</div>
				</div>				
			</div>			
		</div>
	</div>';
	
	
	
	
	} mysqli_close($conexion);?>
		

	
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
    <script src="<?=$pathRecursos;?>/js/chart.min.js"></script>
    <script src="<?=$pathRecursos;?>/js/chart-data.js"></script>
    <script src="<?=$pathRecursos;?>/js/easypiechart.js"></script>
    <script src="<?=$pathRecursos;?>/js/easypiechart-data.js"></script>
    <script src="<?=$pathRecursos;?>/js/bootstrap-datepicker.js"></script>
    <script src="<?=$pathRecursos;?>/js/custom.js"></script>
    <script src="<?=$pathRecursos;?>/js/jquery.validate.min.js"></script>
<script type="text/javascript">
$(document).ready(function () {
    $('#modal-container-857358').modal({show:true,backdrop: 'static', keyboard: false});
});
</script>

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
										
$(document).ready(function(){
    $(".chpic").colorbox({width:"80%", height:"80%", iframe:true, 
        onClosed:function(){ location.reload(true); } });
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

