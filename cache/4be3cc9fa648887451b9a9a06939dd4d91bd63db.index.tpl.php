<?php
/* Smarty version 3.1.33, created on 2018-11-29 16:19:52
  from '/var/www/vhosts/webentorn.com/httpdocs/tareas/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c000398c1ad47_76911847',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    'd7dcb8a0927a5e3422397853275d0c1a3a0eae25' => 
    array (
      0 => '/var/www/vhosts/webentorn.com/httpdocs/tareas/templates/index.tpl',
      1 => 1543496835,
      2 => 'file',
    ),
    'a15911eff599e0504a306a37e95ff2f61f9abb2a' => 
    array (
      0 => '/var/www/vhosts/webentorn.com/httpdocs/tareas/templates/header.tpl',
      1 => 1543496834,
      2 => 'file',
    ),
    '8e9156fee944feea610c6362d214570500cff000' => 
    array (
      0 => '/var/www/vhosts/webentorn.com/httpdocs/tareas/templates/buscador.tpl',
      1 => 1543496833,
      2 => 'file',
    ),
    '8b2248954f6bced1809a001d259270e0c45b1bb6' => 
    array (
      0 => '/var/www/vhosts/webentorn.com/httpdocs/tareas/templates/modales.tpl',
      1 => 1543496836,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 120,
),true)) {
function content_5c000398c1ad47_76911847 (Smarty_Internal_Template $_smarty_tpl) {
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
</head>
<body class="dashboardbackground">

<div class="container-fluid">
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
								 <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/nueva_issue">Nueva Issue</a> 
								 <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/li/listaissues">Listado de Issues</a> <a class="dropdown-item" href="#">Something else here</a>
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

				<div class="row titulosseccion mb-2 pl-3">
					 <div class="col-sm-5 mt-3">
						<h3>Escritorio principal</h3>
						<h6><?php echo $_smarty_tpl->tpl_vars['TEXT_ListadodeTareas']->value;?>
</h6>
					</div>
					<div class="col-sm-3 text-right resbus mt-3">
					  <form action="" method="POST">
					    <select name="filtrado" class="form-control" onchange="this.form.submit()">
					    	<?php echo $_smarty_tpl->tpl_vars['optionSeleccionada']->value;?>

						     <option value=""><?php echo $_smarty_tpl->tpl_vars['TXT_FORM_filtrar_issues']->value;?>
</option>
						     <option value=""><?php echo $_smarty_tpl->tpl_vars['TXT_FORM_ver_todo']->value;?>
</option>
	
						     <option value="prioridad"><?php echo $_smarty_tpl->tpl_vars['TXT_FORM_prioridad']->value;?>
</option>
					       <option value="fecha_creacion"><?php echo $_smarty_tpl->tpl_vars['TXT_FORM_fecha_creacion']->value;?>
</option>
					       <option value="nombre_build"><?php echo $_smarty_tpl->tpl_vars['TXT_FORM_nombre_build']->value;?>
</option>
     <option value="1600000"><?php echo $_smarty_tpl->tpl_vars['TXT_FORM_Aplazada']->value;?>
</option>
					       <option value="1600001"><?php echo $_smarty_tpl->tpl_vars['TXT_FORM_EnSupervision']->value;?>
</option>
					       <option value="1600002"><?php echo $_smarty_tpl->tpl_vars['TXT_FORM_Dudasinternas']->value;?>
</option>
					       <option value="1600003"><?php echo $_smarty_tpl->tpl_vars['TXT_FORM_Consultacliente']->value;?>
</option>
					       <option value="1600004"><?php echo $_smarty_tpl->tpl_vars['TXT_FORM_Completada']->value;?>
</option>
					       <option value="1600005"><?php echo $_smarty_tpl->tpl_vars['TXT_FORM_Detenida']->value;?>
</option>
					       
					       <option value="1500002"><?php echo $_smarty_tpl->tpl_vars['TXT_FORM_endesarrollo']->value;?>
</option>
					       <option value="1500001"><?php echo $_smarty_tpl->tpl_vars['TXT_FORM_test']->value;?>
</option>
					       <option value="1500005"><?php echo $_smarty_tpl->tpl_vars['TXT_FORM_resuelta']->value;?>
</option>
					       <option value="1500003"><?php echo $_smarty_tpl->tpl_vars['TXT_FORM_reabierta']->value;?>
</option>
					       <option value="1500000"><?php echo $_smarty_tpl->tpl_vars['TXT_FORM_abierta']->value;?>
</option>
					       <option value="1500004"><?php echo $_smarty_tpl->tpl_vars['TXT_FORM_cerrada']->value;?>
</option>
					       <option value="<?php echo $_smarty_tpl->tpl_vars['perfil_id_usuario']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['TXT_FORM_asignadasAmi']->value;?>
</option>
					    </select>
					  </form>
					 </div>
					<div class="col-sm-4 mt-3"><form action="" method="POST">
						<div class="input-group chwrapper">
						   <input type="text" name="valor_busqueda" placeholder="<?php echo $_smarty_tpl->tpl_vars['TEXT_BuscarPorIdTarea']->value;?>
" class="typeahead form-control"  autocomplete="off" />
						   <span class="input-group-btn">
						        <button type="submit" class="btn boton_custom btn-search"><i class="fa fa-search"></i></button>
						   </span>
						</div>
					</form>
					</div>
				</div>
				
				
 <div class="card-columns mt-5"><?php echo $_smarty_tpl->tpl_vars['bucleTablaBuilds']->value;?>
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


    <script src="<?php echo $_smarty_tpl->tpl_vars['pathRecursos']->value;?>
/js/jquery-3.2.1.min.js"></script>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>


    <script src="<?php echo $_smarty_tpl->tpl_vars['pathRecursos']->value;?>
/js/tether.min.js" language="javascript"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['pathRecursos']->value;?>
/js/lectura_autosugern.js" language="javascript"></script>


 <script> 
$(document).ready(function () {
    checkHeaderStatus()
    $(window).scroll(function () {
        checkHeaderStatus()
    });
});

function checkHeaderStatus() {
    var navbar = $(".fixed-top");
    var $nav = $(".fixed-top");
    var scrollPosition = $(window).scrollTop();
    if (scrollPosition === 0) {
        //navbar.css("background-color", "transparent");
        $nav.removeClass('notscrolled');
        $nav.addClass('scrolled');
    } else {
        //navbar.css("background-color", "rgba(0, 0, 0, 1");
        $nav.removeClass('scrolled');
        $nav.addClass('notscrolled');
    }
}
</script>





	</body>
</html>

<?php }
}
