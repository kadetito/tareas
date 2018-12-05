<?php session_start();
      require('lib/configuracion.php');
      $titulo_seccion =$TEXT_Gestionar_tareas;
      $tabla='buil_builds';    
      require('lib/paginador.php');
      include('lib/funciones.php');
      //recupero la id y la desencripto
      $idTare  = encrypt_decrypt('decrypt', $_GET['idtarea']);
      

     	 $sqlGeneral = "SELECT * FROM buil_builds WHERE id = ".$idTare." ";
     	
        if(!$resultGeneral = mysqli_query($conexion, $sqlGeneral)) die();
        if($rowGeneral = mysqli_fetch_array($resultGeneral))
        { 
      $id_issue = $rowGeneral['id'];
      
      
      
      $urlpagina1 = '<li class="breadcrumb-item"><a href="proyecto">'.$rowGeneral['id_proyecto'].'</a></li> <li class="breadcrumb-item active">'.$rowGeneral['nombre_build'].'</li>';
      
?><!DOCTYPE html>
<html lang="<?=$lengua;?>">
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="<?=$rowSettings['metas'];?>">
	<meta name="author" content="<?=$rowSettings['autor'];?>">
	<link rel="icon" href="<?=$pathRecursos;?>/favicon.ico">

	<title><?=$rowGeneral['nombre_build'];?> - TestBuild (<?=$rowSettings['version'];?>) - <?=$rowGeneral['nombre_proyecto'];?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

   <link rel="stylesheet" href="<?=$pathRecursos;?>/css/sweetalert.css">
    <link href="<?=$pathRecursos;?>/css/estil.css" rel="stylesheet">
    <link rel="stylesheet" href="<?=$pathRecursos;?>/css/colorbox.css" />
    <link rel="stylesheet" href="<?=$pathRecursos;?>/css/bootstrap-datepicker3.min.css" />
     <link rel="stylesheet" href="<?=$pathRecursos;?>/css/dropzone.css" />   
    
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
						<h3><?=$rowGeneral['nombre_build'];?></h3>
						<h6><a href=""><?=$rowGeneral['id_proyecto'];?></a></h6>
					</div>
					<div class="col-sm-4 text-right resbus"><?php if($_GET['valor_busqueda']){echo 'Ha buscado: <strong>'.$_GET['valor_busqueda'].'</strong>';}?></div>
					<div class="col-sm-4"><?php include('buscador.php');?></div>
				</div>
				  
				  
					
				<div class="row">
				 <div class="col-md-12 mt-4">
				 	 <div class="card mb-4">
				 	 	<div class="card-block p-2 ">

<?php include('botonerasuperior.php';?>
					 </div>
					 </div>
					</div>
				</div>
				
<div class="row cambiosizefont">				
	<div class="col-md-3 mt-0">
	 <div class="card">
	  <div class="card-block p-3 ">
		<div class="row">
				 <div class="col-md-12">
						<h4><i class="far fa-user"></i> Personal</h4>
						<p><strong>Asignada:</strong>	 <?php $usuarioIssue = asignadaUsuario($nombre_usuario_issue);foreach($usuarioIssue as $msg) {echo '<a href="">'.$msg['nombre'].'</a>, ';};?></p> 
						<p><strong>Coordina:</strong>	 <a href=""><?=$rowGeneral['coordina'];?></a></p> 
						<p><strong>Visionando:</strong>	<?php echo numeroVisionarios();?></p>  
						<p><a href="">Dejar de visionar esta issue</a></p> 

				 </div>
				</div>
				




	
	
	
				<div class="row">
				 <div class="col-md-12">
						<h4><i class="far fa-calendar-alt"></i> Fechas</h4>
						<p><strong>Prevista:</strong>	<span class="float-right"><?php $fecha_prevista = date("d-m-Y", strtotime($rowGeneral['fecha_prevista']));   if($fecha_prevista <= date("d-m-Y")){echo '<span class="rojo">(sobrepasada) '.$fecha_prevista.'</span>';} else { echo $fecha_prevista;}?></span></p>
						<p><strong>Creada:</strong>	<span class="float-right"><?php $fecha_creada = date("d-m-Y H:i:s", strtotime($rowGeneral['fecha_creacion'])); echo $fecha_creada;?></span></p>
						<p><strong>Actualizada:</strong>	<span class="float-right"><?php if($rowGeneral['fecha_actualizacion']=='0000-00-00 00:00:00'){echo 'nunca actualizada';} else {$fecha_actualizacion= date("d-m-Y", strtotime($rowGeneral['fecha_actualizacion'])); echo $fecha_actualizacion;}?></span></p>
						<p><strong>Fecha inicio:</strong>	<span class="float-right"><?php if($rowGeneral['fecha_inicio']=='0000-00-00 00:00:00'){echo '(NO INICIADA)';} else {$fecha_inicio= date("d-m-Y", strtotime($rowGeneral['fecha_inicio'])); echo $fecha_inicio;}?></span></p>
						<p><strong>Fecha final:</strong>	<span class="float-right"><?php if($rowGeneral['fecha_final']=='0000-00-00 00:00:00'){} else {$fecha_final= date("d-m-Y", strtotime($rowGeneral['fecha_final'])); echo $fecha_final;}?></span></p>
				
				 </div>
				</div>
				<div class="row">
				 <div class="col-md-12">
						<h4><i class="far fa-clock"></i> Cronograma</h4>
						<p><strong>Estimado:</strong> <?=substr($rowGeneral['horas_estimadas'],0,5);?>h</p>
						<p><strong>Imputado:</strong> <?php echo totalHorasImputadas();?></p>
						<p><strong>Restante:</strong> <?php echo calculoHorasRestantes();?></p>
			 </div>
			</div>
	</div>
  </div>
</div>
	<div class="col-md-9 mt-0">
	 <div class="card">
	  <div class="card-block p-3 ">	
      <div class="row">
					<div class="col-md-12"><h4><i class="far fa-address-card"></i> Detalles</h4></div>
      </div>
			<div class="row">
					<div class="col-md-6">
						<p><strong>Tipo:</strong> <?=$rowGeneral['tipo'];?></p>
						<p><strong>Estatus:</strong>  <span class="badge badge-warning mayusc"><?=$rowGeneral['status'];?></span>  <a href="">(ver flujo)</a></p>
						<p><strong>Prioridad:</strong> <?=$rowGeneral['prioridad'];?></p>
					</div>
					<div class="col-md-6">
						<p><strong>Resolución:</strong> <?=$rowGeneral['resolucion'];?></p>
						<p><strong>Componentes:</strong> <?=$rowGeneral['componentes'];?></p>
						<p><strong>Etiquetas:</strong>  <?php $etiquetasLabel = etiquetasLabel($etiquetas);foreach($etiquetasLabel as $msgLabel) {echo '<span class="badge badge-info">'.$msgLabel['label'].'</span>  ';};?></p>
					</div>
			</div>

				<div class="row">
				 <div class="col-md-12">
							<h4><i class="far fa-file-alt"></i> Descripción</h4>
							<p><?=$rowGeneral['descripcion_build'];?></p>
				 </div>
				</div>

				<div class="row">
				 <div class="col-md-12">
							<h4><i class="far fa-calendar-check"></i> Timing</h4> 
							<p><a id="modal-556073" href="#modal-container-556073" role="button" class="btn" data-toggle="modal"><button class="btn btn-sm ">Imputar horas</button></a>  <a id="modal-556074" href="#modal-container-556074" role="button" class="btn" data-toggle="modal"><button class="btn btn-sm ">Escoger periodo</button></a> <span class="float-right">Periodo: <strong><?php echo data_first_month_day();?> - <?php echo data_last_month_day();?></strong></span></p>
							<table class="table table-sm table-bordered mt-5">
								<thead>
									<tr>
										<th>
											issue
										</th>
										<th>
											usuario
										</th>
										<th>
											Descripción
										</th>
										<th>
											Fecha
										</th>
										<th>
											Horas imputadas
										</th>
										<th></th>
									</tr>
								</thead>
								 <tbody>
								 	<?php $tablaHorasLabel = tablaHorasImputadas($tablaHoras);
								 	foreach($tablaHorasLabel as $msgTablaHoras) {
										echo '<tr>
													<td>
														'.$msgTablaHoras['id_tarea'].'
													</td>
													<td>
														<a href="">'.$msgTablaHoras['nombre'].'</a>
													</td>
													<td>
														'.$msgTablaHoras['descripcion'].'
													</td>
													<td>
														'.$msgTablaHoras['fecha_actualizacion'].'
													</td>
													<td>
														'.$msgTablaHoras['horas'].'
													</td>
													<td class="text-right"><i class="fa fa-trash"></i></td>
												</tr>';
								 		};?>
								</tbody>
							</table>
				 </div>
				</div>
				
				<!--MODAL NUEVO PERIODO-->
<div class="modal fade" id="modal-container-556073" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="myModalLabel">
								Imputar horas
							</h5> 
							<button type="button" class="close" data-dismiss="modal">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<form id="formuperiodonuevo" method="POST" action="">						
						<div class="modal-body" id="periodinuevo">
<input type="hidden" name="id_issue" value="<?=$id_issue;?>" />	

						
<div class="input-group date" id="datetimepicker1">
  <input type="text" name="fecha_actualizacion" class="form-control"  />
<span class="input-group-addon yexxg">
      <i class="fa fa-calendar-o"></i>
</span>
</div>

<p><label for="horas">Horas a imputar</label>
	<select name="horas" class="form-control">
		<option value="">Por favor, seleccione el número de horas a imputar</option>
	<option value="01:00">1</option><option value="01:30">1:30</option>
	<option value="02:00">2</option><option value="02:30">2:30</option>
	<option value="03:00">3</option><option value="03:30">3:30</option>
	<option value="04:00">4</option><option value="04:30">4:30</option>
	<option value="05:00">5</option><option value="05:30">5:30</option>
	<option value="06:00">6</option><option value="06:30">6:30</option>	
	<option value="07:00">7</option><option value="07:30">7:30</option>
	<option value="08:00">8</option><option value="08:30">8:30</option>
	<option value="09:00">9</option><option value="09:30">9:30</option>
	<option value="10:00">10</option><option value="10:30">10:30</option>
	<option value="11:00">11</option><option value="11:30">11:30</option>
	<option value="12:00">12</option><option value="12:30">12:30</option>		
	<option value="13:00">13</option><option value="13:30">13:30</option>
	<option value="14:00">14</option><option value="14:30">14:30</option>
	<option value="15:00">15</option><option value="15:30">15:30</option>
	<option value="16:00">16</option><option value="16:30">16:30</option>
	<option value="17:00">17</option><option value="17:30">17:30</option>
	<option value="18:00">18</option><option value="18:30">18:30</option>	
	<option value="19:00">19</option><option value="19:30">19:30</option>
	<option value="20:00">20</option><option value="20:30">20:30</option>
	<option value="21:00">21</option><option value="21:30">21:30</option>
	<option value="22:00">22</option><option value="22:30">22:30</option>
	<option value="23:00">23</option><option value="23:30">23:30</option>
	<option value="24:00">24</option><option value="24:30">24:30</option>	
					
	</select>
	</p>
<p><label for="descripcion">Descripción</label><textarea name="descripcion" class="form-control"></textarea></p>
						</div>
						<div class="modal-footer">
							<input type="submit" name="imputar" id="imputar" class="btn btn-primary" value="Imputar" /> 
						</div>
						</form>
						
					</div>
				</div>
			</div>
			<!--fin MODAL NUEVO PERIODO-->
	
				<!--MODAL deL PERIODO-->
<div class="modal fade" id="modal-container-556074" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="myModalLabel">
								Escoger periodo de imputación
							</h5> 
							<button type="button" class="close" data-dismiss="modal">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<form id="formuperiodo" method="POST" action="<?=$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";?>">						
						<div class="modal-body" id="periodi">
<div class="input-daterange input-group" id="datepicker">
    <input type="text" class="input-sm form-control" name="primerdiames" autocomplete="off" />
    <span class="input-group-addon">a</span>
    <input type="text" class="input-sm form-control" name="ultimodiames" autocomplete="off" />
</div>								

						</div>
						<div class="modal-footer">
							<input type="submit" name="periodo" class="btn btn-primary" value="Obtener periodo" /> 
						</div>
						</form>
					</div>
				</div>
			</div>
			<!--fin MODAL deL PERIODO-->
				
			<div class="row">
				 <div class="col-md-12">
				<h4><i class="fas fa-paperclip"></i> Archivos adjuntos</h4>	
				<?php mostrarAdjuntos();?>			
				<form action="<?=$path;?>/upload.php" method="POST" id="my-awesome-dropzone" class="dropzone"  enctype="multipart/form-data">
				  <div class="fallback"><input type='hidden' name='myParam1' value='put value here'>
					<input name="adjunto" type="file" multiple />
				  </div>
				</form>

			  </div>
			</div>
			 <div class="row">
				 <div class="col-md-12">
						<h4><i class="fas fa-link"></i> Enlaces vinculados <span class="float-right"><a href=""><i class="fas fa-plus"></i></a></span></h4> 
						<p>Enlaces vinculados con esta issue.</p>
						<?php $enlacesVincu = enlacesVinculados($enlacesVinculados);
								 	foreach($enlacesVincu as $msgTablaVincul) {
										echo '<p><a href="'.$msgTablaVincul['enlace'].'" class="camemb" target="_blank"><i class="fas fa-arrow-circle-right"></i> '.$msgTablaVincul['enlace'].'</a></p>';
								 		};?>
				 </div>
			</div>

      <div class="row">
				 <div class="col-md-12 mt-3">						
				 <h4><i class="fas fa-chart-line"></i> Actividad</h4> 
						<div class="tabbable" id="tabs-221609">
										<ul class="nav nav-tabs">
											<li class="nav-item">
												<a class="nav-link active" href="#tab1" data-toggle="tab">Comentarios</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="#tab2" data-toggle="tab">Historial</a>
											</li>
										</ul>
										<div class="tab-content">
											<div class="tab-pane active" id="tab1">
											
									<?php $comentarios = comentariosIssue($comentariosIssue);
											foreach($comentarios as $msgTablaCom) {
												echo '<div class="card mb-1">
												   <div class="card-block p-3  thj">
													 <h6><a href="">'.$msgTablaCom['nombre'].'</a> - '.$msgTablaCom['fecha_creacion'].'</h6>
													 <p>'.$msgTablaCom['comentario'].'</p>
												   </div>
												 </div>';
								 		};?>

														
											</div>
											<div class="tab-pane" id="tab2">
											<div class="card mb-1">
												   <div class="card-block p-3  thj">
										<?php $historialI = historialIssue($historialIssue);
											foreach($historialI as $msgTablaLog) {
												echo '
													 <h6><i class="fas fa-caret-right"></i> <a href="">'.$msgTablaLog['nombre'].'</a> - '.$msgTablaLog['fecha_creacion'].'</h6>
													 <p>'.$msgTablaLog['accion'].'</p>
												  ';
								 		};?>
										 </div>
												 </div>
												
											</div>
										</div>
						</div>

														<?php editarMasivoProyecto($path,$lengua,$getId,$campo,$valor,$tabla);?>
					</div>
			</div>

</div>
</div>
</div>
</div>








					<div class="row">
												<div class="col-12 mt-1 mb-4"><?=$TEXT_Developed_by;?> <a target="_blank" href="<?=$rowSettings['webdeveloper'];?>"><?=$rowSettings['developer'];?></a></div>
					</div>

				</section>
	
</div>
	
<?php guardarImputacion();?>

<?php } mysqli_close($conexion);?>
<script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	    <script src="<?=$pathRecursos;?>/js/dropzone.min.js" language="javascript"></script>
		<script>
$(function(){
  Dropzone.options.myAwesomeDropzone = {
    maxFilesize: 5,
    addRemoveLinks: true,
	uploadMultiple: false,
    parallelUploads: 1,
    maxFiles: 1,
    dictResponseError: 'Server not Configured',
    acceptedFiles: "image/*,.pdf,.doc,.txt,.rar,.zip",
    init:function(){
      var self = this;
      // config
      self.options.addRemoveLinks = true;
      self.options.dictRemoveFile = "Delete";
      //New file added
      self.on("addedfile", function (file) {
        console.log('new file added ', file);
      });
      // Send file starts
      self.on("sending", function (file) {
        console.log('upload started', file);
        $('.meter').show();
      });
      
      // File upload Progress
      self.on("totaluploadprogress", function (progress) {
        console.log("progress ", progress);
        $('.roller').width(progress + '%');
      });

      self.on("queuecomplete", function (progress) {
        $('.meter').delay(999).slideUp(999);
      });
      
      // On removing file
      self.on("removedfile", function (file) {
        console.log(file);
      });
    }
  };
})
	</script>	
    <script src="<?=$pathRecursos;?>/js/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<script src="<?=$pathRecursos;?>/js/sweetalert.min.js"></script>
    <script src="<?=$pathRecursos;?>/js/jquery.cookie.js"></script>
    <script src="<?=$pathRecursos;?>/js/bootstrap-datepicker.min.js"></script>
		<script src="<?=$pathRecursos;?>/js/jquery.colorbox-min.js"></script>  
    <script src="<?=$pathRecursos;?>/js/jquery.validate.min.js"></script>
    <script src='https://rawgit.com/RickStrahl/jquery-resizable/master/src/jquery-resizable.js'></script>
    <script src="<?=$pathRecursos;?>/js/custom.js"></script>
    <script src="<?=$pathRecursos;?>/js/tether.min.js" language="javascript"></script>
    

	<script>
		$(document).ready(function(){
		    $("#imputar").click(function(){
		        $("#imputar").prop("disabled", false);
		    });
		});	
	</script>
    
    <script>
    	 $(function () {
    	$('#periodi .input-daterange').datepicker({
    format: "yyyy/mm/dd",
    todayBtn: "linked",
    language: "es",
    todayHighlight: true,
    toggleActive: true
});
});
 $(function () {
$('#datetimepicker1').datepicker({
    format: "yyyy/mm/dd",
    language: "es",
    todayHighlight: true
});
});
    </script>

	</body>
</html>

