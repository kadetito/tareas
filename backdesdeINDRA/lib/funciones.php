<?php
	

  function bucleTablaProyectos($crow,$path,$lengua,$tabla)
  {

  	echo '<tr>
						<td>
								<input type="hidden" name="tabla" value="'.$tabla.'">
								<input type="checkbox" name="eliminacion[]" value="'.$crow['id'].'">		
						</td>
						<td>'.$crow['id'].'</td>
						<td>xxx</td>
						<td>'.$crow['nombre_proyecto'].'</td>
						<td><div class="float-right action-buttons">
										<a href="'.$path.'/'.$lengua.'/'.$crow['id'].'/v/builds" class="trash"><em class="fa fa-folder-open"></em></a>
								</div>
						</td>
				</tr>';	
											
  }	
  
  function encrypt_decrypt($action, $string) {
    $output = false;
    $encrypt_method = "AES-256-CBC";
    $secret_key = 'This is my secret key';
    $secret_iv = 'This is my secret iv';
    // hash
    $key = hash('sha256', $secret_key);
    
    // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
    $iv = substr(hash('sha256', $secret_iv), 0, 16);
    if ( $action == 'encrypt' ) {
        $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
        $output = base64_encode($output);
    } else if( $action == 'decrypt' ) {
        $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
    }
    return $output;
}
  
  function bucleTablaBuilds($crowd,$path,$lengua,$tabla)
  {
  	echo '<tr>
						<td width="15">
						<input type="hidden" name="tabla" value="'.$tabla.'">
								<input type="checkbox" name="eliminacion[]" value="'.$crowd['id'].'">		
						</td>
						<td  width="125">'.$crowd['id'].'</td>
						<td   width="225">'.$crowd['fecha_creacion'].'</td>
						';
						   require('lib/configuracion.php');
						   $sqli = "SELECT * FROM proy_proyectos where id='".$crowd['id_proyecto']."' ";
						   
						   
						   
						   $idTare  = encrypt_decrypt('encrypt', $crowd['id']);
						   
							  if(!$resul = mysqli_query($conexion, $sqli)) die();
							  if($rowSali = mysqli_fetch_array($resul))	{	$idProye = $rowSali['id'];				
		echo '<td><a href="'.$path.'/'.$lengua.'/p/'.$idProye.'" class="trash"><div class="col-md-12">'.$rowSali['nombre_proyecto'].'</div></a></td>';
	              }
		
		echo '<td><a href="'.$path.'/'.$lengua.'/'.$idTare.'" class="trash"><div class="col-md-12">'.$crowd['nombre_build'].'</div></a></td>
						<td>';
						
						  $sqlihoras = "SELECT * FROM hora_horas where id_tarea='".$crowd['id']."' ";
							  if(!$resulhoras = mysqli_query($conexion, $sqlihoras)) die();
							  if($rowhoras = mysqli_fetch_array($resulhoras))	{					
							  	echo '<strong>'.$rowhoras['horas'].'h.</strong> de <strong>'.$crowd['horas_estimadas'].'h.</strong>';
							  }
	 echo '</td>
						<td width="125">
						<div class="float-center action-buttons">';
							if($crowd['estado']=='Open'){ echo '<i class="fa fa-square greensq"></i> ';} else {echo '<i class="fa fa-square redsq"></i> ';} 
							echo $crowd['estado'];
		echo '</div>
						</td>
				</tr>';								
  }	
  
  

  function funcionOrdenProy(){
  	if($_GET['ordena']=='ASC'){
  				echo '<a href="?ordena=DESC&valor_busqueda='.$_GET['valor_busqueda'].'"><em class="fa fa-caret-up"></em></a>';
			  } else {
  				echo '<a href="?ordena=ASC&valor_busqueda='.$_GET['valor_busqueda'].'"><em class="fa fa-caret-down"></em></a>';			  	
			  }
  } 
  
  
  function funcionOrdenEst(){
  	if($_GET['ordene']=='ASC'){
  				echo '<a href="?ordene=DESC&valor_busqueda='.$_GET['valor_busqueda'].'"><em class="fa fa-caret-up"></em></a>';
			  } else {
  				echo '<a href="?ordene=ASC&valor_busqueda='.$_GET['valor_busqueda'].'"><em class="fa fa-caret-down"></em></a>';			  	
			  }
  } 
  
  


  
//funciones de variables
function asignadaUsuario($nombre_usuario_issue){$idTare  = encrypt_decrypt('decrypt', $_GET['idtarea']);require('lib/configuracion.php');
  						  $sqli = "SELECT * FROM asig_asignada asig
						  INNER JOIN usua_usuarios usua ON usua.id = asig.usuario 
						  where id_issue='".$idTare."' ";
							  if(!$resul = mysqli_query($conexion, $sqli)) die();
							  $nombre_usuario_issue = array();
							  while($row = mysqli_fetch_array($resul)){	
							  $nombre_usuario_issue []= $row;
							  }
	return $nombre_usuario_issue;
}


function tablaissuesProyecto($tablaissuesProyecto){$idProy=$_GET['idproyecto'];require('lib/configuracion.php');

  						  $sqli = "SELECT * FROM buil_builds where id_proyecto='".$idProy."' ";
							  if(!$resul = mysqli_query($conexion, $sqli)) die();
							  $tablaissuesProyecto = array();
							  if($resul->num_rows > 0){
								  while($row = mysqli_fetch_array($resul)){	
								  $tablaissuesProyecto []= $row;
								  }
							  } 
	return $tablaissuesProyecto;
}

function numeroVisionarios($numero_visionarios){$idTare  = encrypt_decrypt('decrypt', $_GET['idtarea']);require('lib/configuracion.php');	  
		$query = "SELECT * FROM visi_visionadores visio
		LEFT JOIN buil_builds buil on buil.id='".$idTare."'
		where 
		visio.id_issue = buil.id
		 ";
		$result = $conexion->query($query);
		$numfilas = $result->num_rows;
		$numero_visionarios = $numfilas;
	return $numero_visionarios;
}



function numeroVisionariosProy($numero_visionariosProy){$idPro  = $_GET['idproyecto'];require('lib/configuracion.php');		  
		$query = "SELECT * FROM visi_visionadores visio
		LEFT JOIN proy_proyectos proy on proy.id='".$idPro."'
		LEFT JOIN buil_builds buil on buil.id_proyecto=proy.id
		where 
		visio.id_issue = buil.id
		 ";
		$result = $conexion->query($query);
		$numfilas = $result->num_rows;
		$numero_visionariosProy = $numfilas;
	return $numero_visionariosProy;
}

