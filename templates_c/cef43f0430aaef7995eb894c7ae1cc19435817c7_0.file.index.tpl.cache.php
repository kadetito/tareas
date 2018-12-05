<?php
/* Smarty version 3.1.33, created on 2018-11-10 00:33:52
  from '/var/www/vhosts/webentorn.com/httpdocs/tareas/templates/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5be61960236a19_46532212',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    'cef43f0430aaef7995eb894c7ae1cc19435817c7' => 
    array (
      0 => '/var/www/vhosts/webentorn.com/httpdocs/tareas/templates/templates/index.tpl',
      1 => 1541806423,
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
function content_5be61960236a19_46532212 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '2609106095be619601a0134_28866663';
?>
<!DOCTYPE html>
<html lang="<?php echo '/*%%SmartyNocache:2609106095be619601a0134_28866663%%*/<?php echo $_smarty_tpl->tpl_vars[\'language\']->value;?>
/*/%%SmartyNocache:2609106095be619601a0134_28866663%%*/';?>
">
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['metas']->value;?>
">
	<meta name="author" content="<?php echo $_smarty_tpl->tpl_vars['autor']->value;?>
;<?php echo '/*%%SmartyNocache:2609106095be619601a0134_28866663%%*/<?php echo \'?>\';?>/*/%%SmartyNocache:2609106095be619601a0134_28866663%%*/';?>
">

	<link rel="icon" href="<?php echo $_smarty_tpl->tpl_vars['pathRecursos']->value;?>
/favicon.ico">
	<title><?php echo $_smarty_tpl->tpl_vars['TEXT_Gestionar_tareas']->value;?>
 - TestBuild (<?php echo $_smarty_tpl->tpl_vars['version']->value;?>
) - <?php echo $_smarty_tpl->tpl_vars['nombre_proyecto']->value;?>
</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['pathRecursos']->value;?>
/css/sweetalert.css">
    <link href="<?php echo $_smarty_tpl->tpl_vars['pathRecursos']->value;?>
/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['pathRecursos']->value;?>
/css/estil.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['pathRecursos']->value;?>
/css/colorbox.css" />
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
					 <div class="col-sm-4">
						<h3><?php echo $_smarty_tpl->tpl_vars['TEXT_ListaTareas']->value;?>
</h3>
						<h6><?php echo $_smarty_tpl->tpl_vars['TEXT_ListadodeTareas']->value;?>
</h6>
					</div>
					<div class="col-sm-4 text-right resbus"></div>
					<div class="col-sm-4"><?php $_smarty_tpl->_subTemplateRender("file:templates/buscador.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?></div>
				</div>
				  
				  
					
				<div class="row">
				 <div class="col-md-12">

						<div class="table-responsive">
								<form action="" id="forumlario" id="forumlario" method="POST"><input type="hidden" name="identiff" value="<?php echo '/*%%SmartyNocache:2609106095be619601a0134_28866663%%*/<?php echo \'<?=\';?>/*/%%SmartyNocache:2609106095be619601a0134_28866663%%*/';?>
//$getId;<?php echo '/*%%SmartyNocache:2609106095be619601a0134_28866663%%*/<?php echo \'?>\';?>/*/%%SmartyNocache:2609106095be619601a0134_28866663%%*/';?>
">
											
											
											
											
											
											
											
											
											
											
											
											
											
											<div class="page-container">
											<table class="table table-bordered table-striped">
																				<thead>
																					<tr>
																						<th>		
																												<input type="checkbox" name="checktodos" id="customCheck555">
																						</th>
																						<th>ID </th>
																						<th><?php echo $_smarty_tpl->tpl_vars['TEXT_Tfechacreacion']->value;?>
</th>
																						<th><div class="float-left"><?php echo $_smarty_tpl->tpl_vars['TEXT_TProyecto']->value;?>
</div><div class="float-right action-buttons"><?php echo '/*%%SmartyNocache:2609106095be619601a0134_28866663%%*/<?php echo \'<?php \';?>/*/%%SmartyNocache:2609106095be619601a0134_28866663%%*/';?>
//funcionOrdenProy();<?php echo '/*%%SmartyNocache:2609106095be619601a0134_28866663%%*/<?php echo \'?>\';?>/*/%%SmartyNocache:2609106095be619601a0134_28866663%%*/';?>
</div></th>
																						<th><?php echo $_smarty_tpl->tpl_vars['TEXT_TNombredelatarea']->value;?>
</th>
																						<th><?php echo $_smarty_tpl->tpl_vars['TEXT_Horas']->value;?>
</th>
																						<th><div class="float-left"><?php echo $_smarty_tpl->tpl_vars['TEXT_Estado']->value;?>
</div><div class="float-right action-buttons"><?php echo '/*%%SmartyNocache:2609106095be619601a0134_28866663%%*/<?php echo \'<?php \';?>/*/%%SmartyNocache:2609106095be619601a0134_28866663%%*/';?>
//funcionOrdenEst();<?php echo '/*%%SmartyNocache:2609106095be619601a0134_28866663%%*/<?php echo \'?>\';?>/*/%%SmartyNocache:2609106095be619601a0134_28866663%%*/';?>
</div></th>
																					</tr>
																				</thead>
																				<tbody>					
																															
								                         
																				</tbody>
											</table>
											
											<input class="btn btn-default" name="eliminacionmasiva" type="submit" value="borrar seleccionados" />
								      <input class="btn btn-default" name="modificacionmasiva" id="modmass" type="submit" value="editar seleccionados" />
								      
								                          
										</div>
								</form>
														<?php echo '/*%%SmartyNocache:2609106095be619601a0134_28866663%%*/<?php echo \'<?php \';?>/*/%%SmartyNocache:2609106095be619601a0134_28866663%%*/';?>
//borrarMasivoProyecto($path,$lengua,$getId,$checkbox,$value,$tabla);<?php echo '/*%%SmartyNocache:2609106095be619601a0134_28866663%%*/<?php echo \'?>\';?>/*/%%SmartyNocache:2609106095be619601a0134_28866663%%*/';?>

														<?php echo '/*%%SmartyNocache:2609106095be619601a0134_28866663%%*/<?php echo \'<?php \';?>/*/%%SmartyNocache:2609106095be619601a0134_28866663%%*/';?>
//editarMasivoProyecto($path,$lengua,$getId,$campo,$valor,$tabla);<?php echo '/*%%SmartyNocache:2609106095be619601a0134_28866663%%*/<?php echo \'?>\';?>/*/%%SmartyNocache:2609106095be619601a0134_28866663%%*/';?>

													  <?php echo '/*%%SmartyNocache:2609106095be619601a0134_28866663%%*/<?php echo \'<?php \';?>/*/%%SmartyNocache:2609106095be619601a0134_28866663%%*/';?>
//eliminarYvolver();<?php echo '/*%%SmartyNocache:2609106095be619601a0134_28866663%%*/<?php echo \'?>\';?>/*/%%SmartyNocache:2609106095be619601a0134_28866663%%*/';?>

							</div>
					</div>

			</div>





					<div class="row">
						<div class="col-md-12 text-center">
															<div class="btn-group">								
																	<div id="pagination_controls"></div>				
															</div>	
					  </div>
					</div>


<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>				

				</section>
	
</div>
	



    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['pathRecursos']->value;?>
/js/jquery-3.2.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['pathRecursos']->value;?>
/js/popper.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['pathRecursos']->value;?>
/js/sweetalert.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['pathRecursos']->value;?>
/js/jquery.cookie.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['pathRecursos']->value;?>
/js/bootstrap-datepicker.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['pathRecursos']->value;?>
/js/jquery.colorbox-min.js"><?php echo '</script'; ?>
>  
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['pathRecursos']->value;?>
/js/jquery.validate.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src='https://rawgit.com/RickStrahl/jquery-resizable/master/src/jquery-resizable.js'><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['pathRecursos']->value;?>
/js/custom.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['pathRecursos']->value;?>
/js/tether.min.js" language="javascript"><?php echo '</script'; ?>
>
    

	</body>
</html>

<?php }
}
