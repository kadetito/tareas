<?php 



//=====================
// 2 FUNCIO DEFINIR IDIOMES
//======================
if ($_REQUEST['idioma']=='')    $lengua= 'ca'; 
if ($_REQUEST['idioma'] == 'ca')  $lengua='ca'; 
if ($_REQUEST['idioma'] == 'es')  $lengua='es'; 
if ($_REQUEST['idioma'] == 'fr')  $lengua='fr';
if ($_REQUEST['idioma'] == 'en')  $lengua='en';
if ($_REQUEST['idioma'] == 'ge')  $lengua='ge';
if ($_REQUEST['idioma'] == 'eu')  $lengua='eu';

function idioma(){echo 'ca';}

$dateTimedeHoy = date('Y-m-d H:i:s');
$idCliente = '9000001';
//=====================
// FUNCIO ID USUARIO (PENDIENTE PARA LOGIN PERO SIRVE PARA ACCESO A PERFIL, DE MOMENTO HARDCODEADO)
// figura a totes les planes
//======================
        $sqlUsuarioSetti = "SELECT * FROM usua_usuarios WHERE id = '8000001' ";
        if(!$resultUsuarioSetti = mysqli_query($conexion, $sqlUsuarioSetti)) die();
        if($rowUsuario = mysqli_fetch_array($resultUsuarioSetti))
		$perfil_id_usuario = $rowUsuario['id'];	
		$perfil_nombre_usuario = $rowUsuario['nombre'];
		$perfil_nombre_usuario_enc = base64_encode($rowUsuario['nombre']);


		$dateFetxca = date ("H");
		if ($dateFetxca < 12)  {$fasedelDia = '<i class="far fa-sun"></i> Buenos días,';}
		else if ($dateFetxca < 18)  {$fasedelDia = '<i class="fas fa-sun"></i> Buenas tardes,';}
		else {$fasedelDia = '<i class="fas fa-moon"></i> Buenas noches,';}

		$WelcomenombreCompletoUsuario = $fasedelDia.' '.$perfil_nombre_usuario;
		$nivelPrivilegiosUsuario = $rowUsuario['privilegios'];


$_SESSION['usuario_session'] = '8000001';//pongo a manija el usuario en session porque aun no he hecho el login
//=========================
// DETALLE PERFIL USUARIO
//=========================	
$identificadorUser = $_GET['pidentif']; 
$userSession = $_SESSION['usuario_session'];  
if(isset($identificadorUser)){
		  //si el usuario en url no es el mismo que está logeado, peto porque no quiero que se vea otro usuario que no sea el vigente
		 if($identificadorUser!=$userSession){echo '<script>alert("no puedes");</script>';header('Location: '.$path.'/error_acceso.php');exit;
		  } else {

        $sqlUsuario = "SELECT * FROM usua_usuarios WHERE id = '".$identificadorUser."' ";
        if(!$resultUsuario = mysqli_query($conexion, $sqlUsuario)) die();
        if($rowUser = mysqli_fetch_array($resultUsuario)){}


	  }
}	


//=====================
// FUNCIO GENERAL SETTINGS
// figura a totes les planes
//======================
        $sqlGeneralSetti = "SELECT * FROM sett_settings WHERE id = '1' ";
        if(!$resultGeneralSetti = mysqli_query($conexion, $sqlGeneralSetti)) die();
        if($rowSettings = mysqli_fetch_array($resultGeneralSetti))
//condicio idioma
    if($lengua=='en'){$metas=strip_tags($rowSettings['metasE']);$fotografia1Blogerismo=$Blogerismo['fotografia1'];$fotografia2Blogerismo=$Blogerismo['fotografia2'];$fotografia3Blogerismo=$Blogerismo['fotografia3'];$titolBlogerismo=$Blogerismo['titolE'];$texteBlogerismo=$Blogerismo['textE'];}
