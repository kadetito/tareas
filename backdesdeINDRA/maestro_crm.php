<?php include ("session.php"); ?>
<?php header('Content-Type: text/html; charset=ISO-8859-1'); 
include ("libreria.php");
$logo_pq=$_REQUEST['logo_pq'];

 $id_incluir=$_REQUEST['id_incluir'];
 $btnaccion=$_REQUEST['btnaccion'];
 $cmbseleccion=$_REQUEST['cmbseleccion'];
 $cmbcategoria=$_REQUEST['cmbcategoria'];
 $txtinicio=$_REQUEST['txtinicio'];
 $txtfin=$_REQUEST['txtfin'];
 $cmbsexo=$_REQUEST['cmbsexo'];
 $red=$_REQUEST['red'];
 $procesado=$_REQUEST['procesado'];
 $top=$_REQUEST['top'];
 
 
 if ($red=='SMS') {$titulo="Telefonos"; $campo_clave="telefono";}
 if ($red=='EMAIL') {$titulo="Email";$campo_clave="correo";}
 if ($red=='TWITTER') {$titulo="Twitter";$campo_clave="twitter"; }
 
  

 $usuario=$_SESSION['cedula'];

 $coneccion = conectarse_empresa();
 
 if (empty($cmbcategoria)){
	if(!empty($cmbsexo)){
 $consulta_cliente="select * from clientes where id  BETWEEN '$txtinicio' AND '$txtfin' and $campo_clave!='' and sexo='$cmbsexo' ORDER BY fecha desc";
			    }else{
$consulta_cliente="select * from clientes where $campo_clave!='' ORDER BY fecha desc";
				}
 } else {
if(!empty($cmbsexo)){
$consulta_cliente="select * from clientes where id  BETWEEN '$txtinicio' AND '$txtfin' and cod_categoria='$cmbcategoria' and $campo_clave!=''and sexo='$cmbsexo' ORDER BY cod_categoria,id asc";
}else{
 $consulta_cliente="select * from clientes where cod_categoria='$cmbcategoria' and $campo_clave!='' ORDER BY cod_categoria,id asc";
} 
}		
 $resultado_cliente = mysqli_query($coneccion,$consulta_cliente);
 $total_cliente= mysqli_num_rows($resultado_cliente);
 
 
  
 switch ($btnaccion){	
	
case "SI":
	$coneccion = conectarse_empresa();
	$grabar = "insert into tabla_crm  (tipo_rif,
										rif, 
										nombre,
										representante,
										direccion,
										telefono,
										telf_local,
										correo,
										twitter,
										instagram,
										facebook,
										web,
										fecha,
										cod_categoria,
										sexo,
										fecha_nac)
								
								select 	tipo_rif,
										rif, 
										nombre,
										representante,
										direccion,
										telefono,
										telf_local,
										correo,
										twitter,
										instagram,
										facebook,
										web,
										fecha,
										cod_categoria,
										sexo,
										fecha_nac from clientes where ID='$id_incluir'";
					
			$resultado_grabar= mysqli_query($coneccion,$grabar)or die(mysqli_error());		
			
			if($resultado_grabar){
				
			$coneccion = conectarse_empresa();
			$consulta_act="UPDATE  tabla_crm SET  usuario = '$usuario' WHERE usuario= 0";
			$resultado_act = mysqli_query($coneccion,$consulta_act)or die(mysqli_error());
				
			$id_incluir=0;
			
			$mensaje="Persona Incluida Exitosamente...!!!";
		    $tipo="mexito";
			$left='300px';
			
			
			
		   }
break;
	
	
	
case "NO":
	
	 $coneccion=conectarse_empresa();
	// ELIMINAR USUARIO
     $consulta_eliminar_crm= "delete FROM tabla_crm where id='$id_incluir'";
     $resultado_crm = mysqli_query($coneccion,$consulta_eliminar_crm);
   
    // VERIFICAR CONSULTA
    if ($resultado_crm) {
	 	$id_incluir=0;
	 	$mensaje="Persona Excluida Exitosamente...!!!";
		$tipo="mexito";
		$left='300px';
	}