function totalHorasImputadas($horas_imputadas){$idTare  = encrypt_decrypt('decrypt', $_GET['idtarea']);require('lib/configuracion.php');		  
	  						$sqli = "SELECT SEC_TO_TIME(SUM(TIME_TO_SEC(horas))) AS hours FROM hora_horas where id_tarea='".$idTare."' ";
							  if(!$resul = mysqli_query($conexion, $sqli)) die();
							  if($row = mysqli_fetch_array($resul)){	
							  $horas_imputadas = substr($row['hours'],0,5);
							  }						  
	return $horas_imputadas;
}

function totalHorasImputadasProyecto($horas_imputadasProy){$idPro  = $_GET['idproyecto'];require('lib/configuracion.php');		  
	  						$sqli = "SELECT id_tarea,SEC_TO_TIME(SUM(TIME_TO_SEC(horas))) AS hours FROM hora_horas hora
							LEFT JOIN proy_proyectos proy on proy.id='".$idPro."'
							LEFT JOIN buil_builds buil on buil.id_proyecto=proy.id
							where id_tarea=buil.id ";
							 if(!$resul = mysqli_query($conexion, $sqli)) die();
							  if($row = mysqli_fetch_array($resul)){	
							  $horas_imputadasProy = substr($row['hours'],0,5);
							  }						  
	return $horas_imputadasProy;
}

function calculoHorasRestantes($calculo_horas){$idTare  = encrypt_decrypt('decrypt', $_GET['idtarea']);require('lib/configuracion.php');		  
	  						//horas imputadas
	  						$sqli = "SELECT SEC_TO_TIME(SUM(TIME_TO_SEC(horas))) AS hours FROM hora_horas where id_tarea='".$idTare."' ";
							  if(!$resul = mysqli_query($conexion, $sqli)) die();
							  if($row = mysqli_fetch_array($resul)){	
							  $horas_imputadas = $row['hours'];
							  }	
							  
							  //horas previstas
							  $sqlih = "SELECT * FROM buil_builds where id='".$idTare."' ";
							  if(!$resulh = mysqli_query($conexion, $sqlih)) die();
							  if($rowh = mysqli_fetch_array($resulh)){	
							  $horas_estimadas = $rowh['horas_estimadas'];
							  }

							  //diferencia
							  $sqlihr = 'SELECT TIMEDIFF("'.$horas_imputadas.'", "'.$horas_estimadas.'") AS horas';
							  if(!$resulhr = mysqli_query($conexion, $sqlihr)) die();
							  if($rowhr = mysqli_fetch_array($resulhr)){	
							     if($horas_imputadas < $horas_estimadas){ 
							     	$calculo_horas = '<span class="rojo">'.substr($rowhr['horas'],0,6).' (sobrepasado)</span>';
							     	} else {
							     	$calculo_horas = ''.substr($rowhr['horas'],0,5).'';
							      }
							     
							  }

	return $calculo_horas;
}
function calculoHorasRestantesProy($calculo_horasProy){$idPro  = $_GET['idproyecto'];require('lib/configuracion.php');		  
	  						//horas imputadas
	  						$sqli = "SELECT id_tarea,SEC_TO_TIME(SUM(TIME_TO_SEC(horas))) AS hours FROM hora_horas hora
							LEFT JOIN proy_proyectos proy on proy.id='".$idPro."'
							LEFT JOIN buil_builds buil on buil.id_proyecto=proy.id
							where id_tarea=buil.id ";
							 if(!$resul = mysqli_query($conexion, $sqli)) die();
							  if($row = mysqli_fetch_array($resul)){	
							  $horas_imputadas = $row['hours'];
							  }
							  
							  //horas previstas
							  $sqlih = "SELECT * FROM proy_proyectos where id='".$idPro."' ";
							  if(!$resulh = mysqli_query($conexion, $sqlih)) die();
							  if($rowh = mysqli_fetch_array($resulh)){	
							  $horas_estimadas = $rowh['horas_estimadas'];
							  }

							  //diferencia
							  $sqlihr = 'SELECT TIMEDIFF("'.$horas_imputadas.'", "'.$horas_estimadas.'") AS horas';
							  if(!$resulhr = mysqli_query($conexion, $sqlihr)) die();
							  if($rowhr = mysqli_fetch_array($resulhr)){	
							     if($horas_imputadas < $horas_estimadas){ 
							     	$calculo_horasProy = '<span class="rojo">'.substr($rowhr['horas'],0,6).' (sobrepasado)</span>';
							     	} else {
							     	$calculo_horasProy = ''.substr($rowhr['horas'],0,5).'';
							      }
							     
							  }

	return $calculo_horasProy;
}

function etiquetasLabel($etiquetas){$idTare  = encrypt_decrypt('decrypt', $_GET['idtarea']);require('lib/configuracion.php');
  						  $sqli = "SELECT * FROM etiq_etiquetas where id_issue='".$idTare."' ";
							  if(!$resul = mysqli_query($conexion, $sqli)) die();
							  $etiquetas = array();
							  while($row = mysqli_fetch_array($resul)){	
							  $etiquetas []= $row;
							  }
	return $etiquetas;
}

 /** ultimo dia de este mes **/
  function data_last_month_day() { 
  	
  	      if($_POST['periodo']){
       $ultimodiaMes =  $_POST['ultimodiames'];
			return $ultimodiaMes;
         } else {
      $month = date('m');
      $year = date('Y');
      $day = date("d", mktime(0,0,0, $month+1, 0, $year));
      return date('d-m-Y', mktime(0,0,0, $month, $day, $year));    	
        }
        

  };
 
  /** primer dia de este mes **/
  function data_first_month_day() {
  	
  	 if($_POST['periodo']){

       $primerDiaMes =  $_POST['primerdiames'];
       return $primerDiaMes;
         } else {
      $month = date('m');
      $year = date('Y');
      return date('d-m-Y', mktime(0,0,0, $month, 1, $year));   	
        }

  }
  
  
  
function tablaHorasImputadas($tablaHoras){$idTare  = encrypt_decrypt('decrypt', $_GET['idtarea']);require('lib/configuracion.php');
	//echo "<script>alert('".$_POST['primerdiames']."');</script>";

      if($_POST['periodo']){
       $ultimodiaMes =  $_POST['ultimodiames'];
       $primerDiaMes =  $_POST['primerdiames'];
         } else {
      $month = date('m');
      $year = date('Y');
      $day = date("d", mktime(0,0,0, $month+1, 0, $year));
      $ultimodiaMes = date('Y-m-d', mktime(0,0,0, $month, $day, $year)); 
      $primerDiaMes = date('Y-m-d', mktime(0,0,0, $month, 1, $year));         	
        }
  						  $sqli = "SELECT * FROM hora_horas hora
						  
						  INNER JOIN usua_usuarios usua ON usua.id = hora.usuario
						  
						  where (fecha_actualizacion BETWEEN '".$primerDiaMes."' AND '".$ultimodiaMes."') AND id_tarea='".$idTare."' ";
							  if(!$resul = mysqli_query($conexion, $sqli)) die();
							  $tablaHoras = array();
							  if($resul->num_rows > 0){
								  while($row = mysqli_fetch_array($resul)){	
								  $tablaHoras []= $row;
								  }
							  } else {
							  	      $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
							  	      echo '<script type="text/javascript">';
												echo 'setTimeout(function () { swal({   title: "SIN RESULTADOS",   text: "el rango de fechas no aporta ningun resultado, un momento, por favor",   timer: 3000,   showConfirmButton:false });  ';   
												echo '}, 100);</script>';
												echo '<meta http-equiv="Refresh" content="3;url='.$actual_link.'">';             
																            
												}
	return $tablaHoras;
}
function archivosAdjuntos($archivosAdjuntos){
  $archivosAdjuntos = 'adjuntos';
	return $archivosAdjuntos;
}		
					
