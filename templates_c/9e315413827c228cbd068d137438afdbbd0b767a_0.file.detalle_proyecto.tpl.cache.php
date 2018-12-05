<?php
/* Smarty version 3.1.33, created on 2018-11-29 17:22:23
  from '/var/www/vhosts/webentorn.com/httpdocs/tareas/templates/detalle_proyecto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c00123f847ad4_35431611',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    '9e315413827c228cbd068d137438afdbbd0b767a' => 
    array (
      0 => '/var/www/vhosts/webentorn.com/httpdocs/tareas/templates/detalle_proyecto.tpl',
      1 => 1543508446,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/modales.tpl' => 1,
  ),
),false)) {
function content_5c00123f847ad4_35431611 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '307502655c00123f7b2d70_75122199';
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
						<p><strong>Coordina:</strong>	 <a href=""><?php echo '/*%%SmartyNocache:307502655c00123f7b2d70_75122199%%*/<?php echo $_smarty_tpl->tpl_vars[\'V_responsable\']->value;?>
/*/%%SmartyNocache:307502655c00123f7b2d70_75122199%%*/';?>
</a></p> 
						<p><strong>Visionando:</strong>	</p>  
						<p><a href="">Dejar de visionar este proyecto</a></p> 

				 </div>
				</div>

				<div class="row">
				 <div class="col-md-12">
						<h4><i class="far fa-calendar-alt"></i> Fechas</h4>
						<p><strong>Prevista:</strong>	<span class="float-right"><?php echo '/*%%SmartyNocache:307502655c00123f7b2d70_75122199%%*/<?php echo $_smarty_tpl->tpl_vars[\'V_fecha_prevista\']->value;?>
/*/%%SmartyNocache:307502655c00123f7b2d70_75122199%%*/';?>
</span></p>
						<p><strong>Creada:</strong>	<span class="float-right"><?php echo '/*%%SmartyNocache:307502655c00123f7b2d70_75122199%%*/<?php echo $_smarty_tpl->tpl_vars[\'V_fecha_creada\']->value;?>
/*/%%SmartyNocache:307502655c00123f7b2d70_75122199%%*/';?>
</span></p>
						<p><strong>Actualizada:</strong>	<span class="float-right"><?php echo '/*%%SmartyNocache:307502655c00123f7b2d70_75122199%%*/<?php echo $_smarty_tpl->tpl_vars[\'V_fecha_actualizacion\']->value;?>
/*/%%SmartyNocache:307502655c00123f7b2d70_75122199%%*/';?>
</span></p>
						<p><strong>Fecha inicio:</strong>	<span class="float-right"><?php echo '/*%%SmartyNocache:307502655c00123f7b2d70_75122199%%*/<?php echo $_smarty_tpl->tpl_vars[\'V_fecha_inicio\']->value;?>
/*/%%SmartyNocache:307502655c00123f7b2d70_75122199%%*/';?>
</span></p>
						<p><strong>Fecha final:</strong>	<span class="float-right"><?php echo '/*%%SmartyNocache:307502655c00123f7b2d70_75122199%%*/<?php echo $_smarty_tpl->tpl_vars[\'V_fecha_final\']->value;?>
/*/%%SmartyNocache:307502655c00123f7b2d70_75122199%%*/';?>
</span></p>
				
				 </div>
				</div>
				<div class="row">
				 <div class="col-md-12">
						<h4><i class="far fa-clock"></i> Cronograma</h4>
						<p><strong>Estimado:</strong> <?php echo '/*%%SmartyNocache:307502655c00123f7b2d70_75122199%%*/<?php echo $_smarty_tpl->tpl_vars[\'V_horas_estimadas\']->value;?>
/*/%%SmartyNocache:307502655c00123f7b2d70_75122199%%*/';?>
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
						<p><strong>Tipo:</strong> <?php echo '/*%%SmartyNocache:307502655c00123f7b2d70_75122199%%*/<?php echo $_smarty_tpl->tpl_vars[\'V_tipo\']->value;?>
/*/%%SmartyNocache:307502655c00123f7b2d70_75122199%%*/';?>
</p>
						<p><strong>Estatus:</strong>  <span class="badge badge-warning mayusc"><?php echo '/*%%SmartyNocache:307502655c00123f7b2d70_75122199%%*/<?php echo $_smarty_tpl->tpl_vars[\'V_status\']->value;?>
/*/%%SmartyNocache:307502655c00123f7b2d70_75122199%%*/';?>
</span>  <a href="">(ver flujo)</a></p>
						<p><strong>Prioridad:</strong> <?php echo '/*%%SmartyNocache:307502655c00123f7b2d70_75122199%%*/<?php echo $_smarty_tpl->tpl_vars[\'V_prioridad\']->value;?>
/*/%%SmartyNocache:307502655c00123f7b2d70_75122199%%*/';?>
</p>
					</div>
					<div class="col-md-6">
						<p><strong>Resolución:</strong> <?php echo '/*%%SmartyNocache:307502655c00123f7b2d70_75122199%%*/<?php echo $_smarty_tpl->tpl_vars[\'V_resolucion\']->value;?>
/*/%%SmartyNocache:307502655c00123f7b2d70_75122199%%*/';?>
</p>
						<p><strong>Componentes:</strong> <?php echo '/*%%SmartyNocache:307502655c00123f7b2d70_75122199%%*/<?php echo $_smarty_tpl->tpl_vars[\'V_componentes\']->value;?>
/*/%%SmartyNocache:307502655c00123f7b2d70_75122199%%*/';?>
</p>
						<p><strong>Etiquetas:</strong>  </p>
					</div>
			</div>
         
     

				<div class="row">
				 <div class="col-md-12">
							<h4><i class="far fa-file-alt"></i> Descripción</h4>
							<p><?php echo '/*%%SmartyNocache:307502655c00123f7b2d70_75122199%%*/<?php echo $_smarty_tpl->tpl_vars[\'V_descripcion_proyecto\']->value;?>
/*/%%SmartyNocache:307502655c00123f7b2d70_75122199%%*/';?>
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
								 	<?php echo '/*%%SmartyNocache:307502655c00123f7b2d70_75122199%%*/<?php echo $_smarty_tpl->tpl_vars[\'listaIssuesProyecto\']->value;?>
/*/%%SmartyNocache:307502655c00123f7b2d70_75122199%%*/';?>

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
<?php $_smarty_tpl->_subTemplateRender("file:templates/modales.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>




    <?php echo '<script'; ?>
 src='<?php echo '/*%%SmartyNocache:307502655c00123f7b2d70_75122199%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:307502655c00123f7b2d70_75122199%%*/';?>
/js/jquery.min.js'><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo '/*%%SmartyNocache:307502655c00123f7b2d70_75122199%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:307502655c00123f7b2d70_75122199%%*/';?>
/js/popper.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo '/*%%SmartyNocache:307502655c00123f7b2d70_75122199%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:307502655c00123f7b2d70_75122199%%*/';?>
/js/bootstrap.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo '/*%%SmartyNocache:307502655c00123f7b2d70_75122199%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:307502655c00123f7b2d70_75122199%%*/';?>
/js/sweetalert.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo '/*%%SmartyNocache:307502655c00123f7b2d70_75122199%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:307502655c00123f7b2d70_75122199%%*/';?>
/js/jquery.cookie.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo '/*%%SmartyNocache:307502655c00123f7b2d70_75122199%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:307502655c00123f7b2d70_75122199%%*/';?>
/js/bootstrap-datepicker.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo '/*%%SmartyNocache:307502655c00123f7b2d70_75122199%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:307502655c00123f7b2d70_75122199%%*/';?>
/js/jquery.colorbox-min.js"><?php echo '</script'; ?>
>  
    <?php echo '<script'; ?>
 src="<?php echo '/*%%SmartyNocache:307502655c00123f7b2d70_75122199%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:307502655c00123f7b2d70_75122199%%*/';?>
/js/jquery.validate.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src='<?php echo '/*%%SmartyNocache:307502655c00123f7b2d70_75122199%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:307502655c00123f7b2d70_75122199%%*/';?>
/js/jquery-resizable.js'><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo '/*%%SmartyNocache:307502655c00123f7b2d70_75122199%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:307502655c00123f7b2d70_75122199%%*/';?>
/js/custom.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo '/*%%SmartyNocache:307502655c00123f7b2d70_75122199%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:307502655c00123f7b2d70_75122199%%*/';?>
/js/tether.min.js" language="javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo '/*%%SmartyNocache:307502655c00123f7b2d70_75122199%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:307502655c00123f7b2d70_75122199%%*/';?>
/js/guardardatos.js" language="javascript"><?php echo '</script'; ?>
>
	  <?php echo '<script'; ?>
 src="<?php echo '/*%%SmartyNocache:307502655c00123f7b2d70_75122199%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:307502655c00123f7b2d70_75122199%%*/';?>
/js/dropzone.min.js" language="javascript"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
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
	<?php echo '</script'; ?>
>	
   
 <?php echo '<script'; ?>
>
		function cargaDatos(){
		      //destinado a la carga de local storage cuando se necesite 
		    document.getElementById("result").innerHTML = localStorage.getItem("idusuario");		
		} 
<?php echo '</script'; ?>
>
   <?php echo '<script'; ?>
 type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tagmanager/3.0.2/tagmanager.min.js"><?php echo '</script'; ?>
>
   <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"><?php echo '</script'; ?>
>  
<?php echo '<script'; ?>
 type="text/javascript">
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
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
		$(document).ready(function(){
		    $("#imputar").click(function(){
		        $("#imputar").prop("disabled", false);
		    });
		});	
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
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
<?php echo '</script'; ?>
>

<?php }
}