break;

case "Procesar Rango":

	//VALIDACIONES
	if(empty($txtinicio)){
		
		$mensaje="Indique el Numero de inicio...!!!";
		$tipo="merror";
		$left='300px';
		$top='20px';
		break;
		}
	
	if(empty($txtfin)){
		$mensaje="Indique el Numero de Final...!!!";
		$tipo="merror";
		$left='300px';
		$top='20px';
		break;
		}
	
	//FIN VALIDACIONES

	 $coneccion = conectarse_empresa();
	 $consulta_vaciar="delete FROM tabla_crm where usuario='$usuario'";
	 $resultado_vaciar = mysqli_query($coneccion,$consulta_vaciar)or die(mysqli_error());
	
	$coneccion = conectarse_empresa();
	
	if(empty($cmbcategoria)){
	
	 $grabar = "insert into tabla_crm  (tipo_rif,
										rif, 
										nombre,
										representante,
										direccion,
										telefono,
										telf_local,
										correo,
										twitter,
										instagram,
										facebook,
										web,
										fecha,
										cod_categoria,
										sexo,
										fecha_nac,
										usuario)
								select 	tipo_rif,
										rif, 
										nombre,
										representante,
										direccion,
										telefono,
										telf_local,
										correo,
										twitter,
										instagram,
										facebook,
										web,
										fecha,
										cod_categoria,
										sexo,
										fecha_nac,
										usuario from clientes where id  BETWEEN '$txtinicio' AND '$txtfin' and $campo_clave !=''";
	}	
	
	if(!empty($cmbcategoria)){
		
		
	
	$grabar = "insert into tabla_crm  (tipo_rif,
										rif, 
										nombre,
										representante,
										direccion,
										telefono,
										telf_local,
										correo,
										twitter,
										instagram,
										facebook,
										web,
										fecha,
										cod_categoria,
										sexo,
										fecha_nac)
								select 	tipo_rif,
										rif, 
										nombre,
										representante,
										direccion,
										telefono,
										telf_local,
										correo,
										twitter,
										instagram,
										facebook,
										web,
										fecha,
										cod_categoria,
										sexo,
										fecha_nac
										from clientes where
										id  BETWEEN '$txtinicio' AND '$txtfin' and
										 $campo_clave !='' and
										cod_categoria='$cmbcategoria' ";
	}	
	
	
	
				
	$resultado_grabar= mysqli_query($coneccion,$grabar)or die(mysqli_error());		
			
			if($resultado_grabar){
				
				
				
			$coneccion = conectarse_empresa();
			$consulta_act="UPDATE  tabla_crm SET  usuario = '$usuario' WHERE usuario= 0";
			$resultado_act = mysqli_query($coneccion,$consulta_act)or die(mysqli_error());
				
				
				
				
			$id_incluir=0;
			$procesado='SI';
			$mensaje="Peticion procesada por Rango Exitosamente...!!!";
			$tipo="mexito";
			$left='700px';
			$top='300px';
			}
		  
			
	
	break;