function enlacesVinculados($enlacesVinculados){$idTare  = encrypt_decrypt('decrypt', $_GET['idtarea']);require('lib/configuracion.php');
  						      $sqli = "SELECT * FROM enla_enlaces_vinculados where id_issue='".$idTare."' ";
							  if(!$resul = mysqli_query($conexion, $sqli)) die();
							  $enlacesVinculados = array();
							  while($row = mysqli_fetch_array($resul)){	
							  $enlacesVinculados []= $row;
							  }
	return $enlacesVinculados;
}
					
function enlacesVinculadosProy($enlacesVinculadosProy){$idPro = $_GET['idproyecto'];require('lib/configuracion.php');
  						      $sqli = "SELECT * FROM enla_enlaces_vinculados_pro where id_proyecto='".$idPro."' ";
							  if(!$resul = mysqli_query($conexion, $sqli)) die();
							  $enlacesVinculadosProy = array();
							  while($row = mysqli_fetch_array($resul)){	
							  $enlacesVinculadosProy []= $row;
							  }
	return $enlacesVinculadosProy;
}
function clienteProyecto($clienteProyecto){$idPro = $_GET['idproyecto'];require('lib/configuracion.php');
								$sqlGeneralSetti = "SELECT * FROM proy_proyectos proy 
								LEFT JOIN clie_clientes clie on clie.id = proy.id_cliente
								WHERE proy.id ='".$idPro."' ";
								if(!$resultGeneralSetti = mysqli_query($conexion, $sqlGeneralSetti)) die();
								if($row = mysqli_fetch_array($resultGeneralSetti))
							  	 $clienteProyecto = '<a href="'.$row['url'].'">'.$row['nombre'].'</a>';
							
	return $clienteProyecto;
}
function comentariosProyecto($comentariosProyecto){$idPro = $_GET['idproyecto'];require('lib/configuracion.php');
  						      
							  $sqli = "SELECT * FROM come_comentarios_pro come 
							  INNER JOIN usua_usuarios usua ON usua.id = come.usuario
							  where id_proyecto='".$idPro."' ";
							  if(!$resul = mysqli_query($conexion, $sqli)) die();
							  $comentariosProyecto = array();
							  while($row = mysqli_fetch_array($resul)){	

								$comentariosProyecto []= $row;							  

							  }
	return $comentariosProyecto;
}			



function comentariosIssue($comentariosIssue){$idTare  = encrypt_decrypt('decrypt', $_GET['idtarea']);require('lib/configuracion.php');
  						      
							  $sqli = "SELECT * FROM come_comentarios come 
							  INNER JOIN usua_usuarios usua ON usua.id = come.usuario
							  where id_issue='".$idTare."' ";
							  if(!$resul = mysqli_query($conexion, $sqli)) die();
							  $comentariosIssue = array();
							  while($row = mysqli_fetch_array($resul)){	

								$comentariosIssue []= $row;							  

							  }
	return $comentariosIssue;
}			
function historialProyecto($historialProyecto){$idPro = $_GET['idproyecto'];require('lib/configuracion.php');
  						      $sqli = "SELECT * FROM log_acciones_proy log
							  INNER JOIN usua_usuarios usua ON usua.id = log.usuario
							  where id_proyecto='".$idPro."' order by fecha_creacion ASC";
							  if(!$resul = mysqli_query($conexion, $sqli)) die();
							  $historialProyecto = array();
							  while($row = mysqli_fetch_array($resul)){	
							  $historialProyecto []= $row;
							  }
	return $historialProyecto;
}	
function historialIssue($historialIssue){$idTare  = encrypt_decrypt('decrypt', $_GET['idtarea']);require('lib/configuracion.php');
  						      $sqli = "SELECT * FROM log_acciones log
							  INNER JOIN usua_usuarios usua ON usua.id = log.usuario
							  where id_issue='".$idTare."' order by fecha_creacion ASC";
							  if(!$resul = mysqli_query($conexion, $sqli)) die();
							  $historialIssue = array();
							  while($row = mysqli_fetch_array($resul)){	
							  $historialIssue []= $row;
							  }
	return $historialIssue;
}	
			

function mostrarAdjuntos($adjuntoms){
  $adjuntoms = 'historialIssue';
	return $adjuntoms;
}	

function guardarAdjunto($adjuntoar){
  $adjuntoar = 'historialIssue';
  if(isset($_POST['adjunto'])){ echo '<script>alert();</script>';}
	return $adjuntoar;
}		


 function guardarImputacion(){
  	require('lib/configuracion.php');
		if(isset($_POST['imputar'])){

		$getIdissue=$_POST['id_issue'];
		$getHorasissue=$_POST['horas'];
		$getFechaissue=$_POST['fecha_actualizacion']; 
		$getDescripcionissue = $_POST["descripcion"];

		$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

		          $consultainserti = "INSERT INTO hora_horas (id_tarea,horas,fecha_actualizacion,descripcion) VALUES ('".$getIdissue."','".$getHorasissue."','".$getFechaissue."','".$getDescripcionissue."')";
		          
																    if (mysqli_query($conexion, $consultainserti)) {
																	    echo '<script type="text/javascript">';
																			echo 'setTimeout(function () { swal({ title: "HORAS IMPUTADAS CORRECTAMENTE",   text: "El almacenado se ha llevado a cabo",   timer: 3000,   showConfirmButton: false });  ';   
																			echo '}, 100);</script>';
																		} else {echo "Error: " . $consultainserti . "<br>" . mysqli_error($conexion);}
							mysqli_close($conexion);										
																echo '<meta http-equiv="Refresh" content="2;url='.$actual_link.'">';

		          
		        
		}        
   }         
            
            
            
