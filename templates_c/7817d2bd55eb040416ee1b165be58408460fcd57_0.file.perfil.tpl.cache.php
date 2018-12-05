<?php
/* Smarty version 3.1.33, created on 2018-11-23 20:54:04
  from '/var/www/vhosts/webentorn.com/httpdocs/tareas/templates/perfil.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf85adc926c11_42611517',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    '7817d2bd55eb040416ee1b165be58408460fcd57' => 
    array (
      0 => '/var/www/vhosts/webentorn.com/httpdocs/tareas/templates/perfil.tpl',
      1 => 1543002570,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/breadcrumb.tpl' => 1,
    'file:templates/buscador.tpl' => 1,
    'file:templates/footer.tpl' => 1,
    'file:templates/modales.tpl' => 1,
  ),
),false)) {
function content_5bf85adc926c11_42611517 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '7100483355bf85adc77d4b1_49756540';
?>
<!DOCTYPE html>
<html lang="<?php echo '/*%%SmartyNocache:7100483355bf85adc77d4b1_49756540%%*/<?php echo $_smarty_tpl->tpl_vars[\'language\']->value;?>
/*/%%SmartyNocache:7100483355bf85adc77d4b1_49756540%%*/';?>
">
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['metas']->value;?>
">
	<meta name="author" content="<?php echo $_smarty_tpl->tpl_vars['autor']->value;?>
">
	<link rel="icon" href="<?php echo '/*%%SmartyNocache:7100483355bf85adc77d4b1_49756540%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:7100483355bf85adc77d4b1_49756540%%*/';?>
/favicon.ico">
	<title>PERFIL - TestBuild (<?php echo $_smarty_tpl->tpl_vars['version']->value;?>
) - <?php echo $_smarty_tpl->tpl_vars['nombre_proyecto']->value;?>
</title>
    <link rel="stylesheet" href="<?php echo '/*%%SmartyNocache:7100483355bf85adc77d4b1_49756540%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:7100483355bf85adc77d4b1_49756540%%*/';?>
/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo '/*%%SmartyNocache:7100483355bf85adc77d4b1_49756540%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:7100483355bf85adc77d4b1_49756540%%*/';?>
/css/sweetalert.css" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <link rel="stylesheet" href="<?php echo '/*%%SmartyNocache:7100483355bf85adc77d4b1_49756540%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:7100483355bf85adc77d4b1_49756540%%*/';?>
/css/estil.css" />
    <link rel="stylesheet" href="<?php echo '/*%%SmartyNocache:7100483355bf85adc77d4b1_49756540%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:7100483355bf85adc77d4b1_49756540%%*/';?>
/css/colorbox.css" />
    <link rel="stylesheet" href="<?php echo '/*%%SmartyNocache:7100483355bf85adc77d4b1_49756540%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:7100483355bf85adc77d4b1_49756540%%*/';?>
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
						<h3><?php echo '/*%%SmartyNocache:7100483355bf85adc77d4b1_49756540%%*/<?php echo $_smarty_tpl->tpl_vars[\'perfil_nombre_usuario\']->value;?>
/*/%%SmartyNocache:7100483355bf85adc77d4b1_49756540%%*/';?>
</h3>
						<h6>Cargo: <?php echo '/*%%SmartyNocache:7100483355bf85adc77d4b1_49756540%%*/<?php echo $_smarty_tpl->tpl_vars[\'perfil_nombre_usuario\']->value;?>
/*/%%SmartyNocache:7100483355bf85adc77d4b1_49756540%%*/';?>
</h6>
					</div>
					<div class="col-sm-3 text-right resbus"></div>
					<div class="col-sm-4"><?php $_smarty_tpl->_subTemplateRender("file:templates/buscador.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?></div>
				</div>

				
<div class="row cambiosizefont">				
	<div class="col-md-3 mt-0">
	 <div class="card">
	  <div class="card-block p-3 ">
		<div class="row">
				 <div class="col-md-12">
						<h4><i class="far fa-user"></i> Perfil</h4>
						<p>Foto</p>
						<p><strong>Nombre:</strong>	<?php echo '/*%%SmartyNocache:7100483355bf85adc77d4b1_49756540%%*/<?php echo $_smarty_tpl->tpl_vars[\'perfil_nombre_usuario\']->value;?>
/*/%%SmartyNocache:7100483355bf85adc77d4b1_49756540%%*/';?>
</p> 
						<p><strong>Cargo:</strong>	Cargo</p>
						<p><strong>Privilegios:</strong> Privilegios de acceso</p>						
						<p><a href="">Dejar de visionar esta issue</a></p> 

				 </div>
				</div>

				<div class="row">
				 <div class="col-md-12">
						<h4><i class="far fa-calendar-alt"></i> Fechas</h4>
						<p><strong>Fecha de alta:</strong>	<span class="float-right"><?php echo '/*%%SmartyNocache:7100483355bf85adc77d4b1_49756540%%*/<?php echo $_smarty_tpl->tpl_vars[\'D_fecha_prevista\']->value;?>
/*/%%SmartyNocache:7100483355bf85adc77d4b1_49756540%%*/';?>
</span></p>
						<p><strong>Fecha Actuali:</strong>	<span class="float-right"><?php echo '/*%%SmartyNocache:7100483355bf85adc77d4b1_49756540%%*/<?php echo $_smarty_tpl->tpl_vars[\'D_fecha_actualizacion\']->value;?>
/*/%%SmartyNocache:7100483355bf85adc77d4b1_49756540%%*/';?>
</span></p>
						<p><strong>Horas Imputadas en total:</strong>	horas</p>
						<p><strong>Cronograma:</strong>	enlace a cronograma</p>
				
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
				 <div class="col-md-12">
							<h4><i class="far fa-calendar-check"></i> Issues (issues asignadas, issues visionando, issues como responsable (pestañas tab)</h4> 
							<p><a id="modal-556073" href="#modal-container-556073" role="button" class="btn" data-toggle="modal"><button class="btn btn-sm ">Imputar horas</button></a>  <a id="modal-556074" href="#modal-container-556074" role="button" class="btn" data-toggle="modal"><button class="btn btn-sm ">Escoger periodo</button></a> <span class="float-right">Periodo: <strong><?php echo '/*%%SmartyNocache:7100483355bf85adc77d4b1_49756540%%*/<?php echo \'<?php \';?>/*/%%SmartyNocache:7100483355bf85adc77d4b1_49756540%%*/';?>
echo data_first_month_day();<?php echo '/*%%SmartyNocache:7100483355bf85adc77d4b1_49756540%%*/<?php echo \'?>\';?>/*/%%SmartyNocache:7100483355bf85adc77d4b1_49756540%%*/';?>
 - <?php echo '/*%%SmartyNocache:7100483355bf85adc77d4b1_49756540%%*/<?php echo \'<?php \';?>/*/%%SmartyNocache:7100483355bf85adc77d4b1_49756540%%*/';?>
echo data_last_month_day();<?php echo '/*%%SmartyNocache:7100483355bf85adc77d4b1_49756540%%*/<?php echo \'?>\';?>/*/%%SmartyNocache:7100483355bf85adc77d4b1_49756540%%*/';?>
</strong></span></p>
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
																		</tbody>
							</table>
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
 src='<?php echo '/*%%SmartyNocache:7100483355bf85adc77d4b1_49756540%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:7100483355bf85adc77d4b1_49756540%%*/';?>
/js/jquery.min.js'><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo '/*%%SmartyNocache:7100483355bf85adc77d4b1_49756540%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:7100483355bf85adc77d4b1_49756540%%*/';?>
/js/popper.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo '/*%%SmartyNocache:7100483355bf85adc77d4b1_49756540%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:7100483355bf85adc77d4b1_49756540%%*/';?>
/js/bootstrap.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo '/*%%SmartyNocache:7100483355bf85adc77d4b1_49756540%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:7100483355bf85adc77d4b1_49756540%%*/';?>
/js/sweetalert.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo '/*%%SmartyNocache:7100483355bf85adc77d4b1_49756540%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:7100483355bf85adc77d4b1_49756540%%*/';?>
/js/jquery.cookie.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo '/*%%SmartyNocache:7100483355bf85adc77d4b1_49756540%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:7100483355bf85adc77d4b1_49756540%%*/';?>
/js/bootstrap-datepicker.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo '/*%%SmartyNocache:7100483355bf85adc77d4b1_49756540%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:7100483355bf85adc77d4b1_49756540%%*/';?>
/js/jquery.colorbox-min.js"><?php echo '</script'; ?>
>  
    <?php echo '<script'; ?>
 src="<?php echo '/*%%SmartyNocache:7100483355bf85adc77d4b1_49756540%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:7100483355bf85adc77d4b1_49756540%%*/';?>
/js/jquery.validate.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src='<?php echo '/*%%SmartyNocache:7100483355bf85adc77d4b1_49756540%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:7100483355bf85adc77d4b1_49756540%%*/';?>
/js/jquery-resizable.js'><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo '/*%%SmartyNocache:7100483355bf85adc77d4b1_49756540%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:7100483355bf85adc77d4b1_49756540%%*/';?>
/js/custom.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo '/*%%SmartyNocache:7100483355bf85adc77d4b1_49756540%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:7100483355bf85adc77d4b1_49756540%%*/';?>
/js/tether.min.js" language="javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo '/*%%SmartyNocache:7100483355bf85adc77d4b1_49756540%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:7100483355bf85adc77d4b1_49756540%%*/';?>
/js/guardardatos.js" language="javascript"><?php echo '</script'; ?>
>
	  <?php echo '<script'; ?>
 src="<?php echo '/*%%SmartyNocache:7100483355bf85adc77d4b1_49756540%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:7100483355bf85adc77d4b1_49756540%%*/';?>
/js/dropzone.min.js" language="javascript"><?php echo '</script'; ?>
>

	  

<?php echo '<script'; ?>
 type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tagmanager/3.0.2/tagmanager.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"><?php echo '</script'; ?>
>  
<?php echo '<script'; ?>
 src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'><?php echo '</script'; ?>
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
    todayHighlight: true
});
});
    <?php echo '</script'; ?>
>

</body>
</html>

<?php }
}
