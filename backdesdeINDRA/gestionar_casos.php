<?php session_start();
      require('lib/configuracion.php');
      $titulo_seccion3 =$TEXT_Gestionar_Suites;
      $tabla='cspr_casosprueba';
      $titulo_seccion1 =$TEXT_Gestionar_proyectos_de_pruebas;
      $titulo_seccion2 =$TEXT_Gestionar_builds;
      $titulo_seccion =$TEXT_GestionarCasosPrueba;
      require('lib/paginador.php');
	  $token = 'tokl77832489fdf3246329978yjghy6y56398';
	  
?><!DOCTYPE html>
<html lang="<?=$lengua;?>">
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="<?=$rowSettings['metas'];?>">
	<meta name="author" content="<?=$rowSettings['autor'];?>">
	<link rel="icon" href="<?=$pathRecursos;?>/favicon.ico">
	<title><?=$_GET['getId'];?><?=$titulo_seccion;?> - TestBuild (<?=$rowSettings['version'];?>) - <?=$rowGeneral['nombre_build'];?></title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="<?=$pathRecursos;?>/css/sweetalert.css">
    <link rel="stylesheet" href="<?=$pathRecursos;?>/css/jquery-ui.css">
    <link href="<?=$pathRecursos;?>/css/font-awesome.css" rel="stylesheet">
    <link href="<?=$pathRecursos;?>/css/style.css" rel="stylesheet">