function botonesAccion(){$idTare  = encrypt_decrypt('decrypt', $_GET['idtarea']);require('lib/configuracion.php');
								 
							  $sqlih = "SELECT * FROM buil_builds where id='".$idTare."' ";
							  if(!$resulh = mysqli_query($conexion, $sqlih)) die();
							  if($rowh = mysqli_fetch_array($resulh))
							  
	$status = $rowh['status'];
	switch ($status) {
		
		case "":
        echo '<button class="btn btn-sm ">INICIAR</button>';
        break;
    case "en desarrollo":
        echo '<button class="btn btn-sm ">STOP</button>';
        break;
    case "stop":
        echo '<button class="btn btn-sm ">REANUDAR</button><button class="btn btn-sm ">RESOLVER</button>';
        break;
    case "resuelta":
        echo '<button class="btn btn-sm ">CERRAR</button>';
        break;
    case "cerrada":
        echo '<button class="btn btn-sm ">REABRIR</button>';
        break; 
    case "reabierta":
        echo '<button class="btn btn-sm ">EN DESARROLLO</button>';
        break;   
  }
							
}


function functionTipos($tiposissue){
	$tiposissue .= '<option value="">Seleccione tipo</option>';
	$tiposissue .= '<option value="to_do">TO-DO</option>';
	$tiposissue .= '<option value="tarea_interna">Tarea Interna</option>';
	$tiposissue .= '<option value="analisis">Análisis</option>';
	$tiposissue .= '<option value="arquitectura">Arquitectura</option>';
	$tiposissue .= '<option value="disenyo">Diseño</option>';
	$tiposissue .= '<option value="desarrollo">Desarrollo</option>';
	$tiposissue .= '<option value="test">Test</option>';
	return $tiposissue;
}
function functionPrioridades($tiposprioridades){
	$tiposprioridades .= '<option value="">Seleccione prioridad</option>';
	$tiposprioridades .= '<option value="trivial">Trivial</option>';
	$tiposprioridades .= '<option value="normal">Normal</option>';
	$tiposprioridades .= '<option value="critica">Crítica</option>';
	return $tiposprioridades;
}

function altaFormularioAsignar($altaFormularioAsignar){require('lib/configuracion.php');
  						      $sqli = "SELECT * FROM usua_usuarios ";
							  if(!$resul = mysqli_query($conexion, $sqli)) die();
							  $altaFormularioAsignar = array();
							  while($row = mysqli_fetch_array($resul)){	
							  $altaFormularioAsignar []= $row;
							  }
	return $altaFormularioAsignar;
}


function guardarBloques($path,$lengua,$getId){
  	require('lib/configuracion.php');
if($_POST['enviarnuevas']){

$getId=$_POST['getId'];
$getIdentificador=$_POST['idcspr']; 
$getiden = $_POST["ide"];
       echo $numeroregistros = count($getiden);
        for($i=1;$i<$numeroregistros;$i++){

           $clientemult = $getiden[$i];
   
             $nombre_bloque=$_POST['nombre_bloque'][$i];
	           $descripcion_bloque=$_POST['descripcion_bloque'][$i];   
						 $fecha_bloque=$_POST['fecha_bloque'][$i]; 
						 $resultado_esperado=$_POST['resultado_esperado'][$i]; 
   
   
          $consultainsert = "INSERT INTO bloq_bloque_casos (id_cspr,nombre_bloque,descripcion_bloque,resultado_esperado) VALUES ('".$getIdentificador."','".$nombre_bloque."','".$descripcion_bloque."','".$resultado_esperado."')";
          $resultadoinsert = mysqli_query($conexion,$consultainsert);
          
														      if (mysqli_query($conexion, $consultainsert)) {
															    echo '<script type="text/javascript">';
																	echo 'setTimeout(function () { swal({ title: "REGISTROS ALMACENADOS",   text: "El almacenado se ha llevado a cabo",   timer: 3000,   showConfirmButton: false });  ';   
																	echo '}, 100);</script>';
																} else {echo "Error: " . $consultainsert . "<br>" . mysqli_error($conexion);}
														mysqli_close($conexion);		
														echo '<meta http-equiv="Refresh" content="2;url='.$path.'/'.$lengua.'/'.$getId.'/c/casosprueba">';

          
        }
}        
   }         
            
  
  
  
  
  
  
  function guardarProyecto($path,$lengua,$getId,$nombre_proyecto,$descripcion_proyecto){	
  	if(isset($_POST['botonguardar'])){
  		require('lib/configuracion.php');
  		$getId = $_POST['getId'];
			$nombre_proyecto = $_POST['nombre_proyecto'];
			$descripcion_proyecto = $_POST['descripcion_proyecto'];	
  		

$sql = "INSERT INTO proy_proyectos (nombre_proyecto,descripcion_proyecto) VALUES ('".$nombre_proyecto."','".$descripcion_proyecto."')";

if (mysqli_query($conexion, $sql)) {
	    echo '<script type="text/javascript">';
			echo 'setTimeout(function () { swal({ title: "REGISTRO ALMACENADO",   text: "El almacenado se ha llevado a cabo",   timer: 3000,   showConfirmButton: false });  ';   
			echo '}, 100);</script>';
		} else {echo "Error: " . $sql . "<br>" . mysqli_error($conexion);}

			mysqli_close($conexion);		
  		

			echo '<meta http-equiv="Refresh" content="2;url='.$path.'/'.$lengua.'/'.$getId.'/gestion-proyectos">'; 
		}
  }

  
  
function guardarNuevaBuild($path,$lengua,$getId,$nombre_build,$descripcion_build,$fecha_build){	
  	
		
		
  		require('lib/configuracion.php');
  		$getId = $_POST['getId'];
			$nombre_build = $_POST['nombre_build'];
			$descripcion_build = $_POST['descripcion_build'];	
			$fecha_build = $_POST['fecha_build'];	
  		
			$sql = "INSERT INTO buil_builds (nombre_build,descripcion_build,fecha_build,id_proyecto) VALUES ('".$nombre_build."','".$descripcion_build."','".$fecha_build."','".$getId."')";

			if (mysqli_query($conexion, $sql)) {
				    echo '<script type="text/javascript">';
						echo 'setTimeout(function () { swal({ title: "REGISTRO ALMACENADO",   text: "El almacenado se ha llevado a cabo",   timer: 3000,   showConfirmButton: false });  ';   
						echo '}, 100);</script>';
					} else {echo "Error: " . $sql . "<br>" . mysqli_error($conexion);}

			mysqli_close($conexion);		
  		
			echo '<meta http-equiv="Refresh" content="2;url='.$path.'/'.$lengua.'/'.$getId.'/v/builds">'; 
		
  } 
 function guardarNuevaSuite($path,$lengua,$idBuild,$nombre_suite,$descripcion_suite,$fecha_suite){	
  	
		
		
  		require('lib/configuracion.php');
  		$idBuild = $_POST['idBuild'];
			$nombre_suite = $_POST['nombre_suite'];
			$descripcion_suite = $_POST['descripcion_suite'];	
			$fecha_suite = $_POST['fecha_suite'];	
  		
			$sql = "INSERT INTO suit_suites (nombre_suite,descripcion_suite,fecha_suite,id_build) VALUES ('".$nombre_suite."','".$descripcion_suite."','".$fecha_suite."','".$idBuild."')";

			if (mysqli_query($conexion, $sql)) {
				    echo '<script type="text/javascript">';
						echo 'setTimeout(function () { swal({ title: "REGISTRO ALMACENADO",   text: "El almacenado se ha llevado a cabo",   timer: 3000,   showConfirmButton: false });  ';   
						echo '}, 100);</script>';
					} else {echo "Error: " . $sql . "<br>" . mysqli_error($conexion);}

			mysqli_close($conexion);		
  		
			echo '<meta http-equiv="Refresh" content="2;url='.$path.'/'.$lengua.'/'.$idBuild.'/p/suites">'; 
		
  }  
  
