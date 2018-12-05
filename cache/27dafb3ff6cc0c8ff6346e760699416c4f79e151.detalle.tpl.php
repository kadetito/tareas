<?php
/* Smarty version 3.1.33, created on 2018-11-26 16:44:33
  from '/var/www/vhosts/webentorn.com/httpdocs/tareas/templates/detalle.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bfc14e16f23f4_95232770',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    '147703e96748ebdb4daf8ee59cc0ab21be894d8f' => 
    array (
      0 => '/var/www/vhosts/webentorn.com/httpdocs/tareas/templates/detalle.tpl',
      1 => 1543055428,
      2 => 'file',
    ),
    'a15911eff599e0504a306a37e95ff2f61f9abb2a' => 
    array (
      0 => '/var/www/vhosts/webentorn.com/httpdocs/tareas/templates/header.tpl',
      1 => 1543055428,
      2 => 'file',
    ),
    'f2f211f1f8c046ba74f52f0e3765fc64a913f818' => 
    array (
      0 => '/var/www/vhosts/webentorn.com/httpdocs/tareas/templates/breadcrumb.tpl',
      1 => 1543055427,
      2 => 'file',
    ),
    '8e9156fee944feea610c6362d214570500cff000' => 
    array (
      0 => '/var/www/vhosts/webentorn.com/httpdocs/tareas/templates/buscador.tpl',
      1 => 1543055427,
      2 => 'file',
    ),
    '0c902fad16c17d39610d7b6f3176e48db92af48f' => 
    array (
      0 => '/var/www/vhosts/webentorn.com/httpdocs/tareas/templates/botonerasuperior.tpl',
      1 => 1543055427,
      2 => 'file',
    ),
    '2c13350764d63d8eb679119de10906005b6ddf83' => 
    array (
      0 => '/var/www/vhosts/webentorn.com/httpdocs/tareas/templates/footer.tpl',
      1 => 1543055428,
      2 => 'file',
    ),
    '8b2248954f6bced1809a001d259270e0c45b1bb6' => 
    array (
      0 => '/var/www/vhosts/webentorn.com/httpdocs/tareas/templates/modales.tpl',
      1 => 1543055429,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 120,
),true)) {
function content_5bfc14e16f23f4_95232770 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
">
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="<?php echo $_smarty_tpl->tpl_vars['pathRecursos']->value;?>
/favicon.ico">
	<title><?php echo $_smarty_tpl->tpl_vars['TEXT_Gestionar_tareas']->value;?>
 - TestBuild () - </title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['pathRecursos']->value;?>
/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['pathRecursos']->value;?>
/css/sweetalert.css" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['pathRecursos']->value;?>
/css/estil.css" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['pathRecursos']->value;?>
/css/colorbox.css" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['pathRecursos']->value;?>
/css/dropzone.css" />   
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/tagmanager/3.0.2/tagmanager.min.css">
</head>
<body>
	<div class="container">
				<header>
				<div class="row">
					<div class="col-12"><div class="container-fluid ">	<div class="row ">
		<div class="col-md-12 ">
			<nav class="navbar navbar-expand-lg navbar-dark fixed-top " >
			 
				<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="navbar-toggler-icon"></span>
				</button> <img class="imagenlogo ml-4" src="<?php echo $_smarty_tpl->tpl_vars['pathRecursos']->value;?>
/img/logowebentorn.png" alt="Logotipo de la empresa" />
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="navbar-nav">
						<li class="nav-item active">
							 <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/index">Dashboard <span class="sr-only">(current)</span></a>
						</li>

						
						<li class="nav-item dropdown">
							 <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown">Lista de proyectos</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								 <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/nuevo_proyecto">Nuevo Proyecto</a> 
								 <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/lp/listaproyectos">Proyectos de esta Suite</a> 
							</div>
						</li>
						
						
						<li class="nav-item dropdown">
							 <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown">Issues</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								 <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a>
								<div class="dropdown-divider">
								</div> <a class="dropdown-item" href="#">Separated link</a>
							</div>
						</li>
						<li class="nav-item dropdown">
							 <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown">Cronograma</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								 <a class="dropdown-item" href="#">Cronograma</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a>
								<div class="dropdown-divider">
								</div> <a class="dropdown-item" href="#">Separated link</a>
							</div>
						</li>
					</ul>
					<ul class="navbar-nav ml-md-auto mr-2">
						<li class="nav-item active">
							 <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/config">Configuración <span class="sr-only">(current)</span></a>
						</li>

						<?php if (isset($_smarty_tpl->tpl_vars['perfil_nombre_usuario']->value)) {?>
							<li class="nav-item dropdown">
								 <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"><?php echo $_smarty_tpl->tpl_vars['WelcomenombreCompletoUsuario']->value;?>
 - Perfil</a>
								<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
									 <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['perfil_id_usuario']->value;?>
/perf/<?php echo $_smarty_tpl->tpl_vars['perfil_nombre_usuario_enc']->value;?>
">Datos Personales</a> 
									 <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/logout">Desconectar</a> 
								</div>
							</li>
						<?php }?> 
					</ul>
				</div>
				</div>
			</nav>
		</div>
	</div>

</div>
				</div>
				</header>
		<section>
				<div class="row">
					<div class="col-12"><nav>
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/">Inicio</a></li>
	 <?php echo $_smarty_tpl->tpl_vars['urlpagina1']->value;?>

   <?php echo $_smarty_tpl->tpl_vars['urlpagina2']->value;?>

   <?php echo $_smarty_tpl->tpl_vars['urlpagina3']->value;?>

   <?php echo $_smarty_tpl->tpl_vars['urlpagina4']->value;?>

   <?php echo $_smarty_tpl->tpl_vars['urlpagina5']->value;?>

   <?php echo $_smarty_tpl->tpl_vars['urlpagina6']->value;?>

   <?php echo $_smarty_tpl->tpl_vars['urlpagina7']->value;?>

	</ol>
</nav></div>
				</div>
				<div class="row">
					 <div class="col-sm-5">
						<h3><?php echo $_smarty_tpl->tpl_vars['D_nombre_build']->value;?>
</h3>
						<h6>Cliente: </h6>
					</div>
					<div class="col-sm-3 text-right resbus"></div>
					<div class="col-sm-4"><form action="" method="POST">
						<div class="input-group">
						   <input type="text" name="valor_busqueda" placeholder="<?php echo $_smarty_tpl->tpl_vars['TEXT_BuscarPorIdTarea']->value;?>
" class="typeahead form-control"  autocomplete="off" />
						   <span class="input-group-btn">
						        <button type="submit" class="btn boton_custom btn-search"><i class="fa fa-search"></i></button>
						   </span>
						</div>
					</form>
					</div>
				</div>
				<div class="row">
				 <div class="col-md-12 mt-4">
				 	 <div class="card mb-4">
				 	 	<div class="card-block p-2"></div>
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
						<p>Asignada a: 						<p><strong>Coordina:</strong>	 <a href=""><?php echo $_smarty_tpl->tpl_vars['D_responsable']->value;?>
</a></p> 
						<p><strong>Visionando:</strong>	</p>  
						<p><a href="">Dejar de visionar esta issue</a></p> 

				 </div>
				</div>

				<div class="row">
				 <div class="col-md-12">
						<h4><i class="far fa-calendar-alt"></i> Fechas</h4>
						<p><strong>Prevista:</strong>	<span class="float-right"><?php echo $_smarty_tpl->tpl_vars['D_fecha_prevista']->value;?>
</span></p>
						<p><strong>Creada:</strong>	<span class="float-right"></span></p>
						<p><strong>Actualizada:</strong>	<span class="float-right"><?php echo $_smarty_tpl->tpl_vars['D_fecha_actualizacion']->value;?>
</span></p>
						<p><strong>Fecha inicio:</strong>	<span class="float-right"><?php echo $_smarty_tpl->tpl_vars['D_fecha_inicio']->value;?>
</span></p>
						<p><strong>Fecha final:</strong>	<span class="float-right"></span></p>
				
				 </div>
				</div>
				<div class="row">
				 <div class="col-md-12">
						<h4><i class="far fa-clock"></i> Cronograma</h4>
						<p><strong>Estimado:</strong> <?php echo $_smarty_tpl->tpl_vars['D_horas_estimadas']->value;?>
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
						<p><strong>Tipo:</strong> <?php echo $_smarty_tpl->tpl_vars['D_tipo']->value;?>
</p>
						<p><strong>Estatus:</strong>  <span class="badge badge-warning mayusc"><?php echo $_smarty_tpl->tpl_vars['D_status']->value;?>
</span>  <a href="">(ver flujo)</a></p>
						<p><strong>Prioridad:</strong> <?php echo $_smarty_tpl->tpl_vars['D_prioridad']->value;?>
</p>
					</div>
					<div class="col-md-6">
						<p><strong>Resolución:</strong> <?php echo $_smarty_tpl->tpl_vars['D_resolucion']->value;?>
</p>
						<p><strong>Componentes:</strong> <?php echo $_smarty_tpl->tpl_vars['D_componentes']->value;?>
</p>
						<p><strong>Etiquetas:</strong>  </p>
					</div>
			</div>
         
     

				<div class="row">
				 <div class="col-md-12">
							<h4><i class="far fa-file-alt"></i> Descripción</h4>
							<p><?php echo $_smarty_tpl->tpl_vars['D_descripcion_proyecto']->value;?>
</p>
				 </div>
				</div>
<div class="row">
				 <div class="col-md-12">
							<h4><i class="far fa-calendar-check"></i> Timing</h4> 
							<p><a id="modal-556073" href="#modal-container-556073" role="button" class="btn" data-toggle="modal"><button class="btn btn-sm ">Imputar horas</button></a>  <a id="modal-556074" href="#modal-container-556074" role="button" class="btn" data-toggle="modal"><button class="btn btn-sm ">Escoger periodo</button></a> <span class="float-right">Periodo: <strong><?php echo '<?php ';?>echo data_first_month_day();<?php echo '?>';?> - <?php echo '<?php ';?>echo data_last_month_day();<?php echo '?>';?></strong></span></p>
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








					<div class="row">
	<div class="col-12 mt-1 mb-4"><?php echo $_smarty_tpl->tpl_vars['TEXT_Developed_by']->value;?>
 <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['webdeveloper']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['developer']->value;?>
</a></div>
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

	  

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tagmanager/3.0.2/tagmanager.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>  
<script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>



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

</body>
</html>

<?php }
}
