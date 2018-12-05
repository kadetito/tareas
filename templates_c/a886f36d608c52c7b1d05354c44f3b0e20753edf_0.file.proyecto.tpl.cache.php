<?php
/* Smarty version 3.1.33, created on 2018-11-18 12:49:49
  from '/var/www/vhosts/webentorn.com/httpdocs/tareas/templates/proyecto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf151ddb86882_96537141',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    'a886f36d608c52c7b1d05354c44f3b0e20753edf' => 
    array (
      0 => '/var/www/vhosts/webentorn.com/httpdocs/tareas/templates/proyecto.tpl',
      1 => 1542541634,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/breadcrumb.tpl' => 1,
    'file:templates/buscador.tpl' => 1,
    'file:templates/botonerasuperior.tpl' => 1,
    'file:templates/footer.tpl' => 1,
    'file:templates/modales.tpl' => 1,
  ),
),false)) {
function content_5bf151ddb86882_96537141 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '16414218145bf151ddb1fc22_77277645';
?>
<!DOCTYPE html>
<html lang="<?php echo '/*%%SmartyNocache:16414218145bf151ddb1fc22_77277645%%*/<?php echo $_smarty_tpl->tpl_vars[\'language\']->value;?>
/*/%%SmartyNocache:16414218145bf151ddb1fc22_77277645%%*/';?>
">
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['metas']->value;?>
">
	<meta name="author" content="<?php echo $_smarty_tpl->tpl_vars['autor']->value;?>
">
	<link rel="icon" href="<?php echo '/*%%SmartyNocache:16414218145bf151ddb1fc22_77277645%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:16414218145bf151ddb1fc22_77277645%%*/';?>
/favicon.ico">
	<title><?php echo '/*%%SmartyNocache:16414218145bf151ddb1fc22_77277645%%*/<?php echo $_smarty_tpl->tpl_vars[\'TEXT_Gestionar_tareas\']->value;?>
/*/%%SmartyNocache:16414218145bf151ddb1fc22_77277645%%*/';?>
 - TestBuild (<?php echo $_smarty_tpl->tpl_vars['version']->value;?>
) - <?php echo $_smarty_tpl->tpl_vars['nombre_proyecto']->value;?>
</title>
    <link rel="stylesheet" href="<?php echo '/*%%SmartyNocache:16414218145bf151ddb1fc22_77277645%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:16414218145bf151ddb1fc22_77277645%%*/';?>
/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo '/*%%SmartyNocache:16414218145bf151ddb1fc22_77277645%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:16414218145bf151ddb1fc22_77277645%%*/';?>
/css/sweetalert.css" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <link rel="stylesheet" href="<?php echo '/*%%SmartyNocache:16414218145bf151ddb1fc22_77277645%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:16414218145bf151ddb1fc22_77277645%%*/';?>
/css/estil.css" />
    <link rel="stylesheet" href="<?php echo '/*%%SmartyNocache:16414218145bf151ddb1fc22_77277645%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:16414218145bf151ddb1fc22_77277645%%*/';?>
/css/colorbox.css" />
    <link rel="stylesheet" href="<?php echo '/*%%SmartyNocache:16414218145bf151ddb1fc22_77277645%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:16414218145bf151ddb1fc22_77277645%%*/';?>
/css/dropzone.css" />   
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/tagmanager/3.0.2/tagmanager.min.css">
</head>
<body>
	<div class="container">
				<header>
				<div class="row">
					<div class="col-12"><?php $_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?></div>
				</div>
				</header>
		<section>
				<div class="row">
					<div class="col-12"><?php $_smarty_tpl->_subTemplateRender("file:templates/breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?></div>
				</div>
				<div class="row">
					 <div class="col-sm-5">
						<h3><?php echo '/*%%SmartyNocache:16414218145bf151ddb1fc22_77277645%%*/<?php echo $_smarty_tpl->tpl_vars[\'V_nombre_proyecto\']->value;?>
/*/%%SmartyNocache:16414218145bf151ddb1fc22_77277645%%*/';?>
</h3>
						<h6>Cliente: </h6>
					</div>
					<div class="col-sm-3 text-right resbus"></div>
					<div class="col-sm-4"><?php $_smarty_tpl->_subTemplateRender("file:templates/buscador.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?></div>
				</div>
				<div class="row">
				 <div class="col-md-12 mt-4">
				 	 <div class="card mb-4">
				 	 	<div class="card-block p-2"><?php $_smarty_tpl->_subTemplateRender("file:templates/botonerasuperior.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?></div>
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
						<p><strong>Coordina:</strong>	 <a href=""><?php echo '/*%%SmartyNocache:16414218145bf151ddb1fc22_77277645%%*/<?php echo $_smarty_tpl->tpl_vars[\'V_responsable\']->value;?>
/*/%%SmartyNocache:16414218145bf151ddb1fc22_77277645%%*/';?>
</a></p> 
						<p><strong>Visionando:</strong>	</p>  
						<p><a href="">Dejar de visionar este proyecto</a></p> 

				 </div>
				</div>

				<div class="row">
				 <div class="col-md-12">
						<h4><i class="far fa-calendar-alt"></i> Fechas</h4>
						<p><strong>Prevista:</strong>	<span class="float-right"><?php echo '/*%%SmartyNocache:16414218145bf151ddb1fc22_77277645%%*/<?php echo $_smarty_tpl->tpl_vars[\'V_fecha_prevista\']->value;?>
/*/%%SmartyNocache:16414218145bf151ddb1fc22_77277645%%*/';?>
</span></p>
						<p><strong>Creada:</strong>	<span class="float-right"><?php echo '/*%%SmartyNocache:16414218145bf151ddb1fc22_77277645%%*/<?php echo $_smarty_tpl->tpl_vars[\'V_fecha_creada\']->value;?>
/*/%%SmartyNocache:16414218145bf151ddb1fc22_77277645%%*/';?>
</span></p>
						<p><strong>Actualizada:</strong>	<span class="float-right"><?php echo '/*%%SmartyNocache:16414218145bf151ddb1fc22_77277645%%*/<?php echo $_smarty_tpl->tpl_vars[\'V_fecha_actualizacion\']->value;?>
/*/%%SmartyNocache:16414218145bf151ddb1fc22_77277645%%*/';?>
</span></p>
						<p><strong>Fecha inicio:</strong>	<span class="float-right"><?php echo '/*%%SmartyNocache:16414218145bf151ddb1fc22_77277645%%*/<?php echo $_smarty_tpl->tpl_vars[\'V_fecha_inicio\']->value;?>
/*/%%SmartyNocache:16414218145bf151ddb1fc22_77277645%%*/';?>
</span></p>
						<p><strong>Fecha final:</strong>	<span class="float-right"><?php echo '/*%%SmartyNocache:16414218145bf151ddb1fc22_77277645%%*/<?php echo $_smarty_tpl->tpl_vars[\'V_fecha_final\']->value;?>
/*/%%SmartyNocache:16414218145bf151ddb1fc22_77277645%%*/';?>
</span></p>
				
				 </div>
				</div>
				<div class="row">
				 <div class="col-md-12">
						<h4><i class="far fa-clock"></i> Cronograma</h4>
						<p><strong>Estimado:</strong> <?php echo '/*%%SmartyNocache:16414218145bf151ddb1fc22_77277645%%*/<?php echo $_smarty_tpl->tpl_vars[\'V_horas_estimadas\']->value;?>
/*/%%SmartyNocache:16414218145bf151ddb1fc22_77277645%%*/';?>
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
						<p><strong>Tipo:</strong> <?php echo '/*%%SmartyNocache:16414218145bf151ddb1fc22_77277645%%*/<?php echo $_smarty_tpl->tpl_vars[\'V_tipo\']->value;?>
/*/%%SmartyNocache:16414218145bf151ddb1fc22_77277645%%*/';?>
</p>
						<p><strong>Estatus:</strong>  <span class="badge badge-warning mayusc"><?php echo '/*%%SmartyNocache:16414218145bf151ddb1fc22_77277645%%*/<?php echo $_smarty_tpl->tpl_vars[\'V_status\']->value;?>
/*/%%SmartyNocache:16414218145bf151ddb1fc22_77277645%%*/';?>
</span>  <a href="">(ver flujo)</a></p>
						<p><strong>Prioridad:</strong> <?php echo '/*%%SmartyNocache:16414218145bf151ddb1fc22_77277645%%*/<?php echo $_smarty_tpl->tpl_vars[\'V_prioridad\']->value;?>
/*/%%SmartyNocache:16414218145bf151ddb1fc22_77277645%%*/';?>
</p>
					</div>
					<div class="col-md-6">
						<p><strong>Resolución:</strong> <?php echo '/*%%SmartyNocache:16414218145bf151ddb1fc22_77277645%%*/<?php echo $_smarty_tpl->tpl_vars[\'V_resolucion\']->value;?>
/*/%%SmartyNocache:16414218145bf151ddb1fc22_77277645%%*/';?>
</p>
						<p><strong>Componentes:</strong> <?php echo '/*%%SmartyNocache:16414218145bf151ddb1fc22_77277645%%*/<?php echo $_smarty_tpl->tpl_vars[\'V_componentes\']->value;?>
/*/%%SmartyNocache:16414218145bf151ddb1fc22_77277645%%*/';?>
</p>
						<p><strong>Etiquetas:</strong>  </p>
					</div>
			</div>
         
     

				<div class="row">
				 <div class="col-md-12">
							<h4><i class="far fa-file-alt"></i> Descripción</h4>
							<p><?php echo '/*%%SmartyNocache:16414218145bf151ddb1fc22_77277645%%*/<?php echo $_smarty_tpl->tpl_vars[\'V_descripcion_proyecto\']->value;?>
/*/%%SmartyNocache:16414218145bf151ddb1fc22_77277645%%*/';?>
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
								 	<?php echo '/*%%SmartyNocache:16414218145bf151ddb1fc22_77277645%%*/<?php echo $_smarty_tpl->tpl_vars[\'listaIssuesProyecto\']->value;?>
/*/%%SmartyNocache:16414218145bf151ddb1fc22_77277645%%*/';?>

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








					<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>	
				</section>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:templates/modales.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>




    <?php echo '<script'; ?>
 src='<?php echo '/*%%SmartyNocache:16414218145bf151ddb1fc22_77277645%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:16414218145bf151ddb1fc22_77277645%%*/';?>
/js/jquery.min.js'><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo '/*%%SmartyNocache:16414218145bf151ddb1fc22_77277645%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:16414218145bf151ddb1fc22_77277645%%*/';?>
/js/popper.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo '/*%%SmartyNocache:16414218145bf151ddb1fc22_77277645%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:16414218145bf151ddb1fc22_77277645%%*/';?>
/js/bootstrap.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo '/*%%SmartyNocache:16414218145bf151ddb1fc22_77277645%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:16414218145bf151ddb1fc22_77277645%%*/';?>
/js/sweetalert.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo '/*%%SmartyNocache:16414218145bf151ddb1fc22_77277645%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:16414218145bf151ddb1fc22_77277645%%*/';?>
/js/jquery.cookie.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo '/*%%SmartyNocache:16414218145bf151ddb1fc22_77277645%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:16414218145bf151ddb1fc22_77277645%%*/';?>
/js/bootstrap-datepicker.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo '/*%%SmartyNocache:16414218145bf151ddb1fc22_77277645%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:16414218145bf151ddb1fc22_77277645%%*/';?>
/js/jquery.colorbox-min.js"><?php echo '</script'; ?>
>  
    <?php echo '<script'; ?>
 src="<?php echo '/*%%SmartyNocache:16414218145bf151ddb1fc22_77277645%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:16414218145bf151ddb1fc22_77277645%%*/';?>
/js/jquery.validate.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src='<?php echo '/*%%SmartyNocache:16414218145bf151ddb1fc22_77277645%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:16414218145bf151ddb1fc22_77277645%%*/';?>
/js/jquery-resizable.js'><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo '/*%%SmartyNocache:16414218145bf151ddb1fc22_77277645%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:16414218145bf151ddb1fc22_77277645%%*/';?>
/js/custom.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo '/*%%SmartyNocache:16414218145bf151ddb1fc22_77277645%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:16414218145bf151ddb1fc22_77277645%%*/';?>
/js/tether.min.js" language="javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo '/*%%SmartyNocache:16414218145bf151ddb1fc22_77277645%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:16414218145bf151ddb1fc22_77277645%%*/';?>
/js/guardardatos.js" language="javascript"><?php echo '</script'; ?>
>
	  <?php echo '<script'; ?>
 src="<?php echo '/*%%SmartyNocache:16414218145bf151ddb1fc22_77277645%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:16414218145bf151ddb1fc22_77277645%%*/';?>
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

</body>
</html>

<?php }
}
