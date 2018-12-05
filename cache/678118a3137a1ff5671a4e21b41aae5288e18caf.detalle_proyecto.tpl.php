<?php
/* Smarty version 3.1.33, created on 2018-11-29 17:22:23
  from '/var/www/vhosts/webentorn.com/httpdocs/tareas/templates/detalle_proyecto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c00123f888000_75424224',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    '9e315413827c228cbd068d137438afdbbd0b767a' => 
    array (
      0 => '/var/www/vhosts/webentorn.com/httpdocs/tareas/templates/detalle_proyecto.tpl',
      1 => 1543508446,
      2 => 'file',
    ),
    '8b2248954f6bced1809a001d259270e0c45b1bb6' => 
    array (
      0 => '/var/www/vhosts/webentorn.com/httpdocs/tareas/templates/modales.tpl',
      1 => 1543508447,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 120,
),true)) {
function content_5c00123f888000_75424224 (Smarty_Internal_Template $_smarty_tpl) {
?>
	<div class="container">

		<section>



				
<div class="row cambiosizefont">				
	<div class="col-md-3 mt-0">
	 <div class="card">
	  <div class="card-block p-3 ">
		<div class="row">
				 <div class="col-md-12">
						<h4><i class="far fa-user"></i> Personal</h4>
						<p><strong>Coordina:</strong>	 <a href=""><?php echo $_smarty_tpl->tpl_vars['V_responsable']->value;?>
</a></p> 
						<p><strong>Visionando:</strong>	</p>  
						<p><a href="">Dejar de visionar este proyecto</a></p> 

				 </div>
				</div>

				<div class="row">
				 <div class="col-md-12">
						<h4><i class="far fa-calendar-alt"></i> Fechas</h4>
						<p><strong>Prevista:</strong>	<span class="float-right"><?php echo $_smarty_tpl->tpl_vars['V_fecha_prevista']->value;?>
</span></p>
						<p><strong>Creada:</strong>	<span class="float-right"><?php echo $_smarty_tpl->tpl_vars['V_fecha_creada']->value;?>
</span></p>
						<p><strong>Actualizada:</strong>	<span class="float-right"><?php echo $_smarty_tpl->tpl_vars['V_fecha_actualizacion']->value;?>
</span></p>
						<p><strong>Fecha inicio:</strong>	<span class="float-right"><?php echo $_smarty_tpl->tpl_vars['V_fecha_inicio']->value;?>
</span></p>
						<p><strong>Fecha final:</strong>	<span class="float-right"><?php echo $_smarty_tpl->tpl_vars['V_fecha_final']->value;?>
</span></p>
				
				 </div>
				</div>
				<div class="row">
				 <div class="col-md-12">
						<h4><i class="far fa-clock"></i> Cronograma</h4>
						<p><strong>Estimado:</strong> <?php echo $_smarty_tpl->tpl_vars['V_horas_estimadas']->value;?>
h</p>
						<p><strong>Imputado:</strong> </p>
						<p><strong>Restante:</strong> </p>
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
						<p><strong>Tipo:</strong> <?php echo $_smarty_tpl->tpl_vars['V_tipo']->value;?>
</p>
						<p><strong>Estatus:</strong>  <span class="badge badge-warning mayusc"><?php echo $_smarty_tpl->tpl_vars['V_status']->value;?>
</span>  <a href="">(ver flujo)</a></p>
						<p><strong>Prioridad:</strong> <?php echo $_smarty_tpl->tpl_vars['V_prioridad']->value;?>
</p>
					</div>
					<div class="col-md-6">
						<p><strong>Resolución:</strong> <?php echo $_smarty_tpl->tpl_vars['V_resolucion']->value;?>
</p>
						<p><strong>Componentes:</strong> <?php echo $_smarty_tpl->tpl_vars['V_componentes']->value;?>
</p>
						<p><strong>Etiquetas:</strong>  </p>
					</div>
			</div>
         
     

				<div class="row">
				 <div class="col-md-12">
							<h4><i class="far fa-file-alt"></i> Descripción</h4>
							<p><?php echo $_smarty_tpl->tpl_vars['V_descripcion_proyecto']->value;?>
</p>
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
								 	<?php echo $_smarty_tpl->tpl_vars['listaIssuesProyecto']->value;?>

								</tbody>
							</table>
				   </div>
				</div>
				
				
	
				
			<div class="row">
				 <div class="col-md-12">
				<h4><i class="fas fa-paperclip"></i> Archivos adjuntos</h4>	
						
				<form action="/upload.php" method="POST" id="my-awesome-dropzone" class="dropzone"  enctype="multipart/form-data">
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
											
																
											</div>
											<div class="tab-pane" id="tab2">
											<div class="card mb-1">
												   <div class="card-block p-3  thj">
												   
												   
																 </div>
												 </div>
												
											</div>
										</div>
						</div>

																			</div>
			</div>

</div>
</div>
</div>
</div>








			
				</section>
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
<input type="hidden" name="id_issue" value="<?php echo '<?=';?>$id_issue;<?php echo '?>';?>" />	

						
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
						<form id="formuperiodo" method="POST" action="<?php echo '<?=';?>$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";<?php echo '?>';?>">						
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



    <script src='<?php echo $_smarty_tpl->tpl_vars['pathRecursos']->value;?>
/js/jquery.min.js'></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['pathRecursos']->value;?>
/js/popper.min.js"></script>
		<script src="<?php echo $_smarty_tpl->tpl_vars['pathRecursos']->value;?>
/js/bootstrap.min.js"></script>
		<script src="<?php echo $_smarty_tpl->tpl_vars['pathRecursos']->value;?>
/js/sweetalert.min.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['pathRecursos']->value;?>
/js/jquery.cookie.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['pathRecursos']->value;?>
/js/bootstrap-datepicker.min.js"></script>
		<script src="<?php echo $_smarty_tpl->tpl_vars['pathRecursos']->value;?>
/js/jquery.colorbox-min.js"></script>  
    <script src="<?php echo $_smarty_tpl->tpl_vars['pathRecursos']->value;?>
/js/jquery.validate.min.js"></script>
    <script src='<?php echo $_smarty_tpl->tpl_vars['pathRecursos']->value;?>
/js/jquery-resizable.js'></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['pathRecursos']->value;?>
/js/custom.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['pathRecursos']->value;?>
/js/tether.min.js" language="javascript"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['pathRecursos']->value;?>
/js/guardardatos.js" language="javascript"></script>
	  <script src="<?php echo $_smarty_tpl->tpl_vars['pathRecursos']->value;?>
/js/dropzone.min.js" language="javascript"></script>

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

<?php }
}
