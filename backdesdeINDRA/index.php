<?php session_start();
      require('lib/configuracion.php');
      $titulo_seccion =$TEXT_Gestionar_tareas;
      $tabla='buil_builds';    
      require('lib/paginador.php');
      include('lib/funciones.php');
      $urlpagina1 = '<li class="breadcrumb-item active">'.$titulo_seccion.'</li>';
?><!DOCTYPE html>
<html lang="<?=$lengua;?>">
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="<?=$rowSettings['metas'];?>">
	<meta name="author" content="<?=$rowSettings['autor'];?>">

	<link rel="icon" href="<?=$pathRecursos;?>/favicon.ico">
	<title><?=$TEXT_Gestionar_tareas;?> - TestBuild (<?=$rowSettings['version'];?>) - <?=$rowGeneral['nombre_proyecto'];?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="<?=$pathRecursos;?>/css/sweetalert.css">
    <link href="<?=$pathRecursos;?>/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?=$pathRecursos;?>/css/estil.css" rel="stylesheet">
    <link rel="stylesheet" href="<?=$pathRecursos;?>/css/colorbox.css" />
</head>
<body>
	<div class="container">
				<header>
				<div class="row">
					<div class="col-12"><?php include('header.php');?></div>
				</div>
				</header>
		<section>
				<div class="row">
					<div class="col-12"><?php include('breadcrumb.php');?></div>
				</div>
				<div class="row">
					 <div class="col-sm-4">
						<h3><?=$TEXT_ListaTareas;?></h3>
						<h6><?=$TEXT_ListadodeTareas;?></h6>
					</div>
					<div class="col-sm-4 text-right resbus"><?php if($_GET['valor_busqueda']){echo 'Ha buscado: <strong>'.$_GET['valor_busqueda'].'</strong>';}?></div>
					<div class="col-sm-4"><?php include('buscador.php');?></div>
				</div>
				  
				  
					
				<div class="row">
				 <div class="col-md-12">

						<div class="table-responsive">
								<form action="" id="forumlario" id="forumlario" method="POST"><input type="hidden" name="identiff" value="<?=$getId;?>">
											
											
											
											
											
											
											
											
											
											
											
											
											
											<div class="page-container">
											<table class="table table-bordered table-striped">
																				<thead>
																					<tr>
																						<th>		
																												<input type="checkbox" name="checktodos" id="customCheck555">
																						</th>
																						<th>ID </th>
																						<th><?=$TEXT_Tfechacreacion;?></th>
																						<th><div class="float-left"><?=$TEXT_TProyecto;?></div><div class="float-right action-buttons"><?php funcionOrdenProy();?></div></th>
																						<th><?=$TEXT_TNombredelatarea;?></th>
																						<th><?=$TEXT_Horas;?></th>
																						<th><div class="float-left"><?=$TEXT_Estado;?></div><div class="float-right action-buttons"><?php funcionOrdenEst();?></div></th>
																					</tr>
																				</thead>
																				<tbody>					
																					<?php	
																					//BUCLE TABLA PROYECTOS
																					  $ii=0;
																					  
																						while($crow = mysqli_fetch_array($nquery)){
																							$iii=$ii++;
																							 bucleTablaBuilds($crow,$path,$lengua,$tabla);	 
																						} 
																						?>											
								                         
																				</tbody>
											</table>
											
											<input class="btn btn-default" name="eliminacionmasiva" type="submit" value="borrar seleccionados" />
								      <input class="btn btn-default" name="modificacionmasiva" id="modmass" type="submit" value="editar seleccionados" />
								      
								                          
										</div>
								</form>
														<?php borrarMasivoProyecto($path,$lengua,$getId,$checkbox,$value,$tabla);?>
														<?php editarMasivoProyecto($path,$lengua,$getId,$campo,$valor,$tabla);?>
													  <?php eliminarYvolver();?>
							</div>
					</div>

			</div>





					<div class="row">
						<div class="col-md-12 text-center">
															<div class="btn-group">								
																	<div id="pagination_controls"><?php echo $paginationCtrls; ?></div>				
															</div>	
					  </div>
					</div>




					<div class="row">
												<div class="col-12 mt-1 mb-4"><?=$TEXT_Developed_by;?> <a target="_blank" href="<?=$rowSettings['webdeveloper'];?>"><?=$rowSettings['developer'];?></a></div>
					</div>

				</section>
	
</div>
	



    <script src="<?=$pathRecursos;?>/js/jquery-3.2.1.min.js"></script>
    <script src="<?=$pathRecursos;?>/js/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<script src="<?=$pathRecursos;?>/js/sweetalert.min.js"></script>
    <script src="<?=$pathRecursos;?>/js/jquery.cookie.js"></script>
    <script src="<?=$pathRecursos;?>/js/bootstrap-datepicker.js"></script>
		<script src="<?=$pathRecursos;?>/js/jquery.colorbox-min.js"></script>  
    <script src="<?=$pathRecursos;?>/js/jquery.validate.min.js"></script>
    <script src='https://rawgit.com/RickStrahl/jquery-resizable/master/src/jquery-resizable.js'></script>
    <script src="<?=$pathRecursos;?>/js/custom.js"></script>
    <script src="<?=$pathRecursos;?>/js/tether.min.js" language="javascript"></script>
    

	</body>
</html>

