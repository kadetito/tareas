<?php session_start();
      require('lib/configuracion.php');
      $tabla='bloq_bloque_casos';;
      //require('lib/paginador.php');
	  if($_GET['token']=='tokl77832489fdf3246329978yjghy6y56398'){
	  	
	$getId = $_GET['getId'];
	$getidCspr = $_GET['getidCspr'];
	  	
	  include('lib/funciones.php');	
?><!DOCTYPE html>
<html lang="<?=$lengua;?>">
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="<?=$rowSettings['autor'];?>">
	<title>TestBuild</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="<?=$pathRecursos;?>/css/sweetalert.css">
    <link rel="stylesheet" href="<?=$pathRecursos;?>/css/jquery-ui.css">
    <link href="<?=$pathRecursos;?>/css/font-awesome.css" rel="stylesheet">
    <link href="<?=$pathRecursos;?>/css/style.css" rel="stylesheet">

</head>
<body>
		
<div class="container-fluid" id="wrapper">
<div class="row">
<main class="col-xs-12 col-sm-12 col-lg-12 col-xl-12 pt-3 pl-4 ml-auto">
<form action="" method="POST">
<?php   
        $sqlGeneral = "SELECT * FROM ".$tabla." WHERE id_cspr = '".$getidCspr."' ";
				if(!$result = mysqli_query($conexion, $sqlGeneral)) die();
				while($rowSalida = mysqli_fetch_array($result))
				{         

             	echo '<input type="hidden" class="form-control" readonly name="tabla" value="'.$tabla.'" />';
							echo '<div class="card mb-4">';
							echo '<div class="card-block">';
							echo '<fieldset>';
							
							
							echo '<div class="row">';			
							echo '<div class="col-md-2">';											
														  echo '<div class="form-group">';
														  echo '<label class="col-12 control-label no-padding" for="name">'.$TEXT_TNombredelcaso.'</label>';
														  echo '<div class="col-12 no-padding">';
		                          echo '<input type="text" class="form-control" readonly name="getId[]" value="'.$rowSalida['id'].'" />';
							                echo '<input type="hidden" class="form-control" readonly name="getIdentificador['.$rowSalida['id'].']" value="'.$rowSalida['id'].'" />';
							                echo '</div>';
							                echo '</div>';
              echo '</div>';
							echo '<div class="col-md-5">';											
														  echo '<div class="form-group">';
														  echo '<label class="col-12 control-label no-padding" for="name">'.$TEXT_TNombredelcaso.'</label>';
														  echo '<div class="col-12 no-padding">';
		                          echo '<input type="text" class="form-control" readonly name="getId[]" value="'.$rowSalida['id'].'" />';
							                echo '<input type="hidden" class="form-control" readonly name="getIdentificador['.$rowSalida['id'].']" value="'.$rowSalida['id'].'" />';
							                echo '</div>';
							                echo '</div>';
              echo '</div>';							
							echo '<div class="col-md-5">';											
														  echo '<div class="form-group">';
														  echo '<label class="col-12 control-label no-padding" for="name">'.$TEXT_TNombredelcaso.'</label>';
														  echo '<div class="col-12 no-padding">';
		                          echo '<input type="text" class="form-control" readonly name="getId[]" value="'.$rowSalida['id'].'" />';
							                echo '<input type="hidden" class="form-control" readonly name="getIdentificador['.$rowSalida['id'].']" value="'.$rowSalida['id'].'" />';
							                echo '</div>';
							                echo '</div>';
              echo '</div>';													
							echo '</div>';
														
															
														
							echo '</fieldset>';	
							echo '</div>';
							echo '</div>';


	
				} mysqli_close($conexion);
	

?>
</form>
</main>
</div>
</div>

<?php } else {echo'<script>alert(no puede acceder al contenido);</script>';}?>

    <script src="<?=$pathRecursos;?>/js/jquery-3.2.1.min.js"></script>
    <script src="<?=$pathRecursos;?>/js/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="<?=$pathRecursos;?>/js/jquery-ui.min.js"></script>
		<script>
		 $( function() {
		    $( document ).tooltip({
		      track: true
		    });
		  } );
		</script>
    <script src="<?=$pathRecursos;?>/js/sweetalert.min.js"></script>
    <script src="<?=$pathRecursos;?>/js/jquery.cookie.js"></script>
    <script src="<?=$pathRecursos;?>/js/bootstrap-datepicker.js"></script>
    <script src="<?=$pathRecursos;?>/js/custom.js"></script>
    <script src="<?=$pathRecursos;?>/js/jquery.validate.min.js"></script>
		<link rel="stylesheet" href="<?=$pathRecursos;?>/css/colorbox.css" />
		<script src="<?=$pathRecursos;?>/js/jquery.colorbox-min.js"></script>
		<script>
			$(document).ready(function(){
				$(".iframe").colorbox({iframe:true, width:"80%", height:"80%",overlayClose:false,onClosed:reloadPage});
				$(".iframeb").colorbox({iframe:true, width:"30%", height:"20%",overlayClose:false,onClosed:reloadPage});
			});
										
$(document).ready(function(){
    $(".chpic").colorbox({width:"80%", height:"80%", iframe:true, 
        onClosed:function(){ location.reload(true); } });
});
			function reloadPage() {
    location.reload(true); 
}

		</script>
		<script>
		$(document).ready(function () {

    $('#formualta').validate({ // initialize the plugin
        rules: {
            nombre_proyecto: {
                required: true
               
            },
            descripcion_proyecto: {
                required: true,
                minlength: 5
            }
        }
    });

});
</script>
    <script src="<?=$pathRecursos;?>/js/tether.min.js" language="javascript"></script>
	</body>
</html>

