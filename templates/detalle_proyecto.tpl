
	<div class="container">

		<section>



				
<div class="row cambiosizefont">				
	<div class="col-md-3 mt-0">
	 <div class="card">
	  <div class="card-block p-3 ">
		<div class="row">
				 <div class="col-md-12">
						<h4><i class="far fa-user"></i> Personal</h4>
						<p><strong>Coordina:</strong>	 <a href="">{$V_responsable}</a></p> 
						<p><strong>Visionando:</strong>	{*<!--//echo numeroVisionariosProy();-->*}</p>  
						<p><a href="">Dejar de visionar este proyecto</a></p> 

				 </div>
				</div>

				<div class="row">
				 <div class="col-md-12">
						<h4><i class="far fa-calendar-alt"></i> Fechas</h4>
						<p><strong>Prevista:</strong>	<span class="float-right">{$V_fecha_prevista}</span></p>
						<p><strong>Creada:</strong>	<span class="float-right">{$V_fecha_creada}</span></p>
						<p><strong>Actualizada:</strong>	<span class="float-right">{$V_fecha_actualizacion}</span></p>
						<p><strong>Fecha inicio:</strong>	<span class="float-right">{$V_fecha_inicio}</span></p>
						<p><strong>Fecha final:</strong>	<span class="float-right">{$V_fecha_final}</span></p>
				
				 </div>
				</div>
				<div class="row">
				 <div class="col-md-12">
						<h4><i class="far fa-clock"></i> Cronograma</h4>
						<p><strong>Estimado:</strong> {$V_horas_estimadas}h</p>
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
						<p><strong>Tipo:</strong> {$V_tipo}</p>
						<p><strong>Estatus:</strong>  <span class="badge badge-warning mayusc">{$V_status}</span>  <a href="">(ver flujo)</a></p>
						<p><strong>Prioridad:</strong> {$V_prioridad}</p>
					</div>
					<div class="col-md-6">
						<p><strong>Resolución:</strong> {$V_resolucion}</p>
						<p><strong>Componentes:</strong> {$V_componentes}</p>
						<p><strong>Etiquetas:</strong>  {*<!--//$etiquetasLabel = etiquetasLabel($etiquetas);foreach($etiquetasLabel as $msgLabel) {echo '<span class="badge badge-info">'.$msgLabel['label'].'</span>  ';};-->*}</p>
					</div>
			</div>
         
     

				<div class="row">
				 <div class="col-md-12">
							<h4><i class="far fa-file-alt"></i> Descripción</h4>
							<p>{$V_descripcion_proyecto}</p>
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
								 	{$listaIssuesProyecto}
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
{/literal}
