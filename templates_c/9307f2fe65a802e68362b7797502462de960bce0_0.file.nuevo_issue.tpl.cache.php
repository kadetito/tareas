<?php
/* Smarty version 3.1.33, created on 2018-11-29 17:55:32
  from '/var/www/vhosts/webentorn.com/httpdocs/tareas/templates/nuevo_issue.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c001a04024058_73748620',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    '9307f2fe65a802e68362b7797502462de960bce0' => 
    array (
      0 => '/var/www/vhosts/webentorn.com/httpdocs/tareas/templates/nuevo_issue.tpl',
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
function content_5c001a04024058_73748620 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '7501374495c001a03ec7261_68386627';
?>
<!DOCTYPE html>
<html lang="<?php echo '/*%%SmartyNocache:7501374495c001a03ec7261_68386627%%*/<?php echo $_smarty_tpl->tpl_vars[\'language\']->value;?>
/*/%%SmartyNocache:7501374495c001a03ec7261_68386627%%*/';?>
">
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['metas']->value;?>
">
	<meta name="author" content="<?php echo $_smarty_tpl->tpl_vars['autor']->value;?>
">
	<link rel="icon" href="<?php echo '/*%%SmartyNocache:7501374495c001a03ec7261_68386627%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:7501374495c001a03ec7261_68386627%%*/';?>
/favicon.ico">
	<title>NUEVA ISSUE - TestBuild (<?php echo $_smarty_tpl->tpl_vars['version']->value;?>
) - <?php echo $_smarty_tpl->tpl_vars['nombre_proyecto']->value;?>
</title>
    <link rel="stylesheet" href="<?php echo '/*%%SmartyNocache:7501374495c001a03ec7261_68386627%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:7501374495c001a03ec7261_68386627%%*/';?>
/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo '/*%%SmartyNocache:7501374495c001a03ec7261_68386627%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:7501374495c001a03ec7261_68386627%%*/';?>
/css/bootstrap-datepicker3.min.css" />
    <link rel="stylesheet" href="<?php echo '/*%%SmartyNocache:7501374495c001a03ec7261_68386627%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:7501374495c001a03ec7261_68386627%%*/';?>
/css/sweetalert.css" />

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <link rel="stylesheet" href="<?php echo '/*%%SmartyNocache:7501374495c001a03ec7261_68386627%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:7501374495c001a03ec7261_68386627%%*/';?>
/css/estil.css" />
    <link rel="stylesheet" href="<?php echo '/*%%SmartyNocache:7501374495c001a03ec7261_68386627%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:7501374495c001a03ec7261_68386627%%*/';?>
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
						<h3>Nueva issue</h3>
						<h6><?php echo '/*%%SmartyNocache:7501374495c001a03ec7261_68386627%%*/<?php echo $_smarty_tpl->tpl_vars[\'crear_issue_para_proyecto\']->value;?>
/*/%%SmartyNocache:7501374495c001a03ec7261_68386627%%*/';?>
</h6>
					</div>
					<div class="col-sm-4 text-right resbus"></div>
					<div class="col-sm-4"><?php $_smarty_tpl->_subTemplateRender("file:templates/buscador.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?></div>
				</div>
				<div class="row">
				 <div class="col-md-12 bluethings">




    <div class="clearfix"></div>
    <hr class="featurette-divider">
  

<form action="" method="POST" id="formularioAltaIssue" class="theforms needs-validation">


<input type="hidden" name="token" value="<?php echo '/*%%SmartyNocache:7501374495c001a03ec7261_68386627%%*/<?php echo $_smarty_tpl->tpl_vars[\'token_issue\']->value;?>
/*/%%SmartyNocache:7501374495c001a03ec7261_68386627%%*/';?>
" />
<input type="hidden" name="estatus" value="1600006" />
<input type="hidden" name="status" value="1500000" />
<input type="hidden" name="creada_por" value="<?php echo '/*%%SmartyNocache:7501374495c001a03ec7261_68386627%%*/<?php echo $_smarty_tpl->tpl_vars[\'perfil_id_usuario\']->value;?>
/*/%%SmartyNocache:7501374495c001a03ec7261_68386627%%*/';?>
" />
<input type="hidden" name="publico" value="S" />
<input type="hidden" name="fecha_creacion" value="<?php echo '/*%%SmartyNocache:7501374495c001a03ec7261_68386627%%*/<?php echo $_smarty_tpl->tpl_vars[\'dateTimedeHoy\']->value;?>
/*/%%SmartyNocache:7501374495c001a03ec7261_68386627%%*/';?>
" />
<input type="hidden" name="id_cliente" value="<?php echo '/*%%SmartyNocache:7501374495c001a03ec7261_68386627%%*/<?php echo $_smarty_tpl->tpl_vars[\'idCliente\']->value;?>
/*/%%SmartyNocache:7501374495c001a03ec7261_68386627%%*/';?>
" />
<?php echo '/*%%SmartyNocache:7501374495c001a03ec7261_68386627%%*/<?php echo $_smarty_tpl->tpl_vars[\'mostrar_selector_proyecto\']->value;?>
/*/%%SmartyNocache:7501374495c001a03ec7261_68386627%%*/';?>


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
		  <label for="tipo" class="d-inline-block"><i class="far fa-arrow-alt-circle-right"></i> Tipo <span><a href="" class="icon_help"><i class="far fa-question-circle"></i></a></span></label><select name="tipo" class="form-control"><?php echo '/*%%SmartyNocache:7501374495c001a03ec7261_68386627%%*/<?php echo $_smarty_tpl->tpl_vars[\'tipos_de_proyecto\']->value;?>
/*/%%SmartyNocache:7501374495c001a03ec7261_68386627%%*/';?>
</select>		
        </div>
        <div class="col-md-4">
		  <label for="prioridad" class="d-inline-block"><i class="far fa-arrow-alt-circle-right"></i> Prioridad <span><a href="" class="icon_help"><i class="far fa-question-circle"></i></a></span></label><select name="prioridad" class="form-control"><?php echo '/*%%SmartyNocache:7501374495c001a03ec7261_68386627%%*/<?php echo $_smarty_tpl->tpl_vars[\'tipos_de_prioridad\']->value;?>
/*/%%SmartyNocache:7501374495c001a03ec7261_68386627%%*/';?>
</select>						
        </div>
        <div class="col-md-4">
      <label for="coordina" class="d-inline-block"><i class="far fa-arrow-alt-circle-right"></i> Responsable <small class="silence">(Se notificará al responsable)</small>  <span><a href="" class="icon_help"><i class="far fa-question-circle"></i></a></span></label><select name="coordina" class="form-control"><?php echo '/*%%SmartyNocache:7501374495c001a03ec7261_68386627%%*/<?php echo $_smarty_tpl->tpl_vars[\'lista_usuarios\']->value;?>
/*/%%SmartyNocache:7501374495c001a03ec7261_68386627%%*/';?>
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
					<label for="asignada" class="d-inline-block"><i class="far fa-arrow-alt-circle-right"></i> Asignada a <span><a href="" class="icon_help"><i class="far fa-question-circle"></i></a></span></label>    <select name="asignada" class="form-control"><?php echo '/*%%SmartyNocache:7501374495c001a03ec7261_68386627%%*/<?php echo $_smarty_tpl->tpl_vars[\'lista_usuarios_asignados\']->value;?>
/*/%%SmartyNocache:7501374495c001a03ec7261_68386627%%*/';?>
</select>
        </div>
        <div class="col-md-4">
    			<label for="componentes" class="d-inline-block"><i class="far fa-arrow-alt-circle-right"></i> Componentes <small><a href="" class="silence">( <i class="far fa-edit"></i> gestionar componentes)</a></small> <span><a href="" class="icon_help"><i class="far fa-question-circle"></i></a></span></label><select name="componentes" class="form-control"><?php echo '/*%%SmartyNocache:7501374495c001a03ec7261_68386627%%*/<?php echo $_smarty_tpl->tpl_vars[\'componentes\']->value;?>
/*/%%SmartyNocache:7501374495c001a03ec7261_68386627%%*/';?>
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


<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>				
				</section>
</div>
    <?php echo '<script'; ?>
 src="<?php echo '/*%%SmartyNocache:7501374495c001a03ec7261_68386627%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:7501374495c001a03ec7261_68386627%%*/';?>
/js/jquery-3.2.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo '/*%%SmartyNocache:7501374495c001a03ec7261_68386627%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:7501374495c001a03ec7261_68386627%%*/';?>
/js/popper.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo '/*%%SmartyNocache:7501374495c001a03ec7261_68386627%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:7501374495c001a03ec7261_68386627%%*/';?>
/js/bootstrap.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo '/*%%SmartyNocache:7501374495c001a03ec7261_68386627%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:7501374495c001a03ec7261_68386627%%*/';?>
/js/sweetalert.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo '/*%%SmartyNocache:7501374495c001a03ec7261_68386627%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:7501374495c001a03ec7261_68386627%%*/';?>
/js/jquery.cookie.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo '/*%%SmartyNocache:7501374495c001a03ec7261_68386627%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:7501374495c001a03ec7261_68386627%%*/';?>
/js/bootstrap-datepicker.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo '/*%%SmartyNocache:7501374495c001a03ec7261_68386627%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:7501374495c001a03ec7261_68386627%%*/';?>
/js/jquery.colorbox-min.js"><?php echo '</script'; ?>
>  
    <?php echo '<script'; ?>
 src="<?php echo '/*%%SmartyNocache:7501374495c001a03ec7261_68386627%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:7501374495c001a03ec7261_68386627%%*/';?>
/js/jquery.validate.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo '/*%%SmartyNocache:7501374495c001a03ec7261_68386627%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:7501374495c001a03ec7261_68386627%%*/';?>
/js/jquery.colorbox-min.js"><?php echo '</script'; ?>
>  
	<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"><?php echo '</script'; ?>
>


    <?php echo '<script'; ?>
 src='<?php echo '/*%%SmartyNocache:7501374495c001a03ec7261_68386627%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:7501374495c001a03ec7261_68386627%%*/';?>
/js/jquery-resizable.js'><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo '/*%%SmartyNocache:7501374495c001a03ec7261_68386627%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:7501374495c001a03ec7261_68386627%%*/';?>
/js/custom.js"><?php echo '</script'; ?>
>
    <?php echo '/*%%SmartyNocache:7501374495c001a03ec7261_68386627%%*/<?php echo $_smarty_tpl->tpl_vars[\'selector_del_validador\']->value;?>
/*/%%SmartyNocache:7501374495c001a03ec7261_68386627%%*/';?>

    <?php echo '<script'; ?>
 src="<?php echo '/*%%SmartyNocache:7501374495c001a03ec7261_68386627%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:7501374495c001a03ec7261_68386627%%*/';?>
/js/tether.min.js" language="javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo '/*%%SmartyNocache:7501374495c001a03ec7261_68386627%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:7501374495c001a03ec7261_68386627%%*/';?>
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
