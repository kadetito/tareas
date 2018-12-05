<!DOCTYPE html>
<html lang="{$language}">
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="{$metas}">
	<meta name="author" content="{$autor}">
	<link rel="icon" href="{$pathRecursos}/favicon.ico">
	<title>CONFIG - TestBuild ({$version}) - {$nombre_proyecto}</title>
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
					 <div class="col-sm-5">
						<h3>{$perfil_nombre_usuario}</h3>
						<h6>Cargo: {$perfil_nombre_usuario}</h6>
					</div>
					<div class="col-sm-3 text-right resbus"></div>
					<div class="col-sm-4">{include file="templates/buscador.tpl"}</div>
				</div>

				
<div class="row cambiosizefont">				
	<div class="col-md-12 mt-0">
	 <div class="card">
	  <div class="card-block p-3 ">



      <div class="row">
				 <div class="col-md-12 mt-3">						
				 <h4><i class="fas fa-cog"></i> Composición</h4> 

									   
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="row mt-5">			
					<div class="col-3"><button class="btn btn-default btn-customizado"><i class="fas fa-adjust fa-4x"></i><h6>Idioma</h6></button></div>			
					<div class="col-3"><button class="btn btn-default btn-customizado"><i class="fas fa-adjust fa-4x"></i></button></div>		
					<div class="col-3"><button class="btn btn-default btn-customizado"><i class="fas fa-adjust fa-4x"></i></button></div>		
					<div class="col-3"><button class="btn btn-default btn-customizado"><i class="fas fa-adjust fa-4x"></i></button></div>	
				</div>				
{*<!--<ul class="list-inline">
<li class="list-inline-item">
<div class="flex flex-column justify-center card p-3">
<i class="fas fa-adjust fa-4x"></i>
</div><h6>Textos y características titulo super largo a ver que hacemos</h6>
</li>
<li class="list-inline-item">
<div class="flex flex-column justify-center card p-3">
<i class="fas fa-adjust fa-4x"></i>
</div><h6>Textos y características titulo super largo a ver que hacemos</h6>
</li>
<li class="list-inline-item">
<div class="flex flex-column justify-center card p-3">
<i class="fas fa-adjust fa-4x"></i>
</div><h6>Textos y características titulo super largo a ver que hacemos</h6>
</li>
<li class="list-inline-item mb-2">
<div class="flex flex-column justify-center card p-3 h-30">
<i class="fas fa-adjust fa-4x"></i>
</div><h6>Textos y características</h6>
</li>
<li class="list-inline-item mb-2">
<div class="flex flex-column justify-center card p-3 h-30">
<i class="fas fa-adjust fa-4x"></i>
</div><h6>Textos y características titulo super largo a ver que hacemos</h6>
</li>
<li class="list-inline-item mb-2">
<div class="flex flex-column justify-center card p-3">
<i class="fas fa-adjust fa-4x"></i>
</div><h6>Textos y características titulo super largo a ver que hacemos</h6>
</li>
<li class="list-inline-item mb-2">
<div class="flex flex-column justify-center card p-3">
<i class="fas fa-adjust fa-4x"></i>
</div><h6>Textos y características titulo super largo a ver que hacemos</h6>
</li>
<li class="list-inline-item mb-2">
<div class="flex flex-column justify-center card p-3">
<i class="fas fa-adjust fa-4x"></i>
</div><h6>Textos y características titulo super largo a ver que hacemos</h6>
</li>
<li class="list-inline-item mb-2">
<div class="flex flex-column justify-center card p-3">
<i class="fas fa-adjust fa-4x"></i>
</div><h6>Textos y características titulo super largo a ver que hacemos</h6>
</li>
<ul>-->*}
			</div>
	  </div>			   
									   
									   
									   
									   
									  

														{*<!-- //editarMasivoProyecto($path,$lengua,$getId,$campo,$valor,$tabla);-->*}
					</div>
			</div>

</div>
</div>
</div>
</div>








					{include file="templates/footer.tpl"}	
				</section>
</div>
{include file="templates/modales.tpl"}

{*<!-- //guardarImputacion();-->*}



    <script src='{$pathRecursos}/js/jquery.min.js'></script>
    <script src="{$pathRecursos}/js/popper.min.js"></script>
		<script src="{$pathRecursos}/js/bootstrap.min.js"></script>
		<script src="{$pathRecursos}/js/sweetalert.min.js"></script>
    <script src="{$pathRecursos}/js/jquery.cookie.js"></script>
    <script src="{$pathRecursos}/js/bootstrap-datepicker.min.js"></script>
		<script src="{$pathRecursos}/js/jquery.colorbox-min.js"></script>  
    <script src="{$pathRecursos}/js/jquery.validate.min.js"></script>
    <script src='{$pathRecursos}/js/jquery-resizable.js'></script>
    <script src="{$pathRecursos}/js/custom.js"></script>
    <script src="{$pathRecursos}/js/tether.min.js" language="javascript"></script>
    <script src="{$pathRecursos}/js/guardardatos.js" language="javascript"></script>
	  <script src="{$pathRecursos}/js/dropzone.min.js" language="javascript"></script>

	  

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tagmanager/3.0.2/tagmanager.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>  
<script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>


{literal}
<script>
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
    todayHighlight: true
});
});
    </script>
{/literal}
</body>
</html>

