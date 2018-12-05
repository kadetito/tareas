<!DOCTYPE html>
<html lang="{$language}">
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="{$metas}">
	<meta name="author" content="{$autor}">
	<link rel="icon" href="{$pathRecursos}/favicon.ico">
	<title>{$TEXT_Gestionar_tareas} - TestBuild ({$version}) - {$nombre_proyecto}</title>
    <link rel="stylesheet" href="{$pathRecursos}/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{$pathRecursos}/css/sweetalert.css" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <link rel="stylesheet" href="{$pathRecursos}/css/estil.css" />
    <link rel="stylesheet" href="{$pathRecursos}/css/colorbox.css" />
</head>
<body class="dashboardbackground">

<div class="container-fluid">
<header>
					<div class="row">
						<div class="col-12">{include file="templates/header.tpl"}</div>
					</div>
				</header>

				<div class="row titulosseccion mb-2 pl-3">
					 <div class="col-sm-5 mt-3">
						<h3>Escritorio principal</h3>
						<h6>{$TEXT_ListadodeTareas}</h6>
					</div>
					<div class="col-sm-3 text-right resbus mt-3">
					  <form action="" method="POST">
					    <select name="filtrado" class="form-control" onchange="this.form.submit()">
					    	{$optionSeleccionada}
						     <option value="">{$TXT_FORM_filtrar_issues}</option>
						     <option value="">{$TXT_FORM_ver_todo}</option>
	
						     <option value="prioridad">{$TXT_FORM_prioridad}</option>
					       <option value="fecha_creacion">{$TXT_FORM_fecha_creacion}</option>
					       <option value="nombre_build">{$TXT_FORM_nombre_build}</option>
     <option value="1600000">{$TXT_FORM_Aplazada}</option>
					       <option value="1600001">{$TXT_FORM_EnSupervision}</option>
					       <option value="1600002">{$TXT_FORM_Dudasinternas}</option>
					       <option value="1600003">{$TXT_FORM_Consultacliente}</option>
					       <option value="1600004">{$TXT_FORM_Completada}</option>
					       <option value="1600005">{$TXT_FORM_Detenida}</option>
					       
					       <option value="1500002">{$TXT_FORM_endesarrollo}</option>
					       <option value="1500001">{$TXT_FORM_test}</option>
					       <option value="1500005">{$TXT_FORM_resuelta}</option>
					       <option value="1500003">{$TXT_FORM_reabierta}</option>
					       <option value="1500000">{$TXT_FORM_abierta}</option>
					       <option value="1500004">{$TXT_FORM_cerrada}</option>
					       <option value="{$perfil_id_usuario}">{$TXT_FORM_asignadasAmi}</option>
					    </select>
					  </form>
					 </div>
					<div class="col-sm-4 mt-3">{include file="templates/buscador.tpl"}</div>
				</div>
				
				
 <div class="card-columns mt-5">{$bucleTablaBuilds}</div>
					
			
</div>
{include file="templates/modales.tpl"}



    <script src="{$pathRecursos}/js/jquery-3.2.1.min.js"></script>
    <script src="{$pathRecursos}/js/popper.min.js"></script>
		<script src="{$pathRecursos}/js/bootstrap.min.js"></script>
		<script src="{$pathRecursos}/js/sweetalert.min.js"></script>
    <script src="{$pathRecursos}/js/jquery.cookie.js"></script>
    <script src="{$pathRecursos}/js/bootstrap-datepicker.min.js"></script>
		<script src="{$pathRecursos}/js/jquery.colorbox-min.js"></script>  
    <script src="{$pathRecursos}/js/jquery.validate.min.js"></script>
    <script src='{$pathRecursos}/js/jquery-resizable.js'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>


    <script src="{$pathRecursos}/js/tether.min.js" language="javascript"></script>
    <script src="{$pathRecursos}/js/lectura_autosugern.js" language="javascript"></script>


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