elseif($lengua=='es'){$metas=strip_tags($rowSettings['metasS']);$fotografia1Blogerismo=$Blogerismo['fotografia1'];$fotografia2Blogerismo=$Blogerismo['fotografia2'];$fotografia3Blogerismo=$Blogerismo['fotografia3'];$titolBlogerismo=$Blogerismo['titolS'];$texteBlogerismo=$Blogerismo['textS'];}
elseif($lengua=='ca'){$metas=strip_tags($rowSettings['metasC']);$fotografia1Blogerismo=$Blogerismo['fotografia1'];$fotografia2Blogerismo=$Blogerismo['fotografia2'];$fotografia3Blogerismo=$Blogerismo['fotografia3'];$titolBlogerismo=$Blogerismo['titolC'];$texteBlogerismo=$Blogerismo['textC'];}
$metas=$metas;
$telefon=$rowSettings['telefon'];
$emailgeneric=$rowSettings['emailgeneric'];                               
$adresa=$rowSettings['adresa'];                                   
$localitat=$rowSettings['localitat']; 
$provincia=$rowSettings['provincia'];                                    
$cp=$rowSettings['cp']; 
$url_facebook=$rowSettings['url_facebook']; 
$url_youtube=$rowSettings['url_youtube']; 
$url_plus=$rowSettings['url_plus']; 
$url_instagram=$rowSettings['url_instagram']; 
$url_skype=$rowSettings['skypeadress']; 
$url_twitter=$rowSettings['url_twitter'];
$url_tumblr=$rowSettings['url_tumblr'];
$url_pinterest=$rowSettings['url_pinterest'];
$url_wordpress=$rowSettings['url_wordpress'];
$url_linkedin=$rowSettings['url_linkedin'];
$url_flickr=$rowSettings['url_flickr'];
$analytics=$rowSettings['analytics'];
$webdeveloper=$rowSettings['webdeveloper'];
$developer=$rowSettings['developer'];
$version=$rowSettings['version'];
//==================
// funcion que encripta y decripta la variable de id_build para enmascarar la url
//==================
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

//=====================
// variables get CONSTANTES
//======================
$idIssue=$_GET['id_issue'];
$idProyecto=$_GET['id_proyecto'];
$per_idusuario=$_GET['perfil_usuario'];
$ordena=$_GET['ordena'];
$ordene=$_GET['ordene'];

//=====================
// FUNCIONES DE ORDENACION
//======================
  function funcionOrdenProy(){
  	if($_GET['ordena']=='ASC'){
  				$ordenacionProy.= '<a href="?ordena=DESC&valor_busqueda='.$_GET['valor_busqueda'].'"><em class="fa fa-caret-up"></em></a>';
			  } else {
  				$ordenacionProy.= '<a href="?ordena=ASC&valor_busqueda='.$_GET['valor_busqueda'].'"><em class="fa fa-caret-down"></em></a>';			  	
			  }
  } 

  function funcionOrdenEst(){
  	if($_GET['ordene']=='ASC'){
  				$ordenacionEst.= '<a href="?ordene=DESC&valor_busqueda='.$_GET['valor_busqueda'].'"><em class="fa fa-caret-up"></em></a>';
			  } else {
  				$ordenacionEst.= '<a href="?ordene=ASC&valor_busqueda='.$_GET['valor_busqueda'].'"><em class="fa fa-caret-down"></em></a>';			  	
			  }
  } 


//==================
// BUCLE DE ISSUES DEL INICIO
//==================

