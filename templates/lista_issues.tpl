<!DOCTYPE html>
<html lang="{$language}">
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="{$metas}">
	<meta name="author" content="{$autor}">
	<link rel="icon" href="{$pathRecursos}/favicon.ico">
	<title>LISTA ISSUES - TestBuild ({$version}) - {$nombre_proyecto}</title>
    <link rel="stylesheet" href="{$pathRecursos}/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{$pathRecursos}/css/sweetalert.css" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <link rel="stylesheet" href="{$pathRecursos}/css/estil.css" />
    <link rel="stylesheet" href="{$pathRecursos}/css/colorbox.css" />
    <link rel="stylesheet" href="{$pathRecursos}/css/dropzone.css" />   
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
						<h3>Lista de Issues</h3>
						<h6>Lista general de issues</h6>
					</div>
					<div class="col-sm-4 text-right resbus">
						
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
					<div class="col-sm-4">{include file="templates/buscador.tpl"}</div>
				</div>
    
        <div class="clearfix"></div>
    <hr class="featurette-divider">
				
<div class="row cambiosizefont">				
	<div class="col-md-12 mt-0">
	  <div class="row"><div class="col-md-12">{$listado_listaIssues}</div></div>
  </div>
</div>

<div class="row">				
	<div class="col-md-12 mt-0 text-center">
	  {$paginationCtrls}
  </div>
</div>


        <div class="clearfix"></div>
    <hr class="featurette-divider">
				



					{include file="templates/footer.tpl"}	
				</section>
</div>
{include file="templates/modales.tpl"}

{*<!-- //guardarImputacion();-->*}


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
    <script src="{$pathRecursos}/js/tether.min.js" language="javascript"></script>
    <script src="{$pathRecursos}/js/lectura_autosugern.js" language="javascript"></script>


    <script src="{$pathRecursos}/js/guardardatos.js" language="javascript"></script>
	  <script src="{$pathRecursos}/js/dropzone.min.js" language="javascript"></script>
{literal}
<script>
function setIframeHeight(iframe) {
	if (iframe) {
		var iframeWin = iframe.contentWindow || iframe.contentDocument.parentWindow;
		if (iframeWin.document.body) {
			iframe.height = iframeWin.document.documentElement.scrollHeight || iframeWin.document.body.scrollHeight;
		}
	}
};    

</script>

<script>

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
	</script>	
   
 <script>
		function cargaDatos(){
		      //destinado a la carga de local storage cuando se necesite 
		    document.getElementById("result").innerHTML = localStorage.getItem("idusuario");		
		} 
</script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tagmanager/3.0.2/tagmanager.min.js"></script>

<script>
		$(document).ready(function(){
		    $("#imputar").click(function(){
		        $("#imputar").prop("disabled", false);
		    });
		});	
</script>
<script>
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

