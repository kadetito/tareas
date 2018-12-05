<!DOCTYPE html>
<html lang="{$language}">
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="{$metas}">
	<meta name="author" content="{$autor}">
	<link rel="icon" href="{$pathRecursos}/favicon.ico">
	<title>{$TEXT_Gestionar_tareas} - TestBuild ({$version}) - {$nombre_proyecto}</title>
    <link rel="stylesheet" href="{$pathRecursos}/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{$pathRecursos}/css/sweetalert.css" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <link rel="stylesheet" href="{$pathRecursos}/css/estil.css" />
    <link rel="stylesheet" href="{$pathRecursos}/css/colorbox.css" />
    <link rel="stylesheet" href="{$pathRecursos}/css/dropzone.css" />   
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/tagmanager/3.0.2/tagmanager.min.css">
</head>
<body>
	<div class="container">
				<header>
				<div class="row">
					<div class="col-12">{include file="templates/header.tpl"}</div>
				</div>
				</header>
		<section>
				<div class="row">
					<div class="col-12">{include file="templates/breadcrumb.tpl"}</div>
				</div>
				<div class="row">
					 <div class="col-sm-5">
						<h3>{$D_nombre_build}</h3>
						<h6>Cliente: {*<!-- //echo clienteProyecto();-->*}</h6>
					</div>
					<div class="col-sm-3 text-right resbus"></div>
					<div class="col-sm-4">{include file="templates/buscador.tpl"}</div>
				</div>
				<div class="row">
				 <div class="col-md-12 mt-4">
				 	 <div class="card mb-4">
				 	 	<div class="card-block p-2">{include file="templates/botonerasuperior.tpl"}</div>
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
						<p>Asignada a: {*<?php $usuarioIssue = asignadaUsuario($nombre_usuario_issue);foreach($usuarioIssue as $msg) {echo '<a href="">'.$msg['nombre'].'</a>, ';};?>*}
						<p><strong>Coordina:</strong>	 <a href="">{$D_responsable}</a></p> 
						<p><strong>Visionando:</strong>	{*<!--//echo numeroVisionarios();-->*}</p>  
						<p><a href="">Dejar de visionar esta issue</a></p> 

				 </div>
				</div>

				<div class="row">
				 <div class="col-md-12">
						<h4><i class="far fa-calendar-alt"></i> Fechas</h4>
						<p><strong>Prevista:</strong>	<span class="float-right">{$D_fecha_prevista}</span></p>
						<p><strong>Creada:</strong>	<span class="float-right">{$d_fecha_creada}</span></p>
						<p><strong>Actualizada:</strong>	<span class="float-right">{$D_fecha_actualizacion}</span></p>
						<p><strong>Fecha inicio:</strong>	<span class="float-right">{$D_fecha_inicio}</span></p>
						<p><strong>Fecha final:</strong>	<span class="float-right">{$D_fecha_final}</span></p>
				
				 </div>
				</div>
				<div class="row">
				 <div class="col-md-12">
						<h4><i class="far fa-clock"></i> Cronograma</h4>
						<p><strong>Estimado:</strong> {$D_horas_estimadas}h</p>
						<p><strong>Imputado:</strong> {*<!-- //echo totalHorasImputadasProyecto();-->*}</p>
						<p><strong>Restante:</strong> {*<!-- //echo calculoHorasRestantesProy();-->*}</p>
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
						<p><strong>Tipo:</strong> {$D_tipo}</p>
						<p><strong>Estatus:</strong>  <span class="badge badge-warning mayusc">{$D_status}</span>  <a href="">(ver flujo)</a></p>
						<p><strong>Prioridad:</strong> {$D_prioridad}</p>
					</div>
					<div class="col-md-6">
						<p><strong>Resolución:</strong> {$D_resolucion}</p>
						<p><strong>Componentes:</strong> {$D_componentes}</p>
						<p><strong>Etiquetas:</strong>  {*<!--//$etiquetasLabel = etiquetasLabel($etiquetas);foreach($etiquetasLabel as $msgLabel) {echo '<span class="badge badge-info">'.$msgLabel['label'].'</span>  ';};-->*}</p>
					</div>
			</div>
         
     

				<div class="row">
				 <div class="col-md-12">
							<h4><i class="far fa-file-alt"></i> Descripción</h4>
							<p>{$D_descripcion_proyecto}</p>
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
										{*$listaImputaciones*}
								</tbody>
							</table>
				 </div>
				</div>
				
				

				
				
	
				
			<div class="row">
				 <div class="col-md-12">
				<h4><i class="fas fa-paperclip"></i> Archivos adjuntos</h4>	
				{*<!-- //mostrarAdjuntos();-->*}		
				<form action="{*<?=//$path;?>*}/upload.php" method="POST" id="my-awesome-dropzone" class="dropzone"  enctype="multipart/form-data">
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
						{*<!--//$enlacesVincuProy = enlacesVinculadosProy($enlacesVinculadosProy);
								 	//foreach($enlacesVincuProy as $msgTablaVinculProy) {
									//	echo '<p><a href="'.$msgTablaVinculProy['enlace'].'" class="camemb" target="_blank"><i class="fas fa-arrow-circle-right"></i> '.$msgTablaVinculProy['enlace'].'</a></p>';
								 	//	};-->*}
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
											
		{*							<!-- //$comentariosProy = comentariosProyecto($comentariosProyecto);
											//foreach($comentariosProy as $msgproyect) {
											//	echo '<div class="card mb-1">
											////	   <div class="card-block p-3  thj">
											//		 <h6><a href="">'.$msgproyect['nombre'].'</a> - '.$msgproyect['fecha_creacion'].'</h6>
											//		 <p>'.$msgproyect['comentario'].'</p>
											//	   </div>
											//	 </div>';
								 		//};-->
*}
														
											</div>
											<div class="tab-pane" id="tab2">
											<div class="card mb-1">
												   <div class="card-block p-3  thj">
												   
												   
						{*				<!-- //$historialP = historialProyecto($historialProyecto);
											//foreach($historialP as $msgProyLog) {
											//	echo '
											//		 <h6><i class="fas fa-caret-right"></i> <a href="">'.$msgProyLog['nombre'].'</a> - '.$msgProyLog['fecha_creacion'].'</h6>
											//		 <p>'.$msgProyLog['accion'].'</p>
											//	  ';
								 		//};-->*}
										 </div>
												 </div>
												
											</div>
										</div>
						</div>

														{*<!-- //editarMasivoProyecto($path,$lengua,$getId,$campo,$valor,$tabla);-->*}
					</div>
			</div>

</div>
</div>
</div>
</div>








					{include file="templates/footer.tpl"}	
				</section>
</div>
{include file="templates/modales.tpl"}

{*<!-- //guardarImputacion();-->*}



    <script src='{$pathRecursos}/js/jquery.min.js'></script>
    <script src="{$pathRecursos}/js/popper.min.js"></script>
		<script src="{$pathRecursos}/js/bootstrap.min.js"></script>
		<script src="{$pathRecursos}/js/sweetalert.min.js"></script>
    <script src="{$pathRecursos}/js/jquery.cookie.js"></script>
    <script src="{$pathRecursos}/js/bootstrap-datepicker.min.js"></script>
		<script src="{$pathRecursos}/js/jquery.colorbox-min.js"></script>  
    <script src="{$pathRecursos}/js/jquery.validate.min.js"></script>
    <script src='{$pathRecursos}/js/jquery-resizable.js'></script>
    <script src="{$pathRecursos}/js/custom.js"></script>
    <script src="{$pathRecursos}/js/tether.min.js" language="javascript"></script>
    <script src="{$pathRecursos}/js/guardardatos.js" language="javascript"></script>
	  <script src="{$pathRecursos}/js/dropzone.min.js" language="javascript"></script>

	  

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tagmanager/3.0.2/tagmanager.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>  
<script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>


{literal}
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
{/literal}
</body>
</html>