case "Procesar Sexo":

	//VALIDACIONES
	if(empty($txtinicio)){
		
		$mensaje="Indique el Numero de inicio...!!!";
		$tipo="merror";
		$left='300px';
		$top='20px';
		break;
		}
	
	if(empty($txtfin)){
		$mensaje="Indique el Numero de Final...!!!";
		$tipo="merror";
		$left='300px';
		$top='20px';
		break;
		}
		
	if(empty($cmbsexo)){
		$mensaje="Seleccione el sexo de las Personas...!!!";
		$tipo="merror";
		$left='300px';
		$top='20px';
		break;
		}	
	
	//FIN VALIDACIONES

	 $coneccion = conectarse_empresa();
	 $consulta_vaciar="delete FROM  tabla_crm where usuario='$usuario'";
	 $resultado_vaciar = mysqli_query($coneccion,$consulta_vaciar)or die(mysqli_error());
	
	$coneccion = conectarse_empresa();
	
	
	if(empty($cmbcategoria)){
	
	$grabar = "insert into tabla_crm  (tipo_rif,
										rif, 
										nombre,
										representante,
										direccion,
										telefono,
										telf_local,
										correo,
										twitter,
										instagram,
										facebook,
										web,
										fecha,
										cod_categoria,
										sexo,
										fecha_nac,
										usuario)
								select 	tipo_rif,
										rif, 
										nombre,
										representante,
										direccion,
										telefono,
										telf_local,
										correo,
										twitter,
										instagram,
										facebook,
										web,
										fecha,
										cod_categoria,
										sexo,
										fecha_nac,
										usuario from clientes where id  BETWEEN '$txtinicio' AND '$txtfin' and  sexo='$cmbsexo'  and $campo_clave !=''";
	}		
	
if(!empty($cmbcategoria)){
		
		$grabar = "insert into tabla_crm  (tipo_rif,
										rif, 
										nombre,
										representante,
										direccion,
										telefono,
										telf_local,
										correo,
										twitter,
										instagram,
										facebook,
										web,
										fecha,
										cod_categoria,
										sexo,
										fecha_nac,
										usuario)
								select 	tipo_rif,
										rif, 
										nombre,
										representante,
										direccion,
										telefono,
										telf_local,
										correo,
										twitter,
										instagram,
										facebook,
										web,
										fecha,
										cod_categoria,
										sexo,
										fecha_nac,
										usuario from clientes where
										id  BETWEEN '$txtinicio' AND '$txtfin' and
										sexo='$cmbsexo'  and $campo_clave and
										cod_categoria='$cmbcategoria' !=''";
		
		
		}
	
	
	
	
			
	$resultado_grabar= mysqli_query($coneccion,$grabar)or die(mysqli_error());		
			
			if($resultado_grabar){
			$id_incluir=0;
			$procesado='SI';
			
			$mensaje="Peticion procesada por sexo Exitosamente...!!!";
		    $tipo="mexito";
			$left='300px';
			$top='20px';
			}
		  
				
	
break;
	
	
case "Siguiente":
	 ?>
		<script>
		window.location.href="enviar_crm.php?red=<?php echo $red; ?>";
		</script>
	 <?php 
	
break;

case "Limpiar Tabla":
		$coneccion = conectarse_empresa();
		 $consulta_vaciar="delete FROM tabla_crm where usuario='$usuario'";
		 $resultado_vaciar = mysqli_query($coneccion,$consulta_vaciar)or die(mysqli_error());
	 	if($resultado_vaciar){
			$id_incluir=0;
			$cmbseleccion="";
			$cmbcategoria="";
			
			$mensaje="Peticion procesada Exitosamente...!!!";
		    $tipo="mexito";
			$left='300px';
			$top='20px';
		}
	
break;
	
	

  }
 
 
  $consulta_tabla_crm="select * from tabla_crm where usuario='$usuario'";		
  $resultado_tabla_crm = mysqli_query($coneccion,$consulta_tabla_crm);
  $total_tabla_crm= mysqli_num_rows($resultado_tabla_crm);
 
 
 
 


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="ccs/botones.css" type="text/css" media="screen" />
<link rel="stylesheet" href="ccs/estilos.css" type="text/css" media="screen" />
<link rel="stylesheet" type="ccs/text/css" href="ccs/normalize.css">
<link rel="stylesheet" type="ccs/text/css" href="ccs/visualize.css">
<script type="text/javascript" src="js/jquery_002.js"></script>


<script>
function abrir(url) {
open(url,'','scrollbars=1,top=500,left=100,width=1500,height=700') ;
}
</script>


