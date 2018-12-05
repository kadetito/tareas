<?php
/* Smarty version 3.1.33, created on 2018-11-29 20:58:56
  from '/var/www/vhosts/webentorn.com/httpdocs/tareas/templates/buscador.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c00450089af26_19940644',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    '8e9156fee944feea610c6362d214570500cff000' => 
    array (
      0 => '/var/www/vhosts/webentorn.com/httpdocs/tareas/templates/buscador.tpl',
      1 => 1543510395,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c00450089af26_19940644 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1042094155c004500897280_95856940';
?>
<form action="" method="POST">
						<div class="input-group chwrapper">
						   <input type="text" name="valor_busqueda" placeholder="<?php echo '/*%%SmartyNocache:1042094155c004500897280_95856940%%*/<?php echo $_smarty_tpl->tpl_vars[\'TEXT_BuscarPorIdTarea\']->value;?>
/*/%%SmartyNocache:1042094155c004500897280_95856940%%*/';?>
" class="typeahead form-control"  autocomplete="off" />
						   <span class="input-group-btn">
						        <button type="submit" class="btn boton_custom btn-search"><i class="fa fa-search"></i></button>
						   </span>
						</div>
					</form>
					<?php }
}