function guardarSuite($path,$lengua,$getId,$nombre_proyecto,$descripcion_proyecto){	
  	if(isset($_POST['botonguardarsuite'])){
  		require('lib/configuracion.php');
  		$getId = $_POST['getId'];
			$nombre_suite = $_POST['nombre_suite'];
			$descripcion_suite = $_POST['descripcion_suite'];	
			$fecha_suite = $_POST['fecha_suite'];	
  		
			$sql = "INSERT INTO suit_suites (nombre_suite,descripcion_suite,fecha_suite,id_build) VALUES ('".$nombre_suite."','".$descripcion_suite."','".$fecha_suite."','".$getId."')";

			if (mysqli_query($conexion, $sql)) {
				    echo '<script type="text/javascript">';
						echo 'setTimeout(function () { swal({ title: "REGISTRO ALMACENADO",   text: "El almacenado se ha llevado a cabo",   timer: 3000,   showConfirmButton: false });  ';   
						echo '}, 100);</script>';
					} else {echo "Error: " . $sql . "<br>" . mysqli_error($conexion);}

			mysqli_close($conexion);		
  		
			echo '<meta http-equiv="Refresh" content="2;url='.$path.'/'.$lengua.'/'.$getId.'/p/suites">'; 
		}
  } 

    
 function guardarCaso($path,$lengua,$getId,$nombre_caso,$descripcion_casoo){	
  	if(isset($_POST['botonguardarcaso'])){
  		require('lib/configuracion.php');
  		$getId = $_POST['getId'];
			$nombre_caso = $_POST['nombre_caso'];
			$descripcion_caso = $_POST['descripcion_caso'];	
			$fecha_caso = $_POST['fecha_caso'];	
  		
			$sql = "INSERT INTO cspr_casosprueba (nombre_caso,descripcion_caso,fecha_caso,id_suite) VALUES ('".$nombre_caso."','".$descripcion_caso."','".$fecha_caso."','".$getId."')";

			if (mysqli_query($conexion, $sql)) {
				    echo '<script type="text/javascript">';
						echo 'setTimeout(function () { swal({ title: "REGISTRO ALMACENADO",   text: "El almacenado se ha llevado a cabo",   timer: 3000,   showConfirmButton: false });  ';   
						echo '}, 100);</script>';
					} else {echo "Error: " . $sql . "<br>" . mysqli_error($conexion);}

			mysqli_close($conexion);		
  		
			echo '<meta http-equiv="Refresh" content="2;url='.$path.'/'.$lengua.'/'.$getId.'/c/casosprueba">'; 
		}
  } 
  
  
  
