<!DOCTYPE html>
<html lang="{$language}">
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="{$metas}">
	<meta name="author" content="{$autor}">
	<link rel="icon" href="{$pathRecursos}/favicon.ico">
	<title>NUEVA ISSUE - TestBuild ({$version}) - {$nombre_proyecto}</title>
    <link rel="stylesheet" href="{$pathRecursos}/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{$pathRecursos}/css/bootstrap-datepicker3.min.css" />
    <link rel="stylesheet" href="{$pathRecursos}/css/sweetalert.css" />

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <link rel="stylesheet" href="{$pathRecursos}/css/estil.css" />
    <link rel="stylesheet" href="{$pathRecursos}/css/colorbox.css" />
         <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/tagmanager/3.0.2/tagmanager.min.css">

</head>
<body>
	<div class="container">
				<header>
					<div class="row">
						<div class="col-12">{include file="templates/header.tpl"}</div>
					</div>
				</header>
		<section>
				<div class="row">
					<div class="col-12">{include file="templates/breadcrumb.tpl"}</div>
				</div>
				<div class="row">
					 <div class="col-sm-4 bluethings">
						<h3>Nueva issue</h3>
						<h6>{$crear_issue_para_proyecto}</h6>
					</div>
					<div class="col-sm-4 text-right resbus"></div>
					<div class="col-sm-4">{include file="templates/buscador.tpl"}</div>
				</div>
				<div class="row">
				 <div class="col-md-12 bluethings">




    <div class="clearfix"></div>
    <hr class="featurette-divider">
  

<form action="" method="POST" id="formularioAltaIssue" class="theforms needs-validation">


<input type="hidden" name="token" value="{$token_issue}" />
<input type="hidden" name="estatus" value="1600006" />
<input type="hidden" name="status" value="1500000" />
<input type="hidden" name="creada_por" value="{$perfil_id_usuario}" />
<input type="hidden" name="publico" value="S" />
<input type="hidden" name="fecha_creacion" value="{$dateTimedeHoy}" />
<input type="hidden" name="id_cliente" value="{$idCliente}" />
{$mostrar_selector_proyecto}

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
		  <label for="tipo" class="d-inline-block"><i class="far fa-arrow-alt-circle-right"></i> Tipo <span><a href="" class="icon_help"><i class="far fa-question-circle"></i></a></span></label><select name="tipo" class="form-control">{$tipos_de_proyecto}</select>		
        </div>
        <div class="col-md-4">
		  <label for="prioridad" class="d-inline-block"><i class="far fa-arrow-alt-circle-right"></i> Prioridad <span><a href="" class="icon_help"><i class="far fa-question-circle"></i></a></span></label><select name="prioridad" class="form-control">{$tipos_de_prioridad}</select>						
        </div>
        <div class="col-md-4">
      <label for="coordina" class="d-inline-block"><i class="far fa-arrow-alt-circle-right"></i> Responsable <small class="silence">(Se notificará al responsable)</small>  <span><a href="" class="icon_help"><i class="far fa-question-circle"></i></a></span></label><select name="coordina" class="form-control">{$lista_usuarios}</select>							
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
					<label for="asignada" class="d-inline-block"><i class="far fa-arrow-alt-circle-right"></i> Asignada a <span><a href="" class="icon_help"><i class="far fa-question-circle"></i></a></span></label>    <select name="asignada" class="form-control">{$lista_usuarios_asignados}</select>
        </div>
        <div class="col-md-4">
    			<label for="componentes" class="d-inline-block"><i class="far fa-arrow-alt-circle-right"></i> Componentes <small><a href="" class="silence">( <i class="far fa-edit"></i> gestionar componentes)</a></small> <span><a href="" class="icon_help"><i class="far fa-question-circle"></i></a></span></label><select name="componentes" class="form-control">{$componentes}</select>				
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


{include file="templates/footer.tpl"}				
				</section>
</div>
    <script src="{$pathRecursos}/js/jquery-3.2.1.min.js"></script>
    <script src="{$pathRecursos}/js/popper.min.js"></script>
		<script src="{$pathRecursos}/js/bootstrap.min.js"></script>
		<script src="{$pathRecursos}/js/sweetalert.min.js"></script>
    <script src="{$pathRecursos}/js/jquery.cookie.js"></script>
    <script src="{$pathRecursos}/js/bootstrap-datepicker.min.js"></script>
		<script src="{$pathRecursos}/js/jquery.colorbox-min.js"></script>  
    <script src="{$pathRecursos}/js/jquery.validate.min.js"></script>
		<script src="{$pathRecursos}/js/jquery.colorbox-min.js"></script>  
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>


    <script src='{$pathRecursos}/js/jquery-resizable.js'></script>
    <script src="{$pathRecursos}/js/custom.js"></script>
    {$selector_del_validador}
    <script src="{$pathRecursos}/js/tether.min.js" language="javascript"></script>
    <script src="{$pathRecursos}/js/lectura_autosugern.js" language="javascript"></script>


{literal} 

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

{/literal}
	</body>
</html>