<title>Documento sin título</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">
body,td,th {
	font-family: Lato, Calibri, Arial, sans-serif;
}
body {
	margin-left: 0%;
	margin-top: 0%;
	margin-right: 0%;
	margin-bottom: 0%;
}
</style>


<script type="text/javascript">
        $(document).ready(function(){
            /*setTimeout(function(){ $(".message").fadeOut(800).fadeIn(800).fadeOut(500).fadeIn(500).fadeOut(300);}, 3000);*/  
			setTimeout(function(){ $(".mensaje").fadeOut(800);}, 3000);  

	$("#checktodos").click(function(){

		$('input[type=checkbox]').each(function() {			
			if($("input[name=checktodos]:checked").length == 1){
				this.checked = true;
setTimeout(function(){ $('input[type=checkbox]').change(); }, 500);
				
				
			} else {
				this.checked = false;
				
				
			}

		});

	});

        });
</script>




</head>

<body>

 <?php if (!empty($mensaje)) { ?>
<div style="width:500px; position:absolute; left: <?php echo $left; ?>; top: <?php echo $top; ?>;" class="<?php echo $tipo; ?> mensaje" align="center">
            <p> <?php echo $mensaje; ?> </p>
            </div>
<?php }?>    




<table width="100%" border="0" cellpadding="3" cellspacing="0">
   <tr style="background-image:url(imagenes/header.png); background-repeat:repeat-x" >
     <td width="5%" height="8" >
     <?php if ($red=='SMS') {?> 
     
     <img src="imagenes/sms.png" alt="" width="83" height="100" />
     <?php } ?>
     
     <?php if ($red=='EMAIL') {?> 
     
     <img src="imagenes/email.png" alt="" width="81" height="77" />
     <?php } ?>
     
     <?php if ($red=='TWITTER') {?> 
     
     <img src="imagenes/twitter.png" alt="" width="100" height="97" />
     <?php } ?>
     </td>
     <td height="8" align="center" valign="middle" >
       <h1 style="color:#F90" class="sombra">
         
         <font style="color:#F90" class="sombra" >
         Clientes Seleccionados
         </font>
         
         
         <font  style="color:#F00" class="sombra">
         Total: &nbsp; <?php echo $total_cliente; ?>
         </font>
         
       </h1>
  
     </td>
   </tr>
  </table>
  <br />
  <form  method="post" enctype="multipart/form-data" name="frmmensajes" action="maestro_crm.php" >
  <table width="100%" border="0" cellpadding="3" cellspacing="0">
   <tr >
     <td width="6%" rowspan="4" align="center" valign="middle"  >
     
      <a href="crm_menu.php?logo_pq=<?php echo $logo_pq; ?>" target="cuerpo">
    <img src="imagenes_menu/crm.png" width="55" height="50" />
    </a>
     
     
     
     </td>
     <td width="94%"  align="center" valign="middle" >
     
     Clasificar Por: 
     
     <select name="cmbseleccion" id="cmbseleccion" onChange="submit();" >
                <option value=""<?php if($cmbseleccion=="") echo 'selected="selected"';?>>Seleccione</option>
                <option value="1"<?php if($cmbseleccion=='1') echo 'selected="selected"';?>>Uno a Uno</option>
                <option value="2"<?php if($cmbseleccion=='2') echo 'selected="selected"';?>>Rango</option>
                <option value="3"<?php if($cmbseleccion=='3') echo 'selected="selected"';?>>Sexo</option>
        </select>
     
     &nbsp;
