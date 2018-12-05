<?php
/* Smarty version 3.1.33, created on 2018-11-29 17:55:32
  from '/var/www/vhosts/webentorn.com/httpdocs/tareas/templates/nuevo_issue.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c001a040a0285_21098546',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    '9307f2fe65a802e68362b7797502462de960bce0' => 
    array (
      0 => '/var/www/vhosts/webentorn.com/httpdocs/tareas/templates/nuevo_issue.tpl',
      1 => 1543510397,
      2 => 'file',
    ),
    'a15911eff599e0504a306a37e95ff2f61f9abb2a' => 
    array (
      0 => '/var/www/vhosts/webentorn.com/httpdocs/tareas/templates/header.tpl',
      1 => 1543510396,
      2 => 'file',
    ),
    'f2f211f1f8c046ba74f52f0e3765fc64a913f818' => 
    array (
      0 => '/var/www/vhosts/webentorn.com/httpdocs/tareas/templates/breadcrumb.tpl',
      1 => 1543510394,
      2 => 'file',
    ),
    '8e9156fee944feea610c6362d214570500cff000' => 
    array (
      0 => '/var/www/vhosts/webentorn.com/httpdocs/tareas/templates/buscador.tpl',
      1 => 1543510395,
      2 => 'file',
    ),
    '2c13350764d63d8eb679119de10906005b6ddf83' => 
    array (
      0 => '/var/www/vhosts/webentorn.com/httpdocs/tareas/templates/footer.tpl',
      1 => 1543510395,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 120,
),true)) {
function content_5c001a040a0285_21098546 (Smarty_Internal_Template $_smarty_tpl) {
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
	<title>NUEVA ISSUE - TestBuild () - </title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['pathRecursos']->value;?>
/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['pathRecursos']->value;?>
/css/bootstrap-datepicker3.min.css" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['pathRecursos']->value;?>
/css/sweetalert.css" />

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['pathRecursos']->value;?>
/css/estil.css" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['pathRecursos']->value;?>
/css/colorbox.css" />
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
					 <div class="col-sm-4 bluethings">
						<h3>Nueva issue</h3>
						<h6><?php echo $_smarty_tpl->tpl_vars['crear_issue_para_proyecto']->value;?>
</h6>
					</div>
					<div class="col-sm-4 text-right resbus"></div>
					<div class="col-sm-4"><form action="" method="POST">
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
				<div class="row">
				 <div class="col-md-12 bluethings">




    <div class="clearfix"></div>
    <hr class="featurette-divider">
  

<form action="" method="POST" id="formularioAltaIssue" class="theforms needs-validation">


<input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['token_issue']->value;?>
" />
<input type="hidden" name="estatus" value="1600006" />
<input type="hidden" name="status" value="1500000" />
<input type="hidden" name="creada_por" value="<?php echo $_smarty_tpl->tpl_vars['perfil_id_usuario']->value;?>
" />
<input type="hidden" name="publico" value="S" />
<input type="hidden" name="fecha_creacion" value="<?php echo $_smarty_tpl->tpl_vars['dateTimedeHoy']->value;?>
" />
<input type="hidden" name="id_cliente" value="<?php echo $_smarty_tpl->tpl_vars['idCliente']->value;?>
" />
<?php echo $_smarty_tpl->tpl_vars['mostrar_selector_proyecto']->value;?>


    <div class="form-group row">
        <div class="col-md-12">
           <label for="nombre_build" class="d-inline-block"><i class="far fa-arrow-alt-circle-right"></i> Nombre de la issue</label><input type="text" placeholder="Por favor, escriba un nombre para la issue" name="nombre_build" value="" class="form-control" />
        </div>
    </div>
    <div class="clearfix"></div>
    <hr class="featurette-divider">
 

     <div class="form-group row">
        <div class="col-md-12">
           <label for="descripcion_build" class="d-inline-block"><i class="far fa-arrow-alt-circle-right"></i> Descripción</label><textarea rows="5" placeholder="Escriba una descripci&oacute;n de m&iacute;nimo 25 palabras" name="descripcion_build" class="form-control"></textarea>
        </div>
    </div>
    <div class="clearfix"></div>
    <hr class="featurette-divider">


    <div class="form-group  row">
        <div class="col-md-4">
		  <label for="tipo" class="d-inline-block"><i class="far fa-arrow-alt-circle-right"></i> Tipo <span><a href="" class="icon_help"><i class="far fa-question-circle"></i></a></span></label><select name="tipo" class="form-control"><?php echo $_smarty_tpl->tpl_vars['tipos_de_proyecto']->value;?>
</select>		
        </div>
        <div class="col-md-4">
		  <label for="prioridad" class="d-inline-block"><i class="far fa-arrow-alt-circle-right"></i> Prioridad <span><a href="" class="icon_help"><i class="far fa-question-circle"></i></a></span></label><select name="prioridad" class="form-control"><?php echo $_smarty_tpl->tpl_vars['tipos_de_prioridad']->value;?>
</select>						
        </div>
        <div class="col-md-4">
      <label for="coordina" class="d-inline-block"><i class="far fa-arrow-alt-circle-right"></i> Responsable <small class="silence">(Se notificará al responsable)</small>  <span><a href="" class="icon_help"><i class="far fa-question-circle"></i></a></span></label><select name="coordina" class="form-control"><?php echo $_smarty_tpl->tpl_vars['lista_usuarios']->value;?>
</select>							
        </div>
    </div>
        <div class="clearfix"></div>
    <hr class="featurette-divider">
      
    <div class="form-group row">
	
        <div class="col-md-2">
		

				<label for="activa"><i class="far fa-arrow-alt-circle-right"></i> Activo <span><a href="" class="icon_help"><i class="far fa-question-circle"></i></a></span></label>

				  <div class="custom-control custom-checkbox mb-3">
				    <input type="checkbox" class="custom-control-input" id="activa" value="S" checked>
				    <label class="custom-control-label" for="activa"><span>proyecto activo</span></label>
				    <div class="invalid-feedback">Example invalid feedback text</div>
				  </div>        
        </div>
        <div class="col-md-6">
					<label for="asignada" class="d-inline-block"><i class="far fa-arrow-alt-circle-right"></i> Asignada a <span><a href="" class="icon_help"><i class="far fa-question-circle"></i></a></span></label>    <select name="asignada" class="form-control"><?php echo $_smarty_tpl->tpl_vars['lista_usuarios_asignados']->value;?>
</select>
        </div>
        <div class="col-md-4">
    			<label for="componentes" class="d-inline-block"><i class="far fa-arrow-alt-circle-right"></i> Componentes <small><a href="" class="silence">( <i class="far fa-edit"></i> gestionar componentes)</a></small> <span><a href="" class="icon_help"><i class="far fa-question-circle"></i></a></span></label><select name="componentes" class="form-control"><?php echo $_smarty_tpl->tpl_vars['componentes']->value;?>
</select>				
        </div>
    </div>

 

    <div class="clearfix"></div>
    <hr class="featurette-divider">

    <div class="form-group row">
        <div class="col-md-4"><label for="fecha_inicio"><i class="far fa-arrow-alt-circle-right"></i> Fecha inicio <span><a href="#"  data-toggle="tooltip" title="Hooray!" class="icon_help"><i class="far fa-question-circle"></i></a></span></label>
						<div class="input-group date" id="datetimepicker1"><input placeholder="Fecha de inicio del proyecto" type="text" name="fecha_inicio" class="form-control" readonly autocomplete="off" id="datetimepicker1" /> <span class="input-group-addon"><i class='fas fa-calendar-alt fa-2x'></i></span></div>
        </div>
        <div class="col-md-4"><label for="fecha_prevista"><i class="far fa-arrow-alt-circle-right"></i> Fecha fin prevista <span><a href="#"  data-toggle="tooltip" title="Hooray!" class="icon_help"><i class="far fa-question-circle"></i></a></span></label>
						<div class="input-group date" id="datetimepicker1"><input type="text" placeholder="Fecha prevista para finalizar" name="fecha_prevista" class="form-control" readonly autocomplete="off" id="datetimepicker2" /> <span class="input-group-addon"><i class='fas fa-calendar-alt fa-2x'></i></span></div>
        </div>
        <div class="col-md-4"><label for="horas_estimadas"><i class="far fa-arrow-alt-circle-right"></i> Horas estimadas <span><a href="#"  data-toggle="tooltip" title="Las horas destinadas a este proyecto. tenga en cuenta que las issues vinculadas no podrán sobrepasar esta cantidad de horas en el cómputo global" class="icon_help"><i class="far fa-question-circle"></i></a></span></label>
						<div class="input-group date" ><input type="text" placeholder="número de horas previstas" name="horas_estimadas" class="form-control"  autocomplete="off"  /></div>
        </div>
    </div>

    <div class="form-group  row mb-4">
        <div class="col-md-12 text-center mt-4">
					<input type="submit" name="alta_issue" value="Crear issue" class="btn boton_custom btn-grande" />				
        </div>
    </div>    
        
</form>



    <div class="clearfix"></div>
    <hr class="featurette-divider">


		       			




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
		<script src="<?php echo $_smarty_tpl->tpl_vars['pathRecursos']->value;?>
/js/jquery.colorbox-min.js"></script>  
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>


    <script src='<?php echo $_smarty_tpl->tpl_vars['pathRecursos']->value;?>
/js/jquery-resizable.js'></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['pathRecursos']->value;?>
/js/custom.js"></script>
    <?php echo $_smarty_tpl->tpl_vars['selector_del_validador']->value;?>

    <script src="<?php echo $_smarty_tpl->tpl_vars['pathRecursos']->value;?>
/js/tether.min.js" language="javascript"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['pathRecursos']->value;?>
/js/lectura_autosugern.js" language="javascript"></script>


 

<script>

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
        //navbar.css("background-color", "rgba(32, 131, 177, 1");
        $nav.removeClass('notscrolled_internas');
        $nav.addClass('scrolled_internas');
    } else {
        //navbar.css("background-color", "rgba(0, 0, 0, 1");
        $nav.removeClass('scrolled_internas');
        $nav.addClass('notscrolled_internas');
    }
}
</script>


	</body>
</html>

<?php }
}