//if(isset($_GET['id_proyecto'])){
$tabla = 'buil_builds';
require_once("traduccion/".$lengua.".php");
require('includes/paginador_builds.php');
$bucleTablaBuilds='';
							$ii=0;
							while($crowd = mysqli_fetch_array($nquery)){
							$iii=$ii++;
if($crowd['estado']=='Open'){ $estadoIssue= '<i title="Estado: Abierta" class="fa fa-square greensq"></i> ';} else {$estadoIssue= '<i title="Estado: Parada" class="fa fa-square redsq"></i> ';} 							
$idTare  = encrypt_decrypt('encrypt', $rowSalida['id']);
//						  $sqlihoras = "SELECT * FROM hora_horas where id_tarea='".$crowd['id']."' ";
//							  if($rowhoras = mysqli_fetch_array($resulhoras))	{$Lasrowhoras=$rowhoras['horas'];}					




$bucleTablaBuilds.='<div class="card text-white bg-light "><div class="card-header">'.$estadoIssue.'';


//						    $sqlihoras = "SELECT * FROM hora_horas where id_tarea='".$crowd['id']."' ";
//							  if(!$resulhoras = mysqli_query($conexion, $sqlihoras)) die();
//							  if($rowhoras = mysqli_fetch_array($resulhoras))	{		


$r = mysqli_query($conexion, "SELECT SUM(horas) AS suma FROM hora_horas where id_tarea='".$crowd['id']."'");
$f = mysqli_fetch_assoc($r);
$sumadiferenciahoras = $crowd['horas_estimadas'] - $f["suma"];
$suma = $f["suma"];
$sumaMenosveinte = $crowd['horas_estimadas'] -20;
//si faltan menos de 20 horas para caducar muestro en rojo
if($suma >= $sumaMenosveinte){$estiloAlerta = '<i title="menos de 20 horas para caducar" class="fas fa-exclamation-triangle alertacaduca"></i>';} else {$estiloAlerta= '';}

$bucleTablaBuilds.='<span class="float-right">'.$estiloAlerta.' horas restantes: <b>'.$sumadiferenciahoras.'h.</b></span>';
// }
$bucleTablaBuilds.='</div><div class="card-body">';			   
								$sqli = "SELECT * FROM proy_proyectos where id='".$crowd['id_proyecto']."' ";						   
							  if(!$resul = mysqli_query($conexion, $sqli)) die();
							  if($rowSali = mysqli_fetch_array($resul))	{	$idProye = $rowSali['id'];				
$bucleTablaBuilds.='<h6><a href="'.$path.'/'.$lengua.'/'.$idProye.'/p" class="linkproyectoissuehome"><div class="col-md-12">'.$rowSali['nombre_proyecto'].'</div></a></h6>';
	             }



$bucleTablaBuilds.='<h5 class="card-title"><a href="'.$path.'/'.$lengua.'/'.$idTare.'" class="enlaceissuehome"><div class="col-md-12">'.$crowd['nombre_build'].'</div></a></h5>';
if($crowd['prioridad']=='Alta'){$estiloprioridad='rojoprioritario';} else {$estiloprioridad='';}
$bucleTablaBuilds.='<div class="clearfix"></div>';
$bucleTablaBuilds.='<hr class="featurette-divider">';
$bucleTablaBuilds.='<p class="textoscard">Departamento: <span class="badge badge-secondary">'.$crowd['tipo'].'</span></p>';
$bucleTablaBuilds.='<p class="textoscard">Prioridad: <strong class="'.$estiloprioridad.'">'.$crowd['prioridad'].'</strong></p>';
$bucleTablaBuilds.='<p class="textoscard">Coordina: <strong>'.$crowd['coordina'].'</strong></p>';
	switch ($crowd['status']){
		
case "abierta": $statusIssue =       '<span class="badge badge-primary azul">abierta</span>';break;
case "test": $statusIssue =          '<span class="badge badge-primary celeste">test</span>';break;
case "en desarrollo": $statusIssue = '<span class="badge badge-primary amarillo">en desarrollo</span>';break;
case "reabierta": $statusIssue =     '<span class="badge badge-primary rojoc">reabierta</span>';break;
case "cerrada": $statusIssue =       '<span class="badge badge-primary verde">cerrada</span>';break;
case "resuelta": $statusIssue =      '<span class="badge badge-primary verde">resuelta</span>';break;

																	}
$bucleTablaBuilds.='</div><div class="card-footer">'.$statusIssue.'  <span class="datafecha float-right">Fecha fin: '.substr($crowd['fecha_prevista'],0,10).'</span>';							 

$bucleTablaBuilds.='</div>
                </div>
       

';





		
				

 
				} 