<label class="label">Categoria</label>
           <select name="cmbcategoria" id="cmbcategoria" onChange="submit();" >
             <option value="">Seleccione</option>
             <?php
                        $coneccion=conectarse_empresa();
                        $consulta_categoria = "select * from categoria order by descripcion_categoria";
                        $resultado_categoria = mysqli_query($coneccion,$consulta_categoria) or die(mysqli_error());
                        
                        while ($datos_categoria=mysqli_fetch_array($resultado_categoria)){
                            $cod_categoria=$datos_categoria["cod_categoria"];
                            $descripcion_categoria=$datos_categoria["descripcion_categoria"];
                            
                            $seleccionado="";
                            if ($cmbcategoria==$cod_categoria) $seleccionado='selected'
                            ?>
             <option value="<?php echo $cod_categoria; ?>" <?php echo $seleccionado;?>> <?php echo $descripcion_categoria; ?></option>
             <?php	}	?>
           </select>
            
     
     
     
     
     
     
     </td>
   </tr>
    <?php if ($cmbseleccion==2) {?> 
   <tr >
     <td  align="center" valign="middle" >
       Inicio:&nbsp;
       <input class="number" name="txtinicio" type="number"  id="txtinicio" onKeyPress="return validar_noacepta(event)"  value="<?php echo $txtinicio; ?>" min="0" />
       &nbsp;&nbsp;&nbsp;&nbsp;
       Fin:&nbsp;
       <input class="number" name="txtfin" type="number"  id="txtfin" onKeyPress="return validar_noacepta(event)"  value="<?php echo $txtfin; ?>" min="0" />
       
       &nbsp;&nbsp;&nbsp;
       <input type="submit"  class="button medium blue" name="btnaccion" id="btnaccion" value="Procesar Rango" />
       
     </td>
   </tr>
    <?php } ?>
    
    
     <?php if ($cmbseleccion==3) {?> 
   <tr >
     <td  align="center" valign="middle" >
       
       Sexo:&nbsp;
       
       <select name="cmbsexo" id="cmbsexo" onChange="submit();" >
         <option value=""<?php if($cmbsexo=="") echo 'selected="selected"';?>></option>
         <option value="F"<?php if($cmbsexo=='F') echo 'selected="selected"';?>>Femenino</option>
         <option value="M"<?php if($cmbsexo=='M') echo 'selected="selected"';?>>Masculino</option>
        </select>
       
       &nbsp;&nbsp;&nbsp;&nbsp;
       Inicio:&nbsp;
       <input class="number" name="txtinicio" type="number"  id="txtinicio" onKeyPress="return validar_noacepta(event)"  value="<?php echo $txtinicio; ?>" min="0" />
       &nbsp;&nbsp;&nbsp;&nbsp;
       Fin:&nbsp;
       <input class="number" name="txtfin" type="number"  id="txtfin" onKeyPress="return validar_noacepta(event)"  value="<?php echo $txtfin; ?>" min="0"  />
       
       &nbsp;&nbsp;&nbsp;
       <input type="submit"  class="button medium blue" name="btnaccion" id="btnaccion" value="Procesar Sexo" />
     </td>
   </tr>
    <?php } ?>
    
    
   <tr >
     <td  align="center" valign="middle" >
       <?php if ($total_tabla_crm>0) {?> 
       <input type="submit"  class="button medium green" name="btnaccion" id="btnaccion" value="Siguiente" />
       &nbsp;&nbsp;
       <input type="submit"  class="button medium red" name="btnaccion" id="btnaccion" value="Limpiar Tabla" /> 
       <?php } ?>
     </td>
   </tr>
   
</table>
<input name="logo_pq" type="hidden" id="logo_pq" value="<?php echo $logo_pq;?>" size="30" maxlength="50" />
<input name="red" type="hidden" id="red" value="<?php echo $red;?>" size="30" maxlength="50" />

</form>

