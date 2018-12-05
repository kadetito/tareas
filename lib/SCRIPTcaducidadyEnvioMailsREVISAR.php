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

    //**
    // conectar a bbdd
    //
    public function conectar()
    {
        $this->conexion = mysqli_connect(HOST, USER, PASS);
        mysqli_query ($this->conexion,"SET NAMES 'utf8'");
        $this->db = mysqli_select_db($this->conexion,DBNAME);
        return true;
    }
    //**
    // desconectar de la bbdd
    //    
    public function desconectar()
    {
        if ($this->conectar->conexion) {
            mysqli_close($this->conexion);
        }
    }



    //**
    // Determina las fechas y gestiona si deben recibir notificacion mail
    //
	public function caducidatProyecto(){
		date_default_timezone_set('Europe/Madrid');
		$fechaDeHoy = date('Y-m-d H:i:s');
		$coordinador= $this->coordinador;
        $query = "SELECT * from proy_proyectos";
        $result = mysqli_query($this->conexion, $query);
         while ($row = mysqli_fetch_array($result)) {
         	        $fechaPrevista = $row['fecha_prevista'];
					$fechaMenosDos = strtotime('-2 day', strtotime($fechaPrevista));
					$fechaMenosDos = date('Y-m-d H:i:s', $fechaMenosDos);
					$this->fechaPrev = $fechaPrevista;
					$this->idProyecto = $row['id'];
					$this->nombreProyecto = $row['nombre_proyecto'];
					$this->coordina = $row['coordina'];

					//si el proyecto esta closed o cerrado esta accion no se llevará a cabo
					if($row['estatus']=='closed' OR $row['status']=='cerrada'){

					} else {
						//instancio la funcion que me lee los usuarios que participan
						   $this->usuariosProyecto();
						//si la fecha prevista supera la fecha de hoy
						if($fechaPrevista < $fechaDeHoy){
						  //instancio la funcion que envia el mail si efectuo la primera accion de login
						  //al hacer esto guardo una sesion que a continuacion destruyo
							if(isset($_SESSION["sesioncaduca"])){
								//creao una sesion para que no me repita el envio mail cada vez que login
								//la sesion caducará de manera natural (se hará con CRON)
								//if($_SESSION["nomail"]==''){
	                                $_SESSION["nomail"] = 'no mail today';
									unset ($_SESSION["sesioncaduca"]);
	                           	  //  $this->enviarMailHaSuperado();
								//} else {}
							}
						} 
						//si la fecha de hoy es igual a la fecha prevista menos dos dias (faltan 2 dias para que caduque)
						elseif($fechaMenosDos < $fechaDeHoy){

						  //instancio la funcion que envia el mail si efectuo la primera accion de login
						  //al hacer esto guardo una sesion que a continuacion destruyo
							//if(isset($_SESSION["sesioncaduca"])){
								//creao una sesion para que no me repita el envio mail cada vez que login
								//la sesion caducará de manera natural (se hará con CRON)
							//	if($_SESSION["nomail"]==''){
	                       //         $_SESSION["nomail"] = 'no mail today';
							//		unset ($_SESSION["sesioncaduca"]);
	                           	    //$this->enviarMailDosDias();
							//	} else {}
						//	}



						} else {echo 'no hago nada';}
					}
            }
            //return $fechaPrevista;
            return array($fechaPrevista, $idProyecto,$coordina);
             mysqli_free_result($query);	
		}

    //**
    // leo los usuarios que coordinan este proyecto
    //
	public function usuariosProyecto(){
		$coordina = $this->coordina;
        $query = "SELECT * FROM usua_usuarios WHERE id = '".$coordina."' ";
        if(!$result = mysqli_query($this->conexion, $query)) die();
        if($row = mysqli_fetch_array($result)){
			$this->emailUsuario =$row['email'];
			$this->coordinador =$row['coordina'];	
			$this->nomCoordinador =$row['nombre'];
         }
         return $emailDeusuario;
		 mysqli_free_result($query);
	}

	//**
	// MÉTODO DE ENVIO DE MAIL SI HA CADUCADO
	//
	public function enviarMailHaSuperado(){ 
		date_default_timezone_set('Europe/Madrid');
			$fechaprev = $this->fechaPrev;
			$emailUsuario = $this->emailUsuario;
			$coordinador = $this->coordinador;
			$nomCoordinador = $this->nomCoordinador;
			$idProyecto = $this->idProyecto;
			$nombreProyecto = $this->nombreProyecto;
			$Mail_para = ''.$emailUsuario.'';
			$Mail_asunto = '[TAREAS] ['.$idProyecto.'] '.$nombreProyecto.' - Superada la fecha prevista';
			$Mail_remitente = "rafa@webentorn.com"; //Aquí va la dirección de quien envía el email.
			$Mail_mensaje = 'Hola, <strong>'.$nomCoordinador.'</strong>. El proyecto <strong>'.$nombreProyecto.'</strong> ha superado la fecha de entrega prevista <strong>('.$fechaprev.')</strong> sin haber sido resuelto. Este mensaje es automático y a título informativo, por favor, no lo responda.';
			$Mail_headers = "From: ".$Mail_remitente." \r\n";
			$Mail_headers .= "Reply-To: ".$Mail_remitente."\r\n"; //La dirección por defecto si se responde el email enviado.
			$Mail_headers .= "MIME-Version: 1.0\r\n";
			$Mail_headers .= "Content-Type: text/html; charset=UTF-8\r\n"; //La codificación del email.
			mail($Mail_para, $Mail_asunto, $Mail_mensaje, $Mail_headers);
			exit();
    }

    //**
    //DESTRUYO LA ACCION PARA EVITAR EL ENVIO CONSATNTE
	public function __destruct()
    {
        //echo 'Destruct: ' . __METHOD__ . '()' . PHP_EOL;
        header('Location: http://www.webentorn.com/tareas/ca/index');
        exit;
    }
}

//**
// INSTANCIO
$db = new classeMailCaducidad;
if( $db->conectar()){ 
    $variable = $db->caducidatProyecto($fechaPrevista);
    //$variable2 = $db->usuariosProyecto();
    $db->desconectar();
}

