<?php
define('HOST','localhost'); //AQUI VA TU HOST
define('USER','testbuild');
define('PASS','JRK441e22');
define('DBNAME','test');



class BaseDatos
{
    protected $conexion;
    protected $db;

    public function conectar()
    {
        $this->conexion = mysql_connect(HOST, USER, PASS);
        if ($this->conexion == 0) DIE("Lo sentimos, no se ha podido conectar con MySQL: " . mysql_error());
        $this->db = mysql_select_db(DBNAME, $this->conexion);
        if ($this->db == 0) DIE("Lo sentimos, no se ha podido conectar con la base datos: " . DBNAME);

        return true;

    }

    public function desconectar()
    {
        if ($this->conectar->conexion) {
            mysql_close($this->conexion);
        }

    }

    public function pruebadb()
    {
        $tabla = "buil_builds";
        $query = mysql_query("SELECT count(*) from $tabla", $this->conexion);
        if ($query == 0) echo "Sentencia incorrecta llamado a tabla: $tabla.";
        else {
            $nregistrostotal = mysql_result($query, 0, 0);
            echo "Hay $nregistrostotal registros en la tabla: $tabla.";
            mysql_free_result($query);
        }
    }
}


?>





<?php

require_once "modelo.php";//archivo que contiene la clase de conexion

$db = new BaseDatos(); //creo objeto db nuevo llamando a la clase de conexion

if($db->conectar()){ //si conectar devuelve true
    $db->pruebadb(); //llamamos al metodo que lanza la query
    $db->desconectar();//cerramos conexion
}
//Lo que hacemos aquí, es conectarnos a la base de datos, si la conexión devuelve “verdadero” llamamos al método pruebasdb() que realizara la consulta que generamos en el archivo modelo.php, devolviendo en pantalla el numero de registros que contenía nuestra tabla y para finalizar nos aseguramos de cerrar la conexión a la base.

//**PROBAR CON MYSQLI
?>