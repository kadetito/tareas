<?php
/* Smarty version 3.1.33, created on 2018-11-29 20:58:56
  from '/var/www/vhosts/webentorn.com/httpdocs/tareas/templates/nuevo_proyecto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c00450083c820_25996522',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    '22eed18fc0765512fb2f4155e64d9e6219906dbd' => 
    array (
      0 => '/var/www/vhosts/webentorn.com/httpdocs/tareas/templates/nuevo_proyecto.tpl',
      1 => 1543510397,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/breadcrumb.tpl' => 1,
    'file:templates/buscador.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5c00450083c820_25996522 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '2235155855c004500738617_61468100';
?>
<!DOCTYPE html>
<html lang="<?php echo '/*%%SmartyNocache:2235155855c004500738617_61468100%%*/<?php echo $_smarty_tpl->tpl_vars[\'language\']->value;?>
/*/%%SmartyNocache:2235155855c004500738617_61468100%%*/';?>
">
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['metas']->value;?>
">
	<meta name="author" content="<?php echo $_smarty_tpl->tpl_vars['autor']->value;?>
">
	<link rel="icon" href="<?php echo '/*%%SmartyNocache:2235155855c004500738617_61468100%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:2235155855c004500738617_61468100%%*/';?>
/favicon.ico">
	<title>NUEVO PROYECTO - TestBuild (<?php echo $_smarty_tpl->tpl_vars['version']->value;?>
) - <?php echo $_smarty_tpl->tpl_vars['nombre_proyecto']->value;?>
</title>
    <link rel="stylesheet" href="<?php echo '/*%%SmartyNocache:2235155855c004500738617_61468100%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:2235155855c004500738617_61468100%%*/';?>
/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo '/*%%SmartyNocache:2235155855c004500738617_61468100%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:2235155855c004500738617_61468100%%*/';?>
/css/bootstrap-datepicker3.min.css" />
    <link rel="stylesheet" href="<?php echo '/*%%SmartyNocache:2235155855c004500738617_61468100%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:2235155855c004500738617_61468100%%*/';?>
/css/sweetalert.css" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <link rel="stylesheet" href="<?php echo '/*%%SmartyNocache:2235155855c004500738617_61468100%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:2235155855c004500738617_61468100%%*/';?>
/css/estil.css" />
    <link rel="stylesheet" href="<?php echo '/*%%SmartyNocache:2235155855c004500738617_61468100%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:2235155855c004500738617_61468100%%*/';?>
/css/colorbox.css" />
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
					 <div class="col-sm-4 bluethings">
						<h3>Nuevo proyecto</h3>
						<h6>Crear un nuevo proyecto para este cliente</h6>
					</div>
					<div class="col-sm-4 text-right resbus"></div>
					<div class="col-sm-4"><?php $_smarty_tpl->_subTemplateRender("file:templates/buscador.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?></div>
				</div>
				<div class="row">
				 <div class="col-md-12 bluethings">




    <div class="clearfix"></div>
    <hr class="featurette-divider">


<form action="" method="POST" id="formularioNuevoProyecto" class="theforms needs-validation">

<input type="hidden" name="publico" value="S" />
<input type="hidden" name="fecha_creacion" value="<?php echo '/*%%SmartyNocache:2235155855c004500738617_61468100%%*/<?php echo $_smarty_tpl->tpl_vars[\'dateTimedeHoy\']->value;?>
/*/%%SmartyNocache:2235155855c004500738617_61468100%%*/';?>
" />
<input type="hidden" name="id_cliente" value="<?php echo '/*%%SmartyNocache:2235155855c004500738617_61468100%%*/<?php echo $_smarty_tpl->tpl_vars[\'idCliente\']->value;?>
/*/%%SmartyNocache:2235155855c004500738617_61468100%%*/';?>
" />
    <div class="form-group row">
        <div class="col-md-12">
           <label for="nombre_proyecto" class="d-inline-block"><i class="far fa-arrow-alt-circle-right"></i> Nombre del proyecto</label><input type="text" placeholder="Por favor, escriba un nombre para el proyecto" name="nombre_proyecto" value="" class="form-control" />
        </div>
    </div>
    
        <div class="clearfix"></div>
    <hr class="featurette-divider">
    
    <div class="form-group  row">
        <div class="col-md-4">
		  <label for="tipo" class="d-inline-block"><i class="far fa-arrow-alt-circle-right"></i> Tipo <span><a href="" class="icon_help"><i class="far fa-question-circle"></i></a></span></label><select name="tipo" class="form-control"><?php echo '/*%%SmartyNocache:2235155855c004500738617_61468100%%*/<?php echo $_smarty_tpl->tpl_vars[\'tipos_de_proyecto\']->value;?>
/*/%%SmartyNocache:2235155855c004500738617_61468100%%*/';?>
</select>		
        </div>
        <div class="col-md-4">
		  <label for="prioridad" class="d-inline-block"><i class="far fa-arrow-alt-circle-right"></i> Prioridad <span><a href="" class="icon_help"><i class="far fa-question-circle"></i></a></span></label><select name="prioridad" class="form-control"><?php echo '/*%%SmartyNocache:2235155855c004500738617_61468100%%*/<?php echo $_smarty_tpl->tpl_vars[\'tipos_de_prioridad\']->value;?>
/*/%%SmartyNocache:2235155855c004500738617_61468100%%*/';?>
</select>						
        </div>
        <div class="col-md-4">
      <label for="responsable" class="d-inline-block"><i class="far fa-arrow-alt-circle-right"></i> Responsable <small class="silence">(Se notificará al responsable)</small>  <span><a href="" class="icon_help"><i class="far fa-question-circle"></i></a></span></label><select name="responsable" class="form-control"><?php echo '/*%%SmartyNocache:2235155855c004500738617_61468100%%*/<?php echo $_smarty_tpl->tpl_vars[\'lista_usuarios\']->value;?>
/*/%%SmartyNocache:2235155855c004500738617_61468100%%*/';?>
</select>							
        </div>
    </div>
        <div class="clearfix"></div>
    <hr class="featurette-divider">
      <div class="form-group  row">
        <div class="col-md-12">
		   <label for="descripcion_proyecto" class="d-inline-block"><i class="far fa-arrow-alt-circle-right"></i> Descripción del proyecto</label><textarea rows="8" name="descripcion_proyecto" placeholder="Por favor, escriba una descripci&oacute;n del proyecto" class="form-control"></textarea>				
        </div>
    </div>  
    <div class="clearfix"></div>
    <hr class="featurette-divider">
    <div class="form-group row">
	
        <div class="col-md-2">
		

				    <label for="activo"><i class="far fa-arrow-alt-circle-right"></i> Activo <span><a href="" class="icon_help"><i class="far fa-question-circle"></i></a></span></label>
	
				  
				  <div class="custom-control custom-checkbox mb-3">
				    <input type="checkbox" class="custom-control-input" id="activo" value="S" checked>
				    <label class="custom-control-label" for="activo"><span>proyecto activo</span></label>
				    <div class="invalid-feedback">Example invalid feedback text</div>
				  </div>        
        </div>
        <div class="col-md-3">
					<label for="estatus" class="d-inline-block"><i class="far fa-arrow-alt-circle-right"></i> Estatus <span><a href="" class="icon_help"><i class="far fa-question-circle"></i></a></span></label>    <select name="estatus" class="form-control"><?php echo '/*%%SmartyNocache:2235155855c004500738617_61468100%%*/<?php echo $_smarty_tpl->tpl_vars[\'tipos_de_estatus\']->value;?>
/*/%%SmartyNocache:2235155855c004500738617_61468100%%*/';?>
</select>
        </div>
        <div class="col-md-3">
					<label for="status" class="d-inline-block"><i class="far fa-arrow-alt-circle-right"></i> Status <span><a href="" class="icon_help"><i class="far fa-question-circle"></i></a></span></label><select name="status" class="form-control"><?php echo '/*%%SmartyNocache:2235155855c004500738617_61468100%%*/<?php echo $_smarty_tpl->tpl_vars[\'tipos_de_Status\']->value;?>
/*/%%SmartyNocache:2235155855c004500738617_61468100%%*/';?>
</select> 				
        </div>
        <div class="col-md-4">
    			<label for="componentes" class="d-inline-block"><i class="far fa-arrow-alt-circle-right"></i> Componentes <small><a href="" class="silence">( <i class="far fa-edit"></i> gestionar componentes)</a></small> <span><a href="" class="icon_help"><i class="far fa-question-circle"></i></a></span></label><select name="componentes" class="form-control"><?php echo '/*%%SmartyNocache:2235155855c004500738617_61468100%%*/<?php echo $_smarty_tpl->tpl_vars[\'componentes\']->value;?>
/*/%%SmartyNocache:2235155855c004500738617_61468100%%*/';?>
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
					<input type="submit" name="alta_proyecto" value="Crear Proyecto" class="btn boton_custom btn-grande" />				
        </div>
    </div>    
        
</form>



    <div class="clearfix"></div>
    <hr class="featurette-divider">


		       			




				 </div>
			  </div>


<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>				
				</section>
</div>
    <?php echo '<script'; ?>
 src="<?php echo '/*%%SmartyNocache:2235155855c004500738617_61468100%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:2235155855c004500738617_61468100%%*/';?>
/js/jquery-3.2.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo '/*%%SmartyNocache:2235155855c004500738617_61468100%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:2235155855c004500738617_61468100%%*/';?>
/js/popper.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo '/*%%SmartyNocache:2235155855c004500738617_61468100%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:2235155855c004500738617_61468100%%*/';?>
/js/bootstrap.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo '/*%%SmartyNocache:2235155855c004500738617_61468100%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:2235155855c004500738617_61468100%%*/';?>
/js/sweetalert.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo '/*%%SmartyNocache:2235155855c004500738617_61468100%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:2235155855c004500738617_61468100%%*/';?>
/js/jquery.cookie.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo '/*%%SmartyNocache:2235155855c004500738617_61468100%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:2235155855c004500738617_61468100%%*/';?>
/js/bootstrap-datepicker.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo '/*%%SmartyNocache:2235155855c004500738617_61468100%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:2235155855c004500738617_61468100%%*/';?>
/js/jquery.colorbox-min.js"><?php echo '</script'; ?>
>  
    <?php echo '<script'; ?>
 src="<?php echo '/*%%SmartyNocache:2235155855c004500738617_61468100%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:2235155855c004500738617_61468100%%*/';?>
/js/jquery.validate.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo '/*%%SmartyNocache:2235155855c004500738617_61468100%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:2235155855c004500738617_61468100%%*/';?>
/js/jquery.colorbox-min.js"><?php echo '</script'; ?>
>  
	<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 src='<?php echo '/*%%SmartyNocache:2235155855c004500738617_61468100%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:2235155855c004500738617_61468100%%*/';?>
/js/jquery-resizable.js'><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo '/*%%SmartyNocache:2235155855c004500738617_61468100%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:2235155855c004500738617_61468100%%*/';?>
/js/custom.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo '/*%%SmartyNocache:2235155855c004500738617_61468100%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:2235155855c004500738617_61468100%%*/';?>
/js/tether.min.js" language="javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo '/*%%SmartyNocache:2235155855c004500738617_61468100%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:2235155855c004500738617_61468100%%*/';?>
/js/lectura_autosugern.js" language="javascript"><?php echo '</script'; ?>
>


 

<?php echo '<script'; ?>
>

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

 <?php echo '<script'; ?>
> 
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
<?php echo '</script'; ?>
>


	</body>
</html>

<?php }
}
