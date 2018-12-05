<?php session_start();
      require('lib/configuracion.php');
      $titulo_seccion =$TEXT_Gestionar_proyectos;
      $tabla='proy_proyectos';    
      require('lib/paginador.php');
      include('lib/funciones.php');
      //recupero la id y la desencripto
      $idTare  = $_GET['idproyecto'];

						  
     	 $sqlGeneral = "SELECT * FROM proy_proyectos proy 
		 WHERE id = ".$idTare." ";
     	
        if(!$resultGeneral = mysqli_query($conexion, $sqlGeneral)) die();
        if($rowGeneral = mysqli_fetch_array($resultGeneral))
        { 
      $id_proyecto = $rowGeneral['id'];

      $urlpagina1 = '<li class="breadcrumb-item active">'.$titulo_seccion.': '.$rowGeneral['nombre_proyecto'].'</li>';
      
?><!DOCTYPE html>
<html lang="<?=$lengua;?>">
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="<?=$rowSettings['metas'];?>">
	<meta name="author" content="<?=$rowSettings['autor'];?>">
	<link rel="icon" href="<?=$pathRecursos;?>/favicon.ico">

	<title><?=$titulo_seccion;?> - TestBuild (<?=$rowSettings['version'];?>) - <?=$rowGeneral['nombre_proyecto'];?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

   <link rel="stylesheet" href="<?=$pathRecursos;?>/css/sweetalert.css">
    <link href="<?=$pathRecursos;?>/css/estil.css" rel="stylesheet">
    <link rel="stylesheet" href="<?=$pathRecursos;?>/css/colorbox.css" />
    <link rel="stylesheet" href="<?=$pathRecursos;?>/css/bootstrap-datepicker3.min.css" />
     <link rel="stylesheet" href="<?=$pathRecursos;?>/css/dropzone.css" />   
     <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/tagmanager/3.0.2/tagmanager.min.css">
</head>
<body>
	<div class="container">
				<header>
				<div class="row">
					<div class="col-12"><?php include('header.php');?></div>
				</div>
				</header>
		<section class="ttiop">
				<div class="row">
					<div class="col-12"><?php include('breadcrumb.php');?></div>
				</div>
				<div class="row">
					 <div class="col-sm-5">
						<h3><?=$rowGeneral['nombre_proyecto'];?></h3>
						<h6>Cliente: <?php echo clienteProyecto();?></h6>
					</div>
					<div class="col-sm-3 text-right resbus"><?php if($_GET['valor_busqueda']){echo 'Ha buscado: <strong>'.$_GET['valor_busqueda'].'</strong>';}?></div>
					<div class="col-sm-4"><?php include('buscador.php');?></div>
				</div>
				  
				  
					
				<div class="row">
				 <div class="col-md-12 mt-4">
				 	 <div class="card mb-4">
				 	 	<div class="card-block p-2"><?php include('botonerasuperior.php');?></div>
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
						<p><strong>Coordina:</strong>	 <a href=""><?=$rowGeneral['responsable'];?></a></p> 
						<p><strong>Visionando:</strong>	<?php echo numeroVisionariosProy();?></p>  
						<p><a href="">Dejar de visionar este proyecto</a></p> 

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
						<p><strong>Imputado:</strong> <?php echo totalHorasImputadasProyecto();?></p>
						<p><strong>Restante:</strong> <?php echo calculoHorasRestantesProy();?></p>
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
						<p><strong>Etiquetas:</strong>  <?php //$etiquetasLabel = etiquetasLabel($etiquetas);foreach($etiquetasLabel as $msgLabel) {echo '<span class="badge badge-info">'.$msgLabel['label'].'</span>  ';};?></p>
					</div>
			</div>

				<div class="row">
				 <div class="col-md-12">
							<h4><i class="far fa-file-alt"></i> Descripción</h4>
							<p><?=$rowGeneral['descripcion_proyecto'];?></p>
				 </div>
				</div>

				<div class="row">
				 <div class="col-md-12">
							<h4><i class="far fa-calendar-check"></i> Issues del proyecto <span class="float-right"><a id="modal-758809" href="#modal-container-758809" role="button"  data-toggle="modal"><i class="fas fa-plus"></i></a></span></h4> 

							<table class="table table-sm table-bordered table-hover mt-2">
								<thead>
									<tr>
										<th  width="4%"></th>
										<th width="8%">
											issue
										</th>
										<th   width="20%">
											Asignada a
										</th>
										<th   width="68%">
											Tarea
										</th>
										<th  width="10%">
											porcentaje
										</th>
										<th width="10%">
											Horas
										</th>
										
									</tr>
								</thead>
								 <tbody>
								 	<?php $tablaissuesProy = tablaissuesProyecto($tablaissuesProyecto);
								 	foreach($tablaissuesProy as $msgIssProy) {
										switch ($msgIssProy['status']){
											case "cerrada": $statusIssue = '<i class="verde fas fa-chevron-circle-right"></i>';break;
											case "en desarrollo": $statusIssue = '<i class="amarillo fas fa-chevron-circle-right"></i>';break;
											case "reabierta": $statusIssue = '<i class="rojo fas fa-chevron-circle-right"></i>';break;
											case "abierta": $statusIssue = '<i class="azul fas fa-chevron-circle-right"></i>';break;
										}
							     	echo '<tr>
													<td class="text-center">
														'.$statusIssue.'
													</td>
													<td>
														'.$msgIssProy['id'].'
													</td>
													<td>
														sss
													</td>
													<td>
														<a href=""><div class="col-md-12">'.$msgIssProy['nombre_build'].'</div></a>
													</td>
													<td>
													100%
													</td>
													<td>
														'.$msgIssProy['horas_estimadas'].'h.
													</td>
										</tr>';
								 		};?>
								</tbody>
							</table>
				   </div>
				</div>
				
				
	
				
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
						<p>Enlaces vinculados con este proyecto.</p>
						<?php $enlacesVincuProy = enlacesVinculadosProy($enlacesVinculadosProy);
								 	foreach($enlacesVincuProy as $msgTablaVinculProy) {
										echo '<p><a href="'.$msgTablaVinculProy['enlace'].'" class="camemb" target="_blank"><i class="fas fa-arrow-circle-right"></i> '.$msgTablaVinculProy['enlace'].'</a></p>';
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
											
									<?php $comentariosProy = comentariosProyecto($comentariosProyecto);
											foreach($comentariosProy as $msgproyect) {
												echo '<div class="card mb-1">
												   <div class="card-block p-3  thj">
													 <h6><a href="">'.$msgproyect['nombre'].'</a> - '.$msgproyect['fecha_creacion'].'</h6>
													 <p>'.$msgproyect['comentario'].'</p>
												   </div>
												 </div>';
								 		};?>

														
											</div>
											<div class="tab-pane" id="tab2">
											<div class="card mb-1">
												   <div class="card-block p-3  thj">
												   
												   
										<?php $historialP = historialProyecto($historialProyecto);
											foreach($historialP as $msgProyLog) {
												echo '
													 <h6><i class="fas fa-caret-right"></i> <a href="">'.$msgProyLog['nombre'].'</a> - '.$msgProyLog['fecha_creacion'].'</h6>
													 <p>'.$msgProyLog['accion'].'</p>
												  ';
								 		};?>
										 </div>
												 </div>
												
											</div>
										</div>
						</div>

														<?php //editarMasivoProyecto($path,$lengua,$getId,$campo,$valor,$tabla);?>
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
<?php include('modales.php');?>	
<?php //guardarImputacion();?>

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
      <script src="<?=$pathRecursos;?>/js/guardardatos.js" language="javascript"></script>
  <script>
function cargaDatos(){
      //destinado a la carga de local storage cuando se necesite 
    document.getElementById("result").innerHTML = localStorage.getItem("idusuario");
		
} 
</script>
   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tagmanager/3.0.2/tagmanager.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>  

<script type="text/javascript">
  $(document).ready(function() {
    var tags = $(".tm-input").tagsManager();
    jQuery(".typeahead").typeahead({
      source: function (query, process) {
        return $.get('http://www.webentorn.com/tareas/lectura_usuarios.php', { query: query }, function (data) {
          data = $.parseJSON(data);
          return process(data);
        });
      },
      afterSelect :function (item){
        tags.tagsManager("pushTag", item);
      }
    });
  });
</script>


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
			todayHighlight: true,
			 autoclose: true
		});
		$('#datetimepicker2').datepicker({
			format: "yyyy/mm/dd",
			language: "es",
			todayHighlight: true,
			 autoclose: true
		});
		$('#datetimepicker3').datepicker({
			format: "yyyy/mm/dd",
			language: "es",
			todayHighlight: true,
			 autoclose: true
		});
});
    </script>

	</body>
</html>

