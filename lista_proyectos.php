<?php session_start();require 'libs/Smarty.class.php';
$smarty = new Smarty;
$smarty->force_compile = true;//fuerza eliminar chache(comentar esta linea al acabar)
$smarty->debugging = true;
$smarty->caching = true;
$smarty->cache_lifetime = 120;

require('lib/conexion.php');  
require('lib/drivelogin.php');
require('lib/funcions.php');

$canonical='http://'.$_SERVER['HTTP_HOST'].''.$_SERVER['REQUEST_URI'];
require_once("traduccion/".$lengua.".php");

//=====================
// TODAS LAS VARIABLES CONSTANTES DE HEAD (rutas, etc)
//======================
include 'includes/variables_constantes.php';

//=====================
// TODAS LAS VARIABLES SMARTY QUE PESCA DE FUNCIONS.PHP
//======================
include 'includes/variables.php';

//=====================
// TODAS LAS VARIABLES DE IDIOMA que salen de la hoja de idiomas de traduccion/
//======================
include 'includes/lenguaje.php';

$smarty->display('templates/lista_proyectos.tpl');


?>