$paginationCtrls = $paginationCtrles;
//}

//==================
// BORRADO MASIVO DE ISSUES DEL PAGINADOR DEL INICIO
//==================
$llamadaBorradoMasivo= '';    
  	       if($_POST['eliminacionmasiva']){	    
                  if($_POST['eliminacion']==''){} else {
                  	$checkbox=$_POST['eliminacion'];      
                  	$tabla =  $_POST['tabla'];   
	                        foreach ($checkbox as $value) {     
																                     if($value==$getId){
																                     	           $llamadaBorradoMasivo.= '<script type="text/javascript">';
	                                                               $llamadaBorradoMasivo.= 'setTimeout(function () { swal({   title: "ERROR",   text: "No se puede borrar el proyecto abierto en este momento",   timer: 3000,   showConfirmButton: false });  ';   
	                                                               $llamadaBorradoMasivo.= '}, 100);</script>';
	                                                               $llamadaBorradoMasivo.= '<meta http-equiv="Refresh" content="2;url='.$path.'/'.$lengua.'/'.$getId.'/gestion-proyectos">';             
																										 } else {      
																                              $eliminar = "delete from ".$tabla." where id=".$value."";
																                              if (mysqli_query($conexion, $eliminar)) {
																                                  $llamadaBorradoMasivo.= '<script type="text/javascript">';
																                                  $llamadaBorradoMasivo.= 'setTimeout(function () { swal({   title: "BORRADO",   text: "El borrado se ha llevado a cabo",   timer: 3000,   showConfirmButton: false });  ';   
																                                  $llamadaBorradoMasivo.= '}, 100);</script>';
																                                  $llamadaBorradoMasivo.= '<meta http-equiv="Refresh" content="2">';             
																                              }
																                      }                          
	                         } 
                   }
           }
                                                           