function guardarBuild($path,$lengua,$getId,$nombre_proyecto,$descripcion_proyecto){	
  	if(isset($_POST['botonguardarbuild'])){
  		require('lib/configuracion.php');
  		$getId = $_POST['getId'];
			$nombre_build = $_POST['nombre_build'];
			$descripcion_build = $_POST['descripcion_build'];	
			$fecha_build = $_POST['fecha_build'];	
  		
			$sql = "INSERT INTO buil_builds (nombre_build,descripcion_build,fecha_build,id_proyecto) VALUES ('".$nombre_build."','".$descripcion_build."','".$fecha_build."','".$getId."')";

			if (mysqli_query($conexion, $sql)) {
				    echo '<script type="text/javascript">';
						echo 'setTimeout(function () { swal({ title: "REGISTRO ALMACENADO",   text: "El almacenado se ha llevado a cabo",   timer: 3000,   showConfirmButton: false });  ';   
						echo '}, 100);</script>';
					} else {echo "Error: " . $sql . "<br>" . mysqli_error($conexion);}

			mysqli_close($conexion);		
  		
			echo '<meta http-equiv="Refresh" content="2;url='.$path.'/'.$lengua.'/'.$getId.'/v/builds">'; 
		}
  } 
  
  
  
  function borrarMasivoProyecto($path,$lengua,$getId,$checkbox,$value,$tabla){
  		require('lib/configuracion.php');

  	       if($_POST['eliminacionmasiva']){
                  if($_POST['eliminacion']==''){} else {
                  	$checkbox=$_POST['eliminacion'];          	         
	                        foreach ($checkbox as $value) {     
																                     if($value==$getId){echo '<script type="text/javascript">';
	                                                               echo 'setTimeout(function () { swal({   title: "ERROR",   text: "No se puede borrar el proyecto abierto en este momento",   timer: 3000,   showConfirmButton: false });  ';   
	                                                               echo '}, 100);</script>';
	                                                               echo '<meta http-equiv="Refresh" content="2;url='.$path.'/'.$lengua.'/'.$getId.'/gestion-proyectos">';             
																										 } else {      
																                              $eliminar = "delete from ".$tabla." where id=".$value."";
																                              if (mysqli_query($conexion, $eliminar)) {
																                                                               echo '<script type="text/javascript">';
																                                                               echo 'setTimeout(function () { swal({   title: "BORRADO",   text: "El borrado se ha llevado a cabo",   timer: 3000,   showConfirmButton: false });  ';   
																                                                               echo '}, 100);</script>';
																                                                               echo '<meta http-equiv="Refresh" content="2">';             
																                              }
																                      }                  
																                              
	                         } 
                   }
            }
                                                           
  }
 
 
 
 
   function activarDesactivarmasivo($path,$lengua,$getId,$checkbox,$value,$tabla){
  		require('lib/configuracion.php');

  	       if($_POST['activacionmasiva']){
                  if($_POST['eliminacion']==''){} else {
                  	$checkbox=$_POST['eliminacion'];          	         
	                        foreach ($checkbox as $value) {     
																                     if($value==$getId){echo '<script type="text/javascript">';
	                                                               echo 'setTimeout(function () { swal({   title: "ERROR",   text: "No se puede desactivar el proyecto abierto en este momento",   timer: 3000,   showConfirmButton: false });  ';   
	                                                               echo '}, 100);</script>';
	                                                               echo '<meta http-equiv="Refresh" content="2;url='.$path.'/'.$lengua.'/'.$getId.'/gestion-proyectos">';             
																										 } else {      
														
																                              
														//$sqlBB = "SELECT * FROM buil_builds WHERE id=".$value." ";
										        //if($rowBB = mysqli_fetch_array($resultBB);
														//if($rowBB['activa']=='S'){$valorActiva='N';} else {$valorActiva='S';}	
														
														
														                           
														$actualizar=$conexion->query("UPDATE buil_builds SET activa='".$valorActiva."' WHERE id='".$value."' ");			
											                              
																if (mysqli_query($conexion, $actualizar)) {
																               echo '<script type="text/javascript">';
																               echo 'setTimeout(function () { swal({   title: "BORRADO",   text: "El borrado se ha llevado a cabo",   timer: 3000,   showConfirmButton: false });  ';   
																               echo '}, 100);</script>';
																               echo '<meta http-equiv="Refresh" content="2">';             
																   }
															                  
																  }                            
	                         } 
                   }
            }
                                                           
  }
  
  
  
   

    function editarMasivoProyecto($path,$lengua,$getId,$campo,$valor,$tabla){
	  		require('lib/configuracion.php');
	  		if($_POST['modificacionmasiva']){    	         
	               foreach ($_POST as $campo => $valor) {     							                  
									 $_SESSION['sesionvar'][$campo] = $valor;						                              						                              
	               } 
           			echo '<meta http-equiv="Refresh" content="0;url='.$path.'/'.$lengua.'/'.$getId.'/edicion">';       
	        }                                                  
    }
  
    function editarMasivoBuilds($path,$lengua,$getId,$campo,$valor,$tabla){
	  		require('lib/configuracion.php');
	  		if($_POST['modificacionmasiva']){    	         
	               foreach ($_POST as $campo => $valor) {     							                  
									 $_SESSION['sesionvarbuilds'][$campo] = $valor;						                              						                              
	               } 
           			echo '<meta http-equiv="Refresh" content="0;url='.$path.'/'.$lengua.'/'.$getId.'/ed/edicionbuilds">';       
	        }                                                  
    }  
     function editarMasivoSuites($path,$lengua,$getId,$campo,$valor,$tabla){
	  		require('lib/configuracion.php');
	  		if($_POST['modificacionmasiva']){    	         
	               foreach ($_POST as $campo => $valor) {     							                  
									 $_SESSION['sesionvarsuites'][$campo] = $valor;						                              						                              
	               } 
           			echo '<meta http-equiv="Refresh" content="0;url='.$path.'/'.$lengua.'/'.$getId.'/eds/edicionsuites">';       
	        }                                                  
    }  
    
    function editarMasivoCasos($path,$lengua,$getId,$campo,$valor,$tabla){
	  		require('lib/configuracion.php');
	  		if($_POST['modificacionmasiva']){    	         
	               foreach ($_POST as $campo => $valor) {     							                  
									 $_SESSION['sesionvarcasos'][$campo] = $valor;						                              						                              
	               } 
           			echo '<meta http-equiv="Refresh" content="0;url='.$path.'/'.$lengua.'/'.$getId.'/edc/edicioncasos">';       
	        }                                                  
    }     
    
    
    function recuperarArrayCasos($path,$lengua,$getId,$crecup,$valor,$tabla){
	  		require('lib/configuracion.php');
	  		 		
	  		
								$recup = $_SESSION['sesionvarcasos']['eliminacion'];
								
	               foreach ($recup as $valor) {     						                  
							             $sql = "SELECT * FROM cspr_casosprueba where id ='".$valor."' ";
							             if(!$result = mysqli_query($conexion, $sql)) die();
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
														  echo '<div class="form-group">';
														  echo '<label class="col-12 control-label no-padding" for="name">'.$TXT_fechaCasoPr.'</label>';
														  echo '<div class="col-12 no-padding">';
		                          echo '<input type="text" class="form-control"  name="fecha_caso['.$rowSalida['id'].']" value="'.$rowSalida['fecha_caso'].'" />';
													  	echo '</div>';
							echo '</div>';
							echo '</div>';
														
														
							echo '<div class="col-md-10">';														
														echo '<div class="form-group">';
														echo '<label class="col-12 control-label no-padding" for="name">'.$TXT_Nombredelplan.'</label>';
														echo '<div class="col-12 no-padding">';
								echo '<input type="text" class="form-control" name="nombre_caso['.$rowSalida['id'].']" value="'.$rowSalida['nombre_caso'].'" />';
														echo '</div>';
														echo '</div>';
														
																										
														echo '<div class="form-group">';
														echo '<label class="col-12 control-label no-padding" for="name">'.$TXT_Nombredelplan.'</label>';
														echo '<div class="col-12 no-padding">';
								echo '<textarea class="form-control" rows="10" name="descripcion_caso['.$rowSalida['id'].']">'.$rowSalida['descripcion_caso'].'</textarea>';
														echo '</div>';
							echo '</div>';
														
														
														echo '</fieldset>';	
							              echo '</div>';
							              echo '</div>';
	    
							             }			                              						                              
	               }                                                                
    }    
    
    
  function recuperarArraySuites($path,$lengua,$getId,$crecup,$valor,$tabla){
	  		require('lib/configuracion.php');
	  		 		
	  		
								$recup = $_SESSION['sesionvarsuites']['eliminacion'];
								
	               foreach ($recup as $valor) {     						                  
							             $sql = "SELECT * FROM suit_suites where id ='".$valor."' ";
							             if(!$result = mysqli_query($conexion, $sql)) die();
							             while($rowSalida = mysqli_fetch_array($result))
							             { 
							             	echo '<input type="hidden" class="form-control" readonly name="tabla" value="'.$tabla.'" />';
														echo '<div class="card mb-4">';
														echo '<div class="card-block">';
														echo '<fieldset>';
							
							echo '<div class="row">';			
							echo '<div class="col-md-2">';											
														  echo '<div class="form-group">';
														  echo '<label class="col-12 control-label no-padding" for="name">'.$TEXT_TNombredelasuite.'</label>';
														  echo '<div class="col-12 no-padding">';
		                          echo '<input type="text" class="form-control" readonly name="getId[]" value="'.$rowSalida['id'].'" />';
								echo '<input type="hidden" class="form-control" readonly name="getIdentificador['.$rowSalida['id'].']" value="'.$rowSalida['id'].'" />';

									echo '</div>';
														  echo '</div>';
														  echo '<div class="form-group">';
														  echo '<label class="col-12 control-label no-padding" for="name">'.$TXT_fechabuild.'</label>';
														  echo '<div class="col-12 no-padding">';
		                          echo '<input type="text" class="form-control"  name="fecha_suite['.$rowSalida['id'].']" value="'.$rowSalida['fecha_suite'].'" />';
													  	echo '</div>';
							echo '</div>';
							echo '</div>';
														
														
							echo '<div class="col-md-10">';														
														echo '<div class="form-group">';
														echo '<label class="col-12 control-label no-padding" for="name">'.$TXT_Nombredelplan.'</label>';
														echo '<div class="col-12 no-padding">';
								echo '<input type="text" class="form-control" name="nombre_suite['.$rowSalida['id'].']" value="'.$rowSalida['nombre_suite'].'" />';
														echo '</div>';
														echo '</div>';
														
																										
														echo '<div class="form-group">';
														echo '<label class="col-12 control-label no-padding" for="name">'.$TXT_Nombredelplan.'</label>';
														echo '<div class="col-12 no-padding">';
								echo '<textarea class="form-control" rows="10" name="descripcion_suite['.$rowSalida['id'].']">'.$rowSalida['descripcion_suite'].'</textarea>';
														echo '</div>';
							echo '</div>';
														
														
														echo '</fieldset>';	
							              echo '</div>';
							              echo '</div>';
	    
							             }			                              						                              
	               }                                                                
    }     
       
  function recuperarArrayBuilds($path,$lengua,$getId,$crecup,$valor,$tabla){
	  		require('lib/configuracion.php');
	  		 		
	  		
								$recup = $_SESSION['sesionvarbuilds']['eliminacion'];
								
	               foreach ($recup as $valor) {     						                  
							             $sql = "SELECT * FROM buil_builds where id ='".$valor."' ";
							             if(!$result = mysqli_query($conexion, $sql)) die();
							             while($rowSalida = mysqli_fetch_array($result))
							             { 
							             	echo '<input type="hidden" class="form-control" readonly name="tabla" value="'.$tabla.'" />';
														echo '<div class="card mb-4">';
														echo '<div class="card-block">';
														echo '<fieldset>';
							
							echo '<div class="row">';			
							echo '<div class="col-md-2">';											
														  echo '<div class="form-group">';
														  echo '<label class="col-12 control-label no-padding" for="name">'.$TXT_Nombredelplan.'</label>';
														  echo '<div class="col-12 no-padding">';
		                          echo '<input type="text" class="form-control" readonly name="getId[]" value="'.$rowSalida['id'].'" />';
								echo '<input type="hidden" class="form-control" readonly name="getIdentificador['.$rowSalida['id'].']" value="'.$rowSalida['id'].'" />';

									echo '</div>';
														  echo '</div>';
														  echo '<div class="form-group">';
														  echo '<label class="col-12 control-label no-padding" for="name">'.$TXT_fechabuild.'</label>';
														  echo '<div class="col-12 no-padding">';
		                          echo '<input type="text" class="form-control"  name="fecha_build['.$rowSalida['id'].']" value="'.$rowSalida['fecha_build'].'" />';
													  	echo '</div>';
							echo '</div>';
							echo '</div>';
														
														
							echo '<div class="col-md-10">';														
														echo '<div class="form-group">';
														echo '<label class="col-12 control-label no-padding" for="name">'.$TXT_Nombredelplan.'</label>';
														echo '<div class="col-12 no-padding">';
								echo '<input type="text" class="form-control" name="nombre_build['.$rowSalida['id'].']" value="'.$rowSalida['nombre_build'].'" />';
														echo '</div>';
														echo '</div>';
														
																										
														echo '<div class="form-group">';
														echo '<label class="col-12 control-label no-padding" for="name">'.$TXT_Nombredelplan.'</label>';
														echo '<div class="col-12 no-padding">';
								echo '<textarea class="form-control" rows="10" name="descripcion_build['.$rowSalida['id'].']">'.$rowSalida['descripcion_build'].'</textarea>';
														echo '</div>';
							echo '</div>';
														
														
														echo '</fieldset>';	
							              echo '</div>';
							              echo '</div>';
	    
							             }			                              						                              
	               }                                                                
    }  
  
    function recuperarArray($path,$lengua,$getId,$crecup,$valor){
	  		require('lib/configuracion.php');
								$recup = $_SESSION['sesionvar']['eliminacion'];
	               foreach ($recup as $valor) {     							                  
							             $sql = "SELECT * FROM proy_proyectos where id ='".$valor."' ";
							             if(!$result = mysqli_query($conexion, $sql)) die();
							             while($rowSalida = mysqli_fetch_array($result))
							             {echo '<input type="text" class="form-control" readonly name="tabla" value="'.$tabla.'" />';
														echo '<div class="card mb-4">';
														echo '<div class="card-block">';
														echo '<fieldset>';
														echo '<div class="row">';			
														echo '<div class="col-md-2">';											
														echo '<div class="form-group">';
														echo '<label class="col-12 control-label no-padding" for="name">'.$TXT_Nombredelplan.'</label>';
														echo '<div class="col-12 no-padding">';
		                        echo '<input type="text" class="form-control" readonly name="getId[]" value="'.$rowSalida['id'].'" />';
														echo '</div>';
														echo '</div>';
														echo '</div>';
														echo '<div class="col-md-10">';														
														echo '<div class="form-group">';
														echo '<label class="col-12 control-label no-padding" for="name">'.$TXT_Nombredelplan.'</label>';
														echo '<div class="col-12 no-padding">';
									          echo '<input type="text" class="form-control" name="nombre_proyecto['.$rowSalida['id'].']" value="'.$rowSalida['nombre_proyecto'].'" />';
														echo '</div>';
														echo '</div>';
														echo '</div>';
														echo '</div>';														
														echo '<div class="form-group">';
														echo '<label class="col-12 control-label no-padding" for="name">'.$TXT_Nombredelplan.'</label>';
														echo '<div class="col-12 no-padding">';
									          echo '<textarea class="form-control" name="descripcion_proyecto['.$rowSalida['id'].']">'.$rowSalida['descripcion_proyecto'].'</textarea>';
														echo '</div></div>';
														
														
														echo '</fieldset>';	
							              echo '</div>';
							              echo '</div>';
	
							             }			                              						                              
	               }                                                                
    }


  function guardarMasivoBuild($path,$lengua,$getId,$getIdc,$value){
  		require('lib/configuracion.php');

  	       if($_POST['guardar']){

                  	$getIdc=$_POST['getId'];          	       
	                        foreach ($getIdc as $value) {
								$getIdentificador=mysqli_real_escape_string($conexion, $_POST['getIdentificador'][$value]);
	                        	$nombre_build=mysqli_real_escape_string($conexion, $_POST['nombre_build'][$value]);
	                        	$descripcion_build=mysqli_real_escape_string($conexion, $_POST['descripcion_build'][$value]);   
								$fecha_build=mysqli_real_escape_string($conexion, $_POST['fecha_build'][$value]); 
                    	     $actualizar=$conexion->query("UPDATE buil_builds SET nombre_build='".$nombre_build."',descripcion_build='".$descripcion_build."',fecha_build='".$fecha_build."' WHERE id='".$getIdentificador."' ");			
													 if($actualizar==true){
																                 echo '<script type="text/javascript">';
																                 echo 'setTimeout(function () { swal({   title: "ACTUALIZADO",   text: "la modificacion se ha llevado a cabo",   timer: 3000,   showConfirmButton: false });  ';   
																                 echo '}, 100);</script>';
																                 echo '<meta http-equiv="Refresh" content="2;url='.$path.'/'.$lengua.'/'.$getId.'/ed/edicionbuilds">';             
																             }                                                  
	                         } 
            }                                                  
  }



  function guardarMasivoCasos($path,$lengua,$getId,$getIdc,$value){
  		require('lib/configuracion.php');

  	       if($_POST['guardar']){

                  	$getIdc=$_POST['getId'];          	       
	                        foreach ($getIdc as $value) {
								$getIdentificador=mysqli_real_escape_string($conexion, $_POST['getIdentificador'][$value]);
	                        	$nombre_caso=mysqli_real_escape_string($conexion, $_POST['nombre_caso'][$value]);
	                        	$descripcion_caso=mysqli_real_escape_string($conexion, $_POST['descripcion_caso'][$value]);   
								            $fecha_caso=mysqli_real_escape_string($conexion, $_POST['fecha_caso'][$value]); 
                    	     $actualizar=$conexion->query("UPDATE cspr_casosprueba SET nombre_caso='".$nombre_caso."',descripcion_caso='".$descripcion_caso."',fecha_caso='".$fecha_caso."' WHERE id='".$getIdentificador."' ");			
													 if($actualizar==true){
																                 echo '<script type="text/javascript">';
																                 echo 'setTimeout(function () { swal({   title: "ACTUALIZADO",   text: "la modificacion se ha llevado a cabo",   timer: 3000,   showConfirmButton: false });  ';   
																                 echo '}, 100);</script>';
																                 echo '<meta http-equiv="Refresh" content="2;url='.$path.'/'.$lengua.'/'.$getId.'/edc/edicioncasos">';             
																             }                                                  
	                         } 
            }                                                  
  }
  
  function guardarMasivoSuite($path,$lengua,$getId,$getIdc,$value){
  		require('lib/configuracion.php');

  	       if($_POST['guardar']){

                  	$getIdc=$_POST['getId'];          	       
	                        foreach ($getIdc as $value) {
								$getIdentificador=mysqli_real_escape_string($conexion, $_POST['getIdentificador'][$value]);
	                        	$nombre_suite=mysqli_real_escape_string($conexion, $_POST['nombre_suite'][$value]);
	                        	$descripcion_suite=mysqli_real_escape_string($conexion, $_POST['descripcion_suite'][$value]);   
								$fecha_suite=mysqli_real_escape_string($conexion, $_POST['fecha_suite'][$value]); 
                    	     $actualizar=$conexion->query("UPDATE suit_suites SET nombre_suite='".$nombre_suite."',descripcion_suite='".$descripcion_suite."',fecha_suite='".$fecha_suite."' WHERE id='".$getIdentificador."' ");			
													 if($actualizar==true){
																                 echo '<script type="text/javascript">';
																                 echo 'setTimeout(function () { swal({   title: "ACTUALIZADO",   text: "la modificacion se ha llevado a cabo",   timer: 3000,   showConfirmButton: false });  ';   
																                 echo '}, 100);</script>';
																                 echo '<meta http-equiv="Refresh" content="2;url='.$path.'/'.$lengua.'/'.$getId.'/eds/edicionsuites">';             
																             }                                                  
	                         } 
            }                                                  
  }

  function guardarMasivoProyecto($path,$lengua,$getId,$getIdc,$value){
  		require('lib/configuracion.php');

  	       if($_POST['guardar']){

                  	$getIdc=$_POST['getId'];          	       
	                        foreach ($getIdc as $value) {
	                        	$nombre_proyecto=mysqli_real_escape_string($conexion, $_POST['nombre_proyecto'][$value]);
	                        	$descripcion_proyecto=mysqli_real_escape_string($conexion, $_POST['descripcion_proyecto'][$value]);   

                    	     $actualizar=$conexion->query("UPDATE proy_proyectos SET nombre_proyecto='".$nombre_proyecto."',descripcion_proyecto='".$descripcion_proyecto."' WHERE id='".$value."' ");			
													 if($actualizar==true){
																                 echo '<script type="text/javascript">';
																                 echo 'setTimeout(function () { swal({   title: "ACTUALIZADO",   text: "la modificacion se ha llevado a cabo",   timer: 3000,   showConfirmButton: false });  ';   
																                 echo '}, 100);</script>';
																                 echo '<meta http-equiv="Refresh" content="2;url='.$path.'/'.$lengua.'/'.$getId.'/edicion">';             
																             }                                                  
	                         } 
            }                                                  
  }


  function borrado($path,$lengua)
  {	require('lib/configuracion.php');
  	
  	echo '<form action="" method="POST">';
  	echo 'desea eliminar?';	
  	echo '<input type="text" name="getId" value="'.$_GET['getId'].'" />';
  	echo '<input type="submit" name="borradoSimple" value="Sí, borrar" />'; 	
  	echo '</form>';					
  
  }	
  
  function eliminarYvolver($path,$lengua,$getId)
  {          if($_POST['borradoSimple']){
  										$getIde=$_POST['getId'];
  										
											
										//	if($getId==$getIde){echo '<script type="text/javascript">';
	                   //                                            echo 'setTimeout(function () { swal({   title: "ERROR",   text: "No se puede borrar el proyecto abierto en este momento",   timer: 3000,   showConfirmButton: false });  ';   
	                    //                                           echo '}, 100);</script>';
	                   //                                            //echo '<meta http-equiv="Refresh" content="2;url='.$path.'/'.$lengua.'/'.$getId.'/gestion-proyectos">';             
											//	} else {      
										echo '<script>alert("'.$getId.'");</script>';
																  $eliminars =$conexion->query("delete from proy_proyectos where id='".$getIde."'");
																   if ($eliminars==true) {
																               echo '<script type="text/javascript">';
																               echo 'setTimeout(function () { swal({   title: "BORRADO",   text: "El borrado se ha llevado a cabo",   timer: 3000,   showConfirmButton: false });  ';   
																               echo '}, 100);</script>';
																               echo '<script>parent.$.fn.colorbox.close();</script>';            
																     }
										// }   	
										}			
  }	
	?>
	
	
