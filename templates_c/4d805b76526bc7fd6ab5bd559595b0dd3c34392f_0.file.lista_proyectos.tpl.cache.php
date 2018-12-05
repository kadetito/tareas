<?php
/* Smarty version 3.1.33, created on 2018-11-29 20:58:55
  from '/var/www/vhosts/webentorn.com/httpdocs/tareas/templates/lista_proyectos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c0044ff8e6277_29656699',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    '4d805b76526bc7fd6ab5bd559595b0dd3c34392f' => 
    array (
      0 => '/var/www/vhosts/webentorn.com/httpdocs/tareas/templates/lista_proyectos.tpl',
      1 => 1543510396,
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
function content_5c0044ff8e6277_29656699 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '6646197915c0044ff7f6ec2_75158226';
?>
<!DOCTYPE html>
<html lang="<?php echo '/*%%SmartyNocache:6646197915c0044ff7f6ec2_75158226%%*/<?php echo $_smarty_tpl->tpl_vars[\'language\']->value;?>
/*/%%SmartyNocache:6646197915c0044ff7f6ec2_75158226%%*/';?>
">
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['metas']->value;?>
">
	<meta name="author" content="<?php echo $_smarty_tpl->tpl_vars['autor']->value;?>
">
	<link rel="icon" href="<?php echo '/*%%SmartyNocache:6646197915c0044ff7f6ec2_75158226%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:6646197915c0044ff7f6ec2_75158226%%*/';?>
/favicon.ico">
	<title>LISTA PROYECTOS - TestBuild (<?php echo $_smarty_tpl->tpl_vars['version']->value;?>
) - <?php echo $_smarty_tpl->tpl_vars['nombre_proyecto']->value;?>
</title>
    <link rel="stylesheet" href="<?php echo '/*%%SmartyNocache:6646197915c0044ff7f6ec2_75158226%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:6646197915c0044ff7f6ec2_75158226%%*/';?>
/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo '/*%%SmartyNocache:6646197915c0044ff7f6ec2_75158226%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:6646197915c0044ff7f6ec2_75158226%%*/';?>
/css/sweetalert.css" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <link rel="stylesheet" href="<?php echo '/*%%SmartyNocache:6646197915c0044ff7f6ec2_75158226%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:6646197915c0044ff7f6ec2_75158226%%*/';?>
/css/estil.css" />
    <link rel="stylesheet" href="<?php echo '/*%%SmartyNocache:6646197915c0044ff7f6ec2_75158226%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:6646197915c0044ff7f6ec2_75158226%%*/';?>
/css/colorbox.css" />
    <link rel="stylesheet" href="<?php echo '/*%%SmartyNocache:6646197915c0044ff7f6ec2_75158226%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:6646197915c0044ff7f6ec2_75158226%%*/';?>
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
					 <div class="col-sm-4 bluethings">
						<h3>Lista de Proyectos</h3>
						<h6>Lista de proyectos de esta Suite</h6>
					</div>
					<div class="col-sm-4 text-right resbus">
						
											  <form action="" method="POST">
					    <select name="filtrado_proyectos" class="form-control" onchange="this.form.submit()">
					    	<?php echo '/*%%SmartyNocache:6646197915c0044ff7f6ec2_75158226%%*/<?php echo $_smarty_tpl->tpl_vars[\'optionSeleccionada\']->value;?>
/*/%%SmartyNocache:6646197915c0044ff7f6ec2_75158226%%*/';?>

						     <option value=""><?php echo '/*%%SmartyNocache:6646197915c0044ff7f6ec2_75158226%%*/<?php echo $_smarty_tpl->tpl_vars[\'TXT_FORM_filtrar_issues\']->value;?>
/*/%%SmartyNocache:6646197915c0044ff7f6ec2_75158226%%*/';?>
</option>
						     <option value=""><?php echo '/*%%SmartyNocache:6646197915c0044ff7f6ec2_75158226%%*/<?php echo $_smarty_tpl->tpl_vars[\'TXT_FORM_ver_todo\']->value;?>
/*/%%SmartyNocache:6646197915c0044ff7f6ec2_75158226%%*/';?>
</option>
	
						     <option value="prioridad"><?php echo '/*%%SmartyNocache:6646197915c0044ff7f6ec2_75158226%%*/<?php echo $_smarty_tpl->tpl_vars[\'TXT_FORM_prioridad\']->value;?>
/*/%%SmartyNocache:6646197915c0044ff7f6ec2_75158226%%*/';?>
</option>
					       <option value="fecha_creacion"><?php echo '/*%%SmartyNocache:6646197915c0044ff7f6ec2_75158226%%*/<?php echo $_smarty_tpl->tpl_vars[\'TXT_FORM_fecha_creacion\']->value;?>
/*/%%SmartyNocache:6646197915c0044ff7f6ec2_75158226%%*/';?>
</option>
					       <option value="nombre_build"><?php echo '/*%%SmartyNocache:6646197915c0044ff7f6ec2_75158226%%*/<?php echo $_smarty_tpl->tpl_vars[\'TXT_FORM_nombre_build\']->value;?>
/*/%%SmartyNocache:6646197915c0044ff7f6ec2_75158226%%*/';?>
</option>
					       <option value="Open"><?php echo '/*%%SmartyNocache:6646197915c0044ff7f6ec2_75158226%%*/<?php echo $_smarty_tpl->tpl_vars[\'TXT_FORM_Open\']->value;?>
/*/%%SmartyNocache:6646197915c0044ff7f6ec2_75158226%%*/';?>
</option>
					       <option value="Closed"><?php echo '/*%%SmartyNocache:6646197915c0044ff7f6ec2_75158226%%*/<?php echo $_smarty_tpl->tpl_vars[\'TXT_FORM_Closed\']->value;?>
/*/%%SmartyNocache:6646197915c0044ff7f6ec2_75158226%%*/';?>
</option>
					       <option value="en desarrollo"><?php echo '/*%%SmartyNocache:6646197915c0044ff7f6ec2_75158226%%*/<?php echo $_smarty_tpl->tpl_vars[\'TXT_FORM_endesarrollo\']->value;?>
/*/%%SmartyNocache:6646197915c0044ff7f6ec2_75158226%%*/';?>
</option>
					       <option value="test"><?php echo '/*%%SmartyNocache:6646197915c0044ff7f6ec2_75158226%%*/<?php echo $_smarty_tpl->tpl_vars[\'TXT_FORM_test\']->value;?>
/*/%%SmartyNocache:6646197915c0044ff7f6ec2_75158226%%*/';?>
</option>
					       <option value="resuelta"><?php echo '/*%%SmartyNocache:6646197915c0044ff7f6ec2_75158226%%*/<?php echo $_smarty_tpl->tpl_vars[\'TXT_FORM_resuelta\']->value;?>
/*/%%SmartyNocache:6646197915c0044ff7f6ec2_75158226%%*/';?>
</option>
					       <option value="reabierta"><?php echo '/*%%SmartyNocache:6646197915c0044ff7f6ec2_75158226%%*/<?php echo $_smarty_tpl->tpl_vars[\'TXT_FORM_reabierta\']->value;?>
/*/%%SmartyNocache:6646197915c0044ff7f6ec2_75158226%%*/';?>
</option>
					       <option value="abierta"><?php echo '/*%%SmartyNocache:6646197915c0044ff7f6ec2_75158226%%*/<?php echo $_smarty_tpl->tpl_vars[\'TXT_FORM_abierta\']->value;?>
/*/%%SmartyNocache:6646197915c0044ff7f6ec2_75158226%%*/';?>
</option>
					       <option value="cerrada"><?php echo '/*%%SmartyNocache:6646197915c0044ff7f6ec2_75158226%%*/<?php echo $_smarty_tpl->tpl_vars[\'TXT_FORM_cerrada\']->value;?>
/*/%%SmartyNocache:6646197915c0044ff7f6ec2_75158226%%*/';?>
</option>
					       <option value="<?php echo '/*%%SmartyNocache:6646197915c0044ff7f6ec2_75158226%%*/<?php echo $_smarty_tpl->tpl_vars[\'perfil_id_usuario\']->value;?>
/*/%%SmartyNocache:6646197915c0044ff7f6ec2_75158226%%*/';?>
"><?php echo '/*%%SmartyNocache:6646197915c0044ff7f6ec2_75158226%%*/<?php echo $_smarty_tpl->tpl_vars[\'TXT_FORM_asignadasAmi\']->value;?>
/*/%%SmartyNocache:6646197915c0044ff7f6ec2_75158226%%*/';?>
</option>
					    </select>
					  </form>

					</div>
					<div class="col-sm-4"><?php $_smarty_tpl->_subTemplateRender("file:templates/buscador.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?></div>
				</div>
    
        <div class="clearfix"></div>
    <hr class="featurette-divider">
				
<div class="row cambiosizefont">				
	<div class="col-md-12 mt-0">
	  <div class="row"><div class="col-md-12"><?php echo '/*%%SmartyNocache:6646197915c0044ff7f6ec2_75158226%%*/<?php echo $_smarty_tpl->tpl_vars[\'listado_proyectos\']->value;?>
/*/%%SmartyNocache:6646197915c0044ff7f6ec2_75158226%%*/';?>
</div></div>
  </div>
</div>

<div class="row">				
	<div class="col-md-12 mt-0 text-center">
	  <?php echo '/*%%SmartyNocache:6646197915c0044ff7f6ec2_75158226%%*/<?php echo $_smarty_tpl->tpl_vars[\'paginationCtrlsProyectos\']->value;?>
/*/%%SmartyNocache:6646197915c0044ff7f6ec2_75158226%%*/';?>

  </div>
</div>


        <div class="clearfix"></div>
    <hr class="featurette-divider">
				



					<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>	
				</section>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:templates/modales.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



    <?php echo '<script'; ?>
 src="<?php echo '/*%%SmartyNocache:6646197915c0044ff7f6ec2_75158226%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:6646197915c0044ff7f6ec2_75158226%%*/';?>
/js/jquery-3.2.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo '/*%%SmartyNocache:6646197915c0044ff7f6ec2_75158226%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:6646197915c0044ff7f6ec2_75158226%%*/';?>
/js/popper.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo '/*%%SmartyNocache:6646197915c0044ff7f6ec2_75158226%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:6646197915c0044ff7f6ec2_75158226%%*/';?>
/js/bootstrap.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo '/*%%SmartyNocache:6646197915c0044ff7f6ec2_75158226%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:6646197915c0044ff7f6ec2_75158226%%*/';?>
/js/sweetalert.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo '/*%%SmartyNocache:6646197915c0044ff7f6ec2_75158226%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:6646197915c0044ff7f6ec2_75158226%%*/';?>
/js/jquery.cookie.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo '/*%%SmartyNocache:6646197915c0044ff7f6ec2_75158226%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:6646197915c0044ff7f6ec2_75158226%%*/';?>
/js/bootstrap-datepicker.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo '/*%%SmartyNocache:6646197915c0044ff7f6ec2_75158226%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:6646197915c0044ff7f6ec2_75158226%%*/';?>
/js/jquery.colorbox-min.js"><?php echo '</script'; ?>
>  
    <?php echo '<script'; ?>
 src="<?php echo '/*%%SmartyNocache:6646197915c0044ff7f6ec2_75158226%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:6646197915c0044ff7f6ec2_75158226%%*/';?>
/js/jquery.validate.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo '/*%%SmartyNocache:6646197915c0044ff7f6ec2_75158226%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:6646197915c0044ff7f6ec2_75158226%%*/';?>
/js/jquery.colorbox-min.js"><?php echo '</script'; ?>
>  
	<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 src='<?php echo '/*%%SmartyNocache:6646197915c0044ff7f6ec2_75158226%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:6646197915c0044ff7f6ec2_75158226%%*/';?>
/js/jquery-resizable.js'><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo '/*%%SmartyNocache:6646197915c0044ff7f6ec2_75158226%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:6646197915c0044ff7f6ec2_75158226%%*/';?>
/js/custom.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo '/*%%SmartyNocache:6646197915c0044ff7f6ec2_75158226%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:6646197915c0044ff7f6ec2_75158226%%*/';?>
/js/tether.min.js" language="javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo '/*%%SmartyNocache:6646197915c0044ff7f6ec2_75158226%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:6646197915c0044ff7f6ec2_75158226%%*/';?>
/js/lectura_autosugern.js" language="javascript"><?php echo '</script'; ?>
>


    <?php echo '<script'; ?>
 src="<?php echo '/*%%SmartyNocache:6646197915c0044ff7f6ec2_75158226%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:6646197915c0044ff7f6ec2_75158226%%*/';?>
/js/guardardatos.js" language="javascript"><?php echo '</script'; ?>
>
	  <?php echo '<script'; ?>
 src="<?php echo '/*%%SmartyNocache:6646197915c0044ff7f6ec2_75158226%%*/<?php echo $_smarty_tpl->tpl_vars[\'pathRecursos\']->value;?>
/*/%%SmartyNocache:6646197915c0044ff7f6ec2_75158226%%*/';?>
/js/dropzone.min.js" language="javascript"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
function setIframeHeight(iframe) {
	if (iframe) {
		var iframeWin = iframe.contentWindow || iframe.contentDocument.parentWindow;
		if (iframeWin.document.body) {
			iframe.height = iframeWin.document.documentElement.scrollHeight || iframeWin.document.body.scrollHeight;
		}
	}
};    

<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>

$(window).load(function () {
	setIframeHeight(document.getElementById('framecontenido'));
});


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