//==================
// EDITADO MASIVO DE ISSUES DEL PAGINADOR DEL INICIO
//==================
$llamadaEditarMasivo = ''; 


	
//==================
// DETALLE PROYECTO RECOJO DATOS
//==================
if(isset($idProyecto)){
	
							//	echo '<script>alert('.$idProyecto.');</script>';
							        $sqlDetalleProyecto = "SELECT * FROM proy_proyectos WHERE id = '".$idProyecto."' ";
							        if(!$resultDetalleProyecto = mysqli_query($conexion, $sqlDetalleProyecto)) die();
							        if($rowDetalleProyecto = mysqli_fetch_array($resultDetalleProyecto)) {
							        $id_proyecto = $rowDetalleProyecto['id'];
							        $urlpagina1 = '<li class="breadcrumb-item active">'.$titulo_seccion.': '.$rowDetalleProyecto['nombre_proyecto'].'</li>';
							        
							$V_nombre_proyecto =    $rowDetalleProyecto['nombre_proyecto'];
							$V_responsable =        $rowDetalleProyecto['responsable'];
							        
							        
							$fecha_prevista = date("d-m-Y", strtotime($rowDetalleProyecto['fecha_prevista']));if($fecha_prevista <= date("d-m-Y")){$V_fecha_prevista = '<span class="rojo">(sobrepasada) '.$fecha_prevista.'</span>';} else { $V_fecha_prevista = $fecha_prevista;}
							$V_fecha_creada = date("d-m-Y H:i:s", strtotime($rowDetalleProyecto['fecha_creacion']));

							if($rowDetalleProyecto['fecha_actualizacion']=='0000-00-00 00:00:00'){$V_fecha_actualizacion = 'nunca actualizada';} else {$fecha_actualizacion= date("d-m-Y", strtotime($rowDetalleProyecto['fecha_actualizacion'])); $V_fecha_actualizacion = $fecha_actualizacion;}
							if($rowDetalleProyecto['fecha_inicio']=='0000-00-00 00:00:00'){$V_fecha_inicio = '(NO INICIADA)';} else {$fecha_inicio= date("d-m-Y", strtotime($rowDetalleProyecto['fecha_inicio'])); $V_fecha_inicio = $fecha_inicio;}
							if($rowDetalleProyecto['fecha_final']=='0000-00-00 00:00:00'){} else {$fecha_final= date("d-m-Y", strtotime($rowDetalleProyecto['fecha_final'])); $V_fecha_final = $fecha_final;}
							$V_horas_estimadas =	substr($rowDetalleProyecto['horas_estimadas'],0,5);
							$V_tipo =  $rowDetalleProyecto['tipo'];
							$V_status =  $rowDetalleProyecto['status'];
							$V_prioridad =  $rowDetalleProyecto['prioridad'];
							$V_resolucion =  $rowDetalleProyecto['resolucion'];
							$V_componentes =  $rowDetalleProyecto['componentes'];
							//$etiquetasLabel = etiquetasLabel($etiquetas);foreach($etiquetasLabel as $msgLabel) {echo '<span class="badge badge-info">'.$msgLabel['label'].'</span>  ';};
							$V_descripcion_proyecto = $rowDetalleProyecto['descripcion_proyecto'];

																//==================DLISTA ISSUE del proyecto
																$sqli = "SELECT * FROM buil_builds where id_proyecto='".$idProyecto."' ";
															  if(!$resul = mysqli_query($conexion, $sqli)) die();
															  $tablaissuesProyecto = array();
															  if($resul->num_rows > 0){
																  while($row = mysqli_fetch_array($resul)){	
																  $tablaissuesProyecto []= $row;
																  }
															  } 
															  $listaIssuesProyecto= '';
															 	$tablaissuesProy = $tablaissuesProyecto;
															 	foreach($tablaissuesProy as $msgIssProy) {
																	switch ($msgIssProy['status']){
																		case "cerrada": $statusIssue = '<i class="verde fas fa-chevron-circle-right"></i>';break;
																		case "en desarrollo": $statusIssue = '<i class="amarillo fas fa-chevron-circle-right"></i>';break;
																		case "reabierta": $statusIssue = '<i class="rojo fas fa-chevron-circle-right"></i>';break;
																		case "abierta": $statusIssue = '<i class="azul fas fa-chevron-circle-right"></i>';break;
																	}
																	$idProyectoaissue  = encrypt_decrypt('encrypt', $msgIssProy['id']);
														     	$listaIssuesProyecto.= '<tr>
																				<td class="text-center">
																					'.$statusIssue.'
																				</td>
																				<td>
																					'.$msgIssProy['id'].'
																				</td>
																				<td>
																					sss
																				</td>
																				<td>
																					<a href="'.$path.'/'.$lengua.'/'.$idProyectoaissue.'"><div class="col-md-12">'.$msgIssProy['nombre_build'].'</div></a>
																				</td>
																				<td>
																				100%
																				</td>
																				<td>
																					'.$msgIssProy['horas_estimadas'].'h.
																				</td>
																	</tr>';
															 		};
															 		
															 						
        } 
        //mysqli_close($conexion);
       }


//============================
// TIPOS DE PROYECTO
//
//============================	   
	$sqli = "SELECT * FROM tipo_tiposproyecto";
	if(!$resul = mysqli_query($conexion, $sqli)) die();
		$tablaTiposProey = array();
		  if($resul->num_rows > 0){
			  while($row = mysqli_fetch_array($resul)){	
			  $tablaTiposProey []= $row;
			  }
		  } 	   
	    $tipos_de_proyecto= '';
		$tipos_de_proyecto= '<option value="">Seleccione el tipo de proyecto</option>';		
     	foreach($tablaTiposProey as $msgTyProy) {
     	$tipos_de_proyecto.= '<option value="'.$msgTyProy['id_tipo'].'">'.$msgTyProy['nombre_tipo_proyecto'].'</option>';		
     		};
			