<?php if ($cmbseleccion==1 or $procesado=='SI') {?>

<?php if ($total_cliente>0) {?>
<!--Aqui el Reporte -->
<table width="100%" border="0" cellpadding="4" cellspacing="2" bordercolor="#666666">
  <tr>
  
    <td width="4%" align="center" valign="middle" bgcolor="#A12B21"><span class="sombra titulo">ID</span></td>
    <td width="12%" align="center" valign="middle" bgcolor="#71CF31"><span class="sombra titulo"> RIF / Cedula</span></td>
    <td width="9%" align="center" valign="middle" bgcolor="#23BBDC"><span class="sombra titulo">Cliente</span></td>
    <td width="12%" align="center" valign="middle" bgcolor="#424242"><span class="sombra titulo"> Contacto</span></td>
    <td width="24%" align="center" valign="middle" bgcolor="#A12B21"><span class="sombra titulo">Direccion</span></td>
    <td width="9%" align="center" valign="middle" bgcolor="#23BBDC"><span class="sombra titulo"><?php echo $titulo; ?></span></td>
    <td width="9%" align="center" valign="middle"  bgcolor="#A12B21"><span class="sombra titulo">Fecha Ingreso</span></td>
    <td width="13%" align="center" valign="middle" bgcolor="#71CF31"><span class="sombra titulo">Categoria</span></td>
    <td width="8%" align="center" valign="middle" bgcolor="#23BBDC"><span class="sombra titulo">Accion<input name="checktodos" id="checktodos" type="checkbox"/></span></td>
  </tr>
  
   <?php
    $fila=0;
	$numero=250;
	
	while ($datos_cliente=mysqli_fetch_array($resultado_cliente)) {
		$resto=$fila % 2;
	    if ($resto==0)  $color ="#FFFFFF";   else    $color ="#D7D7D7";
   		$fila++;
		
		$numero=$numero+50;
		
		$top=$numero;
		
		$id_cliente=$datos_cliente['id'];
    	$tipo_rif=$datos_cliente['tipo_rif'];
		$nape_repre=$datos_cliente['representante'];
		
		$cedula_pac=$datos_cliente['rif'];
		$nape_pac=$datos_cliente['nombre'];
		
		$direccion=$datos_cliente['direccion'];
		$telf_local=$datos_cliente['telf_local'];
		
		$cod_categoria=$datos_cliente['cod_categoria'];
		
		$descrip_categoria="";
		if($cod_categoria>0){
		$coneccion = conectarse_empresa();
		$consulta_cat="select * from categoria where cod_categoria='$cod_categoria'";
		$resultado_cat= mysqli_query($coneccion,$consulta_cat);
		$total_cat= mysqli_num_rows($resultado_cat);
		
		
			if($total_cat>0){
				$datos_cat=mysqli_fetch_array($resultado_cat);
				$descrip_categoria=$datos_cat['descripcion_categoria']; 
			}	
			
			
		}
		
		
		
		if($red=='SMS'){$medio=$datos_cliente['telefono'];  }
		
		if($red=='EMAIL'){$medio=$datos_cliente['correo'];}
		
		if($red=='TWITTER'){$medio=$datos_cliente['twitter'];  }
				
		$fecha_ing=$datos_cliente['fecha'];
		$fecha_ing=cambiaf_a_normal($fecha_ing);
		
		
		$coneccion = conectarse_empresa();
		$consulta_visitas="select * from clientes where nombre='$nape_pac'";
		$resultado_visitas= mysqli_query($coneccion,$consulta_visitas);
		$total_visitas= mysqli_num_rows($resultado_visitas);
		
		if($total_visitas>0){
		$datos_visitas=mysqli_fetch_array($resultado_visitas);
		}
		
				
		$coneccion = conectarse_empresa();
		$consulta_crm="select * from tabla_crm where nombre ='$nape_pac' and usuario='$usuario'";
		$resultado_crm= mysqli_query($coneccion,$consulta_crm);
		$total_crm= mysqli_num_rows($resultado_crm);
		if($total_crm>0){
		$datos_crm=mysqli_fetch_array($resultado_crm);
		$id_cliente=$datos_crm['id'];
		}
		
		
		
		
    ?>
   
   <tr bgcolor="<?php echo $color; ?>">
    <td height="30" align="right">
    
    
    
    
    
    <font style="font-size:12px">
	<?php
	 echo $id_cliente;
	 
	  ?>
      
      </font>
    
    
    
    
    </td>
    <td height="30" align="right">
      
      <font style="font-size:12px">
      <?php {?>
      <?php echo $tipo_rif; ?>
      <?php echo $cedula_pac; ?>
      <?php } ?>
      </font>
      
    </td>
    <td height="30" align="left" valign="middle">
      <font style="font-size:12px">
      <?php echo $nape_pac; ?>
      </font>
    </td>
    <td height="30" align="left" valign="middle">
    <font style="font-size:12px">
     <?php echo $nape_repre; ?>
    </font>
    </td>
    <td height="30" align="left" valign="middle">
    <font style="font-size:12px">
     <?php echo $direccion; ?>
     </font>
    </td>
    <td height="30" align="left" valign="middle">
      <font style="font-size:12px">
      <?php echo $medio; ?>
      </font>
    </td>
    <td height="30" align="center" valign="middle">
      <font style="font-size:12px">
      
      </font>
      <font style="font-size:12px">
      <?php echo $fecha_ing; ?>
      </font>
    </td>
    <td height="30" align="center" valign="middle"><font style="font-size:12px"><?php echo $descrip_categoria; ?></font></td>
    <td height="30" align="center" valign="middle">

      <?php if(!empty($medio)) {?>
      <form id="form1" name="form1" method="post" action="maestro_crm.php">
        <?php if($total_crm==0) {?>
        <img src="imagenes/icone_incluir.png" width="17" height="16" />
        <input type="checkbox" name="btnaccion" id="btnaccion" value="SI" onChange="submit();" 
       <?php if ($id_incluir==$id_cliente) {echo "checked='checked'";} ?>  />
        <?php } else{?>
        <img src="imagenes/excluir.png" width="23" height="26" />
        <input type="checkbox" name="btnaccion" id="btnaccion" value="NO" onChange="submit();" 
       <?php if ($id_incluir==$id_cliente) {echo "checked='checked'";} ?>  />
        <?php }?>
        
        
         <input type="hidden" name="top" id="top" value="<?php echo $top; ?>"  />
        <input type="hidden" name="id_incluir" id="id_incluir" value="<?php echo $id_cliente; ?>"  />
        <input type="hidden" name="cmbseleccion" id="cmbseleccion" value="<?php echo $cmbseleccion; ?>"  />
        <input type="hidden" name="cmbcategoria" id="cmbcategoria" value="<?php echo $cmbcategoria; ?>"  />
        <input type="hidden" name="cmbsexo" id="cmbsexo" value="<?php echo $cmbsexo; ?>"  />
        <input type="hidden" name="red" id="red" value="<?php echo $red; ?>"  />
        <input type="hidden" name="procesado" id="red" value="<?php echo $procesado; ?>"  />
        <input name="logo_pq" type="hidden" id="logo_pq" value="<?php echo $logo_pq;?>" size="30" maxlength="50" />
        <input name="txtinicio" type="hidden"  id="txtinicio" value="<?php echo $txtinicio; ?>"/>
        <input name="txtfin" type="hidden"  id="txtfin" value="<?php echo $txtfin; ?>"/>
      </form>
      <?php }?>
    </td>
  </tr>
  <?php }?>
</table>
<!---->
<?php } else{?>
<center>
<div class="caja">
<img src="imagenes/crm.png" width="150" height="150" /><br />
    <strong>
    <font style="font-size:50px; color:#F90" class="sombra">
    No existen Datos de Cliente Registrados
    </font>
    </strong>
</div>
</center>
<?php }?>


<?php }?>
  <table width="100%" border="0" cellspacing="0" cellpadding="2">
  <tr  >
    <td style="background-image: none; background-repeat:no-repeat" width="5%" height="48" align="center">&nbsp;</td>
    <td width="95%" align="center" style="background-image:  none; background-repeat:repeat-x">&nbsp;</td>
    </tr>
</table>

</body>
