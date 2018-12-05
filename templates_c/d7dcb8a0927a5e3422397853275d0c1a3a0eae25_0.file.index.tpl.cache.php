<?php
/* Smarty version 3.1.33, created on 2018-11-29 16:19:52
  from '/var/www/vhosts/webentorn.com/httpdocs/tareas/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c000398b6d992_71986416',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    'd7dcb8a0927a5e3422397853275d0c1a3a0eae25' => 
    array (
      0 => '/var/www/vhosts/webentorn.com/httpdocs/tareas/templates/index.tpl',
      1 => 1543496835,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/buscador.tpl' => 1,
    'file:templates/modales.tpl' => 1,
  ),
),false)) {
function content_5c000398b6d992_71986416 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '8108341735c000398ad20c2_61863577';
?>
<!DOCTYPE html>
<html lang="<?php echo '/*%%SmartyNocache:8108341735c000398ad20c2_61863577%%*/<?php echo $_smarty_tpl->tpl_vars[\'language\']->value;?>
/*/%%SmartyNocache:8108341735c000398ad20c2_61863577%%*/';?>
">
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['metas']->value;?>
">
	<meta name="author" content="<?php echo $_smarty_tpl->tpl_vars['autor']->value;?>
">
	<link rel="icon" href="<?php echo '/*%%SmartyNocache:8108341735c000398ad20c2_61863577%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:8108341735c000398ad20c2_61863577%%*/';?>
/favicon.ico">
	<title><?php echo '/*%%SmartyNocache:8108341735c000398ad20c2_61863577%%*/<?php echo $_smarty_tpl->tpl_vars[\'TEXT_Gestionar_tareas\']->value;?>
/*/%%SmartyNocache:8108341735c000398ad20c2_61863577%%*/';?>
 - TestBuild (<?php echo $_smarty_tpl->tpl_vars['version']->value;?>
) - <?php echo $_smarty_tpl->tpl_vars['nombre_proyecto']->value;?>
</title>
    <link rel="stylesheet" href="<?php echo '/*%%SmartyNocache:8108341735c000398ad20c2_61863577%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:8108341735c000398ad20c2_61863577%%*/';?>
/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo '/*%%SmartyNocache:8108341735c000398ad20c2_61863577%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:8108341735c000398ad20c2_61863577%%*/';?>
/css/sweetalert.css" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <link rel="stylesheet" href="<?php echo '/*%%SmartyNocache:8108341735c000398ad20c2_61863577%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:8108341735c000398ad20c2_61863577%%*/';?>
/css/estil.css" />
    <link rel="stylesheet" href="<?php echo '/*%%SmartyNocache:8108341735c000398ad20c2_61863577%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:8108341735c000398ad20c2_61863577%%*/';?>
/css/colorbox.css" />
</head>
<body class="dashboardbackground">

<div class="container-fluid">
<header>
					<div class="row">
						<div class="col-12"><?php $_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?></div>
					</div>
				</header>

				<div class="row titulosseccion mb-2 pl-3">
					 <div class="col-sm-5 mt-3">
						<h3>Escritorio principal</h3>
						<h6><?php echo '/*%%SmartyNocache:8108341735c000398ad20c2_61863577%%*/<?php echo $_smarty_tpl->tpl_vars[\'TEXT_ListadodeTareas\']->value;?>
/*/%%SmartyNocache:8108341735c000398ad20c2_61863577%%*/';?>
</h6>
					</div>
					<div class="col-sm-3 text-right resbus mt-3">
					  <form action="" method="POST">
					    <select name="filtrado" class="form-control" onchange="this.form.submit()">
					    	<?php echo '/*%%SmartyNocache:8108341735c000398ad20c2_61863577%%*/<?php echo $_smarty_tpl->tpl_vars[\'optionSeleccionada\']->value;?>
/*/%%SmartyNocache:8108341735c000398ad20c2_61863577%%*/';?>

						     <option value=""><?php echo '/*%%SmartyNocache:8108341735c000398ad20c2_61863577%%*/<?php echo $_smarty_tpl->tpl_vars[\'TXT_FORM_filtrar_issues\']->value;?>
/*/%%SmartyNocache:8108341735c000398ad20c2_61863577%%*/';?>
</option>
						     <option value=""><?php echo '/*%%SmartyNocache:8108341735c000398ad20c2_61863577%%*/<?php echo $_smarty_tpl->tpl_vars[\'TXT_FORM_ver_todo\']->value;?>
/*/%%SmartyNocache:8108341735c000398ad20c2_61863577%%*/';?>
</option>
	
						     <option value="prioridad"><?php echo '/*%%SmartyNocache:8108341735c000398ad20c2_61863577%%*/<?php echo $_smarty_tpl->tpl_vars[\'TXT_FORM_prioridad\']->value;?>
/*/%%SmartyNocache:8108341735c000398ad20c2_61863577%%*/';?>
</option>
					       <option value="fecha_creacion"><?php echo '/*%%SmartyNocache:8108341735c000398ad20c2_61863577%%*/<?php echo $_smarty_tpl->tpl_vars[\'TXT_FORM_fecha_creacion\']->value;?>
/*/%%SmartyNocache:8108341735c000398ad20c2_61863577%%*/';?>
</option>
					       <option value="nombre_build"><?php echo '/*%%SmartyNocache:8108341735c000398ad20c2_61863577%%*/<?php echo $_smarty_tpl->tpl_vars[\'TXT_FORM_nombre_build\']->value;?>
/*/%%SmartyNocache:8108341735c000398ad20c2_61863577%%*/';?>
</option>
     <option value="1600000"><?php echo '/*%%SmartyNocache:8108341735c000398ad20c2_61863577%%*/<?php echo $_smarty_tpl->tpl_vars[\'TXT_FORM_Aplazada\']->value;?>
/*/%%SmartyNocache:8108341735c000398ad20c2_61863577%%*/';?>
</option>
					       <option value="1600001"><?php echo '/*%%SmartyNocache:8108341735c000398ad20c2_61863577%%*/<?php echo $_smarty_tpl->tpl_vars[\'TXT_FORM_EnSupervision\']->value;?>
/*/%%SmartyNocache:8108341735c000398ad20c2_61863577%%*/';?>
</option>
					       <option value="1600002"><?php echo '/*%%SmartyNocache:8108341735c000398ad20c2_61863577%%*/<?php echo $_smarty_tpl->tpl_vars[\'TXT_FORM_Dudasinternas\']->value;?>
/*/%%SmartyNocache:8108341735c000398ad20c2_61863577%%*/';?>
</option>
					       <option value="1600003"><?php echo '/*%%SmartyNocache:8108341735c000398ad20c2_61863577%%*/<?php echo $_smarty_tpl->tpl_vars[\'TXT_FORM_Consultacliente\']->value;?>
/*/%%SmartyNocache:8108341735c000398ad20c2_61863577%%*/';?>
</option>
					       <option value="1600004"><?php echo '/*%%SmartyNocache:8108341735c000398ad20c2_61863577%%*/<?php echo $_smarty_tpl->tpl_vars[\'TXT_FORM_Completada\']->value;?>
/*/%%SmartyNocache:8108341735c000398ad20c2_61863577%%*/';?>
</option>
					       <option value="1600005"><?php echo '/*%%SmartyNocache:8108341735c000398ad20c2_61863577%%*/<?php echo $_smarty_tpl->tpl_vars[\'TXT_FORM_Detenida\']->value;?>
/*/%%SmartyNocache:8108341735c000398ad20c2_61863577%%*/';?>
</option>
					       
					       <option value="1500002"><?php echo '/*%%SmartyNocache:8108341735c000398ad20c2_61863577%%*/<?php echo $_smarty_tpl->tpl_vars[\'TXT_FORM_endesarrollo\']->value;?>
/*/%%SmartyNocache:8108341735c000398ad20c2_61863577%%*/';?>
</option>
					       <option value="1500001"><?php echo '/*%%SmartyNocache:8108341735c000398ad20c2_61863577%%*/<?php echo $_smarty_tpl->tpl_vars[\'TXT_FORM_test\']->value;?>
/*/%%SmartyNocache:8108341735c000398ad20c2_61863577%%*/';?>
</option>
					       <option value="1500005"><?php echo '/*%%SmartyNocache:8108341735c000398ad20c2_61863577%%*/<?php echo $_smarty_tpl->tpl_vars[\'TXT_FORM_resuelta\']->value;?>
/*/%%SmartyNocache:8108341735c000398ad20c2_61863577%%*/';?>
</option>
					       <option value="1500003"><?php echo '/*%%SmartyNocache:8108341735c000398ad20c2_61863577%%*/<?php echo $_smarty_tpl->tpl_vars[\'TXT_FORM_reabierta\']->value;?>
/*/%%SmartyNocache:8108341735c000398ad20c2_61863577%%*/';?>
</option>
					       <option value="1500000"><?php echo '/*%%SmartyNocache:8108341735c000398ad20c2_61863577%%*/<?php echo $_smarty_tpl->tpl_vars[\'TXT_FORM_abierta\']->value;?>
/*/%%SmartyNocache:8108341735c000398ad20c2_61863577%%*/';?>
</option>
					       <option value="1500004"><?php echo '/*%%SmartyNocache:8108341735c000398ad20c2_61863577%%*/<?php echo $_smarty_tpl->tpl_vars[\'TXT_FORM_cerrada\']->value;?>
/*/%%SmartyNocache:8108341735c000398ad20c2_61863577%%*/';?>
</option>
					       <option value="<?php echo '/*%%SmartyNocache:8108341735c000398ad20c2_61863577%%*/<?php echo $_smarty_tpl->tpl_vars[\'perfil_id_usuario\']->value;?>
/*/%%SmartyNocache:8108341735c000398ad20c2_61863577%%*/';?>
"><?php echo '/*%%SmartyNocache:8108341735c000398ad20c2_61863577%%*/<?php echo $_smarty_tpl->tpl_vars[\'TXT_FORM_asignadasAmi\']->value;?>
/*/%%SmartyNocache:8108341735c000398ad20c2_61863577%%*/';?>
</option>
					    </select>
					  </form>
					 </div>
					<div class="col-sm-4 mt-3"><?php $_smarty_tpl->_subTemplateRender("file:templates/buscador.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?></div>
				</div>
				
				
 <div class="card-columns mt-5"><?php echo '/*%%SmartyNocache:8108341735c000398ad20c2_61863577%%*/<?php echo $_smarty_tpl->tpl_vars[\'bucleTablaBuilds\']->value;?>
/*/%%SmartyNocache:8108341735c000398ad20c2_61863577%%*/';?>
</div>
					
			
</div>
<?php $_smarty_tpl->_subTemplateRender("file:templates/modales.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



    <?php echo '<script'; ?>
 src="<?php echo '/*%%SmartyNocache:8108341735c000398ad20c2_61863577%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:8108341735c000398ad20c2_61863577%%*/';?>
/js/jquery-3.2.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo '/*%%SmartyNocache:8108341735c000398ad20c2_61863577%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:8108341735c000398ad20c2_61863577%%*/';?>
/js/popper.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo '/*%%SmartyNocache:8108341735c000398ad20c2_61863577%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:8108341735c000398ad20c2_61863577%%*/';?>
/js/bootstrap.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo '/*%%SmartyNocache:8108341735c000398ad20c2_61863577%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:8108341735c000398ad20c2_61863577%%*/';?>
/js/sweetalert.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo '/*%%SmartyNocache:8108341735c000398ad20c2_61863577%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:8108341735c000398ad20c2_61863577%%*/';?>
/js/jquery.cookie.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo '/*%%SmartyNocache:8108341735c000398ad20c2_61863577%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:8108341735c000398ad20c2_61863577%%*/';?>
/js/bootstrap-datepicker.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo '/*%%SmartyNocache:8108341735c000398ad20c2_61863577%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:8108341735c000398ad20c2_61863577%%*/';?>
/js/jquery.colorbox-min.js"><?php echo '</script'; ?>
>  
    <?php echo '<script'; ?>
 src="<?php echo '/*%%SmartyNocache:8108341735c000398ad20c2_61863577%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:8108341735c000398ad20c2_61863577%%*/';?>
/js/jquery.validate.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src='<?php echo '/*%%SmartyNocache:8108341735c000398ad20c2_61863577%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:8108341735c000398ad20c2_61863577%%*/';?>
/js/jquery-resizable.js'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"><?php echo '</script'; ?>
>


    <?php echo '<script'; ?>
 src="<?php echo '/*%%SmartyNocache:8108341735c000398ad20c2_61863577%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:8108341735c000398ad20c2_61863577%%*/';?>
/js/tether.min.js" language="javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo '/*%%SmartyNocache:8108341735c000398ad20c2_61863577%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:8108341735c000398ad20c2_61863577%%*/';?>
/js/lectura_autosugern.js" language="javascript"><?php echo '</script'; ?>
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
        //navbar.css("background-color", "transparent");
        $nav.removeClass('notscrolled');
        $nav.addClass('scrolled');
    } else {
        //navbar.css("background-color", "rgba(0, 0, 0, 1");
        $nav.removeClass('scrolled');
        $nav.addClass('notscrolled');
    }
}
<?php echo '</script'; ?>
>





	</body>
</html>

<?php }
}