//============================
// TIPOS DE PRIORIDAD
//
//============================	   
	$sqli = "SELECT * FROM prio_prioridadproyecto";
	if(!$resul = mysqli_query($conexion, $sqli)) die();
		$tablaPrioProey = array();
		  if($resul->num_rows > 0){
			  while($row = mysqli_fetch_array($resul)){	
			  $tablaPrioProey []= $row;
			  }
		  } 	   
	    $tipos_de_prioridad= '';
		$tipos_de_prioridad= '<option value="">Seleccione la prioridad</option>';		
     	foreach($tablaPrioProey as $msgPrProy) {
     	$tipos_de_prioridad.= '<option value="'.$msgPrProy['id_prio'].'">'.$msgPrProy['nombre_prioridad'].'</option>';		
     		};
//============================
// LISTA DE USUARIOS
//
//============================	   
	$sqli = "SELECT * FROM usua_usuarios";
	if(!$resul = mysqli_query($conexion, $sqli)) die();
		$tablaListaUsuarios = array();
		  if($resul->num_rows > 0){
			  while($row = mysqli_fetch_array($resul)){	
			  $tablaListaUsuarios []= $row;
			  }
		  } 	   
	    $lista_usuarios= '';
		$lista_usuarios= '<option value="">Seleccione al responsable de este proyecto</option>';		
     	foreach($tablaListaUsuarios as $msgLUsuarios) {
     	$lista_usuarios.= '<option value="'.$msgLUsuarios['id'].'">'.$msgLUsuarios['nombre'].'</option>';		
     		};	
//============================
// TIPOS DE STATUS
//
//============================	   
	$sqli = "SELECT * FROM stat_status";
	if(!$resul = mysqli_query($conexion, $sqli)) die();
		$tablaStaProey = array();
		  if($resul->num_rows > 0){
			  while($row = mysqli_fetch_array($resul)){	
			  $tablaStaProey []= $row;
			  }
		  } 	   
	  $tipos_de_Status= '';
		$tipos_de_Status= '<option value="">Seleccione el status de partida</option>';		
     	foreach($tablaStaProey as $msgStaProy) {
     	$tipos_de_Status.= '<option value="'.$msgStaProy['id_status'].'">'.$msgStaProy['nombre_status'].'</option>';		
     		}; 
//============================
// TIPOS DE ESTATUS (ESTADOS)
//
//============================	   
	$sqli = "SELECT * FROM esta_estatus";
	if(!$resul = mysqli_query($conexion, $sqli)) die();
		$tablaEstaProey = array();
		  if($resul->num_rows > 0){
			  while($row = mysqli_fetch_array($resul)){	
			  $tablaEstaProey []= $row;
			  }
		  } 	   
	  $tipos_de_estatus= '';
		$tipos_de_estatus= '<option value="">Seleccione el estado de partida</option>';		
     	foreach($tablaEstaProey as $msgEstaProy) {
     	$tipos_de_estatus.= '<option value="'.$msgEstaProy['id_estatus'].'">'.$msgEstaProy['nombre_estatus'].'</option>';		
     		}; 
//============================
// SELECTOR DE COMPONENTES
//
//============================	   
	$sqli = "SELECT * FROM comp_componentes";
	if(!$resul = mysqli_query($conexion, $sqli)) die();
		$tablaCompo = array();
		  if($resul->num_rows > 0){
			  while($row = mysqli_fetch_array($resul)){	
			  $tablaCompo []= $row;
			  }
		  } 	   
	  $componentes= '';
		$componentes= '<option value="">Seleccione Componente</option>';		
     	foreach($tablaCompo as $msgCompo) {
     	$componentes.= '<option value="'.$msgCompo['id_comp'].'">'.$msgCompo['nombre_componente'].'</option>';		
     		};  