</head>
<body>
<?php         if(($_GET['getId']=='') || ($_GET['getId']=='000000')){header('Location: '.$path.'/index');} else {$getId=$_GET['getId'];$sqlGeneral = "SELECT * FROM ".$tabla." WHERE id_suite = '".$_GET['getId']."' ";}
        $resultGeneral = mysqli_query($conexion, $sqlGeneral);
        //if(!$resultGeneral = mysqli_query($conexion, $sqlGeneral)) die();
        if($rowGeneral = mysqli_fetch_array($resultGeneral))
        { 

        $sqlProyectoBuil = "SELECT * FROM suit_suites WHERE id = ".$_GET['getId']." ";
        if(!$resultProyectoBuil = mysqli_query($conexion, $sqlProyectoBuil)) die();
        if($rowProyectoSuite = mysqli_fetch_array($resultProyectoBuil))
        {
         
        $sqlProyectob = "SELECT * FROM buil_builds WHERE id = ".$rowProyectoSuite['id_build']." ";
        if(!$resultProyectob = mysqli_query($conexion, $sqlProyectob)) die();
        if($rowProyectob = mysqli_fetch_array($resultProyectob))
               	        	
        	
        include('lib/funciones.php');

        $urlpagina1 = '<li class="breadcrumb-item"><a href="'.$path.'/'.$lengua.'/'.$rowProyectob['id_proyecto'].'/gestion-proyectos">'.$titulo_seccion1.'</a></li>';
        $urlpagina2 = '<li class="breadcrumb-item"><a href="'.$path.'/'.$lengua.'/'.$rowProyectob['id_proyecto'].'/v/builds">'.$titulo_seccion2.'</a></li>';
        $urlpagina4 = '<li class="breadcrumb-item"><a href="'.$path.'/'.$lengua.'/'.$rowProyectoSuite['id_build'].'/p/suites">'.$titulo_seccion3.'</a></li>';
        $urlpagina6 = '<li class="breadcrumb-item active">'.$titulo_seccion.'</li>';
        
        
        
        ?>		
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
										<h3 class="card-title"><?=$rowProyectoSuite['nombre_suite'];?></h3>
															<div class="dropdown card-title-btn-container">
																<button class="btn btn-sm btn-subtle dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><em class="fa fa-cog"></em></button>
																<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
																</div>
															</div>
										<h6 class="card-subtitle mb-2 text-muted"><?=$TEXT_TodosLosCasos;?></h6>
										<div class="table-responsive">
											<form action="" id="forumlario" id="forumlario" method="POST">
												<input type="hidden" name="identiff" value="<?=$getId;?>">
												
	
											<table class="table table-striped"  id="Menu">
												<thead>
													<tr>
														<th style="width:5%;">		
																				<input type="checkbox" name="checktodos" id="customCheck555">
																</th>
														<th style="width:10%;">ID</th>
														<th style="width:65%;"><?=$TEXT_TNombredelcaso;?></th>
														<th   style="width:20%;"><?=$TEXT_Acciones;?></th>
													</tr>
												</thead>
												<tbody class="panel">			
																	
													<?php	
													
													$idBuild=$rowProyectoSuite['id'];	
													$getidCspr=$rowGeneral['id'];
													
													//BUCLE TABLA BUILDS
													  $ii=0;
														while($crows = mysqli_fetch_array($nquery)){
															$iii=$ii++;
													
				 
				bucleTablaCasos($crows,$path,$lengua,$tabla,$idBuild,$getId,$getidCspr,$token);									        
									 
															 
															  
														} 
														?>											
                          <tr>
                          	
                          	<td colspan="2">
                          	<input class="btn btn-sm btn-subtle dropdown-item" name="eliminacionmasiva" type="submit" value="borrar seleccionados" /></div>                          	
                          	</td>
                          	<td>
                          	<input class="btn btn-sm btn-subtle dropdown-item" name="modificacionmasiva" id="modmass" type="submit" value="editar seleccionados" /></div>
                          	</td>
                          	<td></td>
                          	<td></td>
                          	
                          	</tr>
												</tbody>
											</table>
											
											
											
											
											
											
											
											
											</form>
										<?php borrarMasivoProyecto($path,$lengua,$getId,$checkbox,$value,$tabla);?>
										<?php editarMasivoCasos($path,$lengua,$getId,$campo,$valor,$tabla);?>
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
										<h3 class="card-title"><?=$TEXT_AniadirCasoASuite;?></h3>
										<div class="dropdown card-title-btn-container">
											<button class="btn btn-sm btn-subtle dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><em class="fa fa-cog"></em></button>
											<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="#"><em class="fa fa-search mr-1"></em> More info</a>
												<a class="dropdown-item" href="#"><em class="fa fa-thumb-tack mr-1"></em> Pin Window</a>
												<a class="dropdown-item" href="#"><em class="fa fa-remove mr-1"></em> Close Window</a></div>
										</div>
										<h6 class="card-subtitle mb-2 text-muted"><?=$TXT_AquiPuedeAniadirNUevasCasosPrueb;?></h6>
										




<form class="form-horizontal" id="formualta" action="" method="post">
												<input value="<?=$getId;?>" name="getId" type="hidden">
												<input value="<?=date();?>" name="fecha_caso" type="hidden">
											<fieldset>
												<!-- Name input-->
												<div class="form-group">
													<label class="col-12 control-label no-padding" for="name"><?=$TXT_Nombredelcaso;?></label>
													<div class="col-12 no-padding">
														<input id="nombre_caso" name="nombre_caso" required  type="text" placeholder="<?=$TXT_NombredelCasodePeruebas;?>" class="form-control">
													</div>
												</div>
												<!-- Message body -->
												<div class="form-group">
													<label class="col-12 control-label no-padding" for="message"><?=$TXT_DescripcionCasoPruebas;?></label>
													<div class="col-12 no-padding">
														<textarea class="form-control" id="descripcion_caso" required name="descripcion_caso" placeholder="<?=$TXT_DescripciondelCasodePruebasAlta;?>" rows="5"></textarea>
													</div>
												</div>
												
												<!-- Form actions -->
												<div class="form-group">
													<div class="col-12  no-padding">
														<input type="submit" name="botonguardarcaso" class="btn btn-lg btn-primary" value="<?=$TXT_botonCrearCasoPrueba;?>" />
												
													</div>
												</div>
											</fieldset>
</form>




										<?php guardarCaso($path,$lengua);?>
<?php  $id_cspr=$rowGeneral['id'];
lanzarModal($path,$lengua,$getId,$id_cspr);?>

<?php guardarBloques($path,$lengua,$getId);?>
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
<?php  } 
//}
 } else {  


        $sqlGeneral = "SELECT * FROM ".$tabla." WHERE id = '".$_GET['getId']."' ";
        $resultGeneral = mysqli_query($conexion, $sqlGeneral);
        //if(!$resultGeneral = mysqli_query($conexion, $sqlGeneral)) die();
        if($rowGeneral = mysqli_fetch_array($resultGeneral))
     
        
        $idBuild=$rowGeneral['id_build'];	

	echo '<div class="row">
		<div class="col-md-12">

			
			<div class="modal fade" id="modal-container-857358" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="myModalLabel">
								SUITE VACIA
							</h5> 
						</div>
						<div class="modal-body"><p>Desea crear ahora una suite para esta build?</p>
<form class="form-horizontal" id="formualta" action="'.$path.'/'.$lengua.'/'.$getId.'/'.$token.'/acciones" method="post">
												<input value="'.$idBuild.'" name="idBuild" type="hidden">
												<input value="'.date().'" name="fecha_suite" type="hidden">
											<fieldset>
												<!-- Name input-->
												<div class="form-group">
													<label class="col-12 control-label no-padding" for="name">'.$TXT_Nombredelasuite.'</label>
													<div class="col-12 no-padding">
														<input id="nombre_suite" name="nombre_suite" required  type="text" placeholder="'.$TXT_NombredelplandepruebasSuirte.'" class="form-control">
													</div>
												</div>
												<!-- Message body -->
												<div class="form-group">
													<label class="col-12 control-label no-padding" for="message">'.$TXT_DescripcionSuite.'></label>
													<div class="col-12 no-padding">
														<textarea class="form-control" id="descripcion_suite" required name="descripcion_suite" placeholder="'.$TXT_DescripciondelSuitplandepruebas.'" rows="5"></textarea>
													</div>
												</div>
												
												<!-- Form actions -->
												<div class="form-group">
													<div class="col-12  no-padding">
														<input type="submit" name="botonguardarsuite" class="btn btn-lg btn-primary" value="'.$TXT_botonCrearSuite.'" />
												
														<a href="'.$path.'/'.$lengua.'/'.$getId.'/p/suites"><button type="button" name="cancelar" class="btn btn-lg btn-secondary">'.$TXT_NoCancelarf.'</button></a>
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
	
$('.accordion-toggle').click(function(){
	$('.hiddenRow').hide();
	$(this).next('tr').find('.hiddenRow').show();
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
		
		
		function rowStyle(row, index) {
    var classes = ['active', 'success', 'info', 'warning', 'danger'];
    
    if (index % 2 === 0 && index / 2 < classes.length) {
        return {
            classes: classes[index / 2]
        };
    }
    return {};
}

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
<script>
	$(document).ready(function () {
    var counter = 2;

    $("#addrow").on("click", function () {
        var newRow = $("<tr>");
        var cols = "";
        var getId = "<?=$getId;?>";
        var id_cspr = "<?=$id_cspr;?>";
        cols += '<td><input type="hidden" class="form-control" name="ide[' + counter + ']"  value="' + counter + '"  /></td>';
        cols += '<td><input type="text" class="form-control" name="nombre_bloque[' + counter + ']"/></td>';
        cols += '<td><textarea class="form-control" name="descripcion_bloque[' + counter + ']"></textarea></td>';
        cols += '<td><textarea class="form-control" name="resultados_esperados[' + counter + ']"></textarea></td>';

        cols += '<td><button type="button" class="ibtnDel"><i class="fa fa-trash " aria-hidden="true"></i></button></td>';
        newRow.append(cols);
        $("table.order-list").append(newRow);
        counter++;
    });



    $("table.order-list").on("click", ".ibtnDel", function (event) {
        $(this).closest("tr").remove();       
        counter -= 1
    });


});

function calculateRow(row) {
    var price = +row.find('input[name^="price"]').val();

}

function calculateGrandTotal() {
    var grandTotal = 0;
    $("table.order-list").find('input[name^="price"]').each(function () {
        grandTotal += +$(this).val();
    });
    $("#grandtotal").text(grandTotal.toFixed(2));
}
</script>
    <script src="<?=$pathRecursos;?>/js/tether.min.js" language="javascript"></script>
	</body>
</html>