//============================
// LISTADO DE PROYECTOS
// con paginador
//============================	
if(isset($_GET['otlf234'])){ //la variable definida en htaccess como otlf234
require('lib/conexion.php'); 
$tablapr = 'proy_proyectos';		
require('includes/paginador_proyectos_listado.php');
//echo '<script>alert('.$_GET['otlf234'].')</script>';
$listado_proyectos='';
							$ii=0;
							while($crowdproy = mysqli_fetch_array($nprquery)){
							$iii=$ii++;
//$listado_proyectos.='<a href="?proyeccion='.$crowdproy['id'].'" class="indicadorlateral"><div class="col-md-12" ><span class="coloreado_informe_r"><i class="fas fa-file-alt"></i></span> '.$crowdproy['id'].''.$crowdproy['fecha_creacion'].'';		


$listado_proyectos.='<a href="'.$path.'/'.$lengua.'/'.$crowdproy['id'].'/p"  target="framecontenido" class="indicadorlateral"><div class="col-md-12" ><span class="coloreado_informe_r"><i class="fas fa-file-alt"></i></span> '.$crowdproy['id'].''.$crowdproy['fecha_creacion'].'';		
$listado_proyectos.=''.$crowdproy['nombre_proyecto'].'</div>';
$listado_proyectos.='</a><div class="clearfix"></div>';					

				} 
$paginationCtrls = $paginationCtrles;			
			
}			
			
			
			
			
			
//============================
// GUARDANDO NUEVO PROYECTO
// Recibir datos y procesarlos
//============================	  
	
if(isset($_POST['alta_proyecto'])){
			$P_nombre_proyecto = addslashes($_POST['nombre_proyecto']);
			$P_descripcion_proyecto = addslashes($_POST['descripcion_proyecto']);
			$P_nombre_proyecto = stripslashes($_POST['nombre_proyecto']);
			$P_descripcion_proyecto = stripslashes($_POST['descripcion_proyecto']);			
			$P_publico = $_POST['publico'];                     
			$P_fecha_creacion = $_POST['fecha_creacion'];
			$P_id_cliente = $_POST['id_cliente'];
			$P_tipo = htmlentities($_POST['tipo']);
			$P_prioridad = $_POST['prioridad'];
			$P_responsable = htmlentities($_POST['responsable']);
			$P_activo = $_POST['activo'];
			$P_estatus = htmlentities($_POST['estatus']);
			$P_status = htmlentities($_POST['status']);
			$P_componentes = htmlentities($_POST['componentes']);
			$P_fecha_inicio = $_POST['fecha_inicio'];
			$P_fecha_prevista = $_POST['fecha_prevista'];
			$P_horas_estimadas = $_POST['horas_estimadas'];
  		
			$sql = "INSERT INTO proy_proyectos (publico,fecha_creacion,id_cliente,nombre_proyecto,tipo,prioridad,responsable,descripcion_proyecto,activo,estatus,status,componentes,fecha_inicio,fecha_prevista,horas_estimadas) VALUES ('".$P_publico."','".$P_fecha_creacion."','".$P_id_cliente."','".$P_nombre_proyecto."','".$P_tipo."','".$P_prioridad."','".$P_responsable."','".$P_descripcion_proyecto."','".$P_activo."','".$P_estatus."','".$P_status."','".$P_componentes."','".$P_fecha_inicio."','".$P_fecha_prevista."','".$P_horas_estimadas."')";

			if (mysqli_query($conexion, $sql)) {
				    echo '<script type="text/javascript">';
						echo 'setTimeout(function () { swal({ title: "REGISTRO ALMACENADO",   text: "El almacenado se ha llevado a cabo",   timer: 3000,   showConfirmButton: false });  ';   
						echo '}, 100);</script>';
						unset($_POST['alta_proyecto']);
						echo '<meta http-equiv="Refresh" content="2;url='.$path.'/'.$lengua.'/index">';
					} else {echo "Error: " . $sql . "<br>" . mysqli_error($conexion);}

			mysqli_close($conexion);		
  		
			//echo '<meta http-equiv="Refresh" content="2;url='.$path.'/'.$lengua.'/index">'; 
} 	
	
//============================
// MAIL DE CADUCIDAD DE LA ISSUE
// Si la issue está a punto de caducar manda un mail a
// el creador, al coordina, a los asignados y a los watchers
//============================	 	
define('HOST',$C_host); 
define('USER',$C_nombre);
define('PASS',$C_pass);
define('DBNAME',$C_database);

class classeMailCaducidad
{   

    protected $conexion;
    protected $db;
    public function conectar()
    {
        $this->conexion = mysqli_connect(HOST, USER, PASS);
        mysqli_query ($this->conexion,"SET NAMES 'utf8'");
        $this->db = mysqli_select_db($this->conexion,DBNAME);
        return true;
    }
    public function desconectar()
    {
        if ($this->conectar->conexion) {
            mysqli_close($this->conexion);
        }
    }

	public function caducidatProyecto(){

		date_default_timezone_set('Europe/Madrid');
		$fechaDeHoy = date('Y-m-d H:i:s');

        $query = "SELECT * from proy_proyectos  ";
        $result = mysqli_query($this->conexion, $query);
         while ($row = mysqli_fetch_assoc($result)) {
         	        $fechaPrevista = $row['fecha_prevista'];
					$fechaMenosDos = strtotime('-2 day', strtotime($fechaPrevista));
					$fechaMenosDos = date('Y-m-d H:i:s', $fechaMenosDos);
					$this->fechaPrev = $fechaPrevista;
					//si el proyecto esta closed o cerrado esta accion no se llevará a cabo
					if($row['estatus']=='closed' OR $row['status']=='cerrada'){

					} else {
						//si la fecha prevista supera la fecha de hoy
						if($fechaPrevista < $fechaDeHoy){
						  //instancio la funcion que envia el mail
                          $this->enviarMailHaSuperado();
						} 
						//si la fecha de hoy es igual a la fecha prevista menos dos dias (faltan 2 dias para que caduque)
						elseif($fechaMenosDos < $fechaDeHoy){
							echo $fechaPrevista.' - '.$fechaDeHoy.' - '.$fechaMenosDos;
							echo 'faltan 2 dias para que esta issue caduque';
						} else {echo 'no hago nada';}
					}
            }
            return $fechaPrevista;
             mysqli_free_result($query);	
		}
	public function enviarMailHaSuperado($fechaPrevista){ 
		$fechaprev = $this->fechaPrev;
		$Mail_para = 'kadetito@gmail.com';
		$Mail_asunto = ''.$fechaprev.' esta issue ha superado la fecha prevista';
		$Mail_remitente = "rafa@webentorn.com"; //Aquí va la dirección de quien envía el email.
		$Mail_mensaje = 'M&aacute;s tutoriales en el blog de <a href="https://blog.reaccionestudio.com/" target="_blank">Reacci&oacute;n Estudio</a>';
		$Mail_headers = "From: ".$Mail_remitente." \r\n";
		$Mail_headers .= "Reply-To: ".$Mail_remitente."\r\n"; //La dirección por defecto si se responde el email enviado.
		$Mail_headers .= "MIME-Version: 1.0\r\n";
		$Mail_headers .= "Content-Type: text/html; charset=UTF-8\r\n"; //La codificación del email.
		mail($Mail_para, $Mail_asunto, $Mail_mensaje, $Mail_headers);
		exit();
    }
	public function __destruct()
    {
        echo 'Destruct: ' . __METHOD__ . '()' . PHP_EOL;
    }
}

$db = new classeMailCaducidad;

if( $db->conectar()){ 
    $variable = $db->caducidatProyecto($fechaPrevista);
    //$variable2 = $db->enviarMail();
    $db->desconectar();
}








?>
									