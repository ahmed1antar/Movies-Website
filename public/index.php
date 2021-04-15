<?php

use MVC\libraries\Core;

/* Routes */
define("DS",DIRECTORY_SEPARATOR);
define("ROOT",dirname(__DIR__));
define("APP",ROOT.DS.'app'.DS);
define("CONFIG",APP.'config'.DS);
define("CONTROLLERS",APP.'controllers'.DS);
define("LIBRARIES",APP.'libraries'.DS);
define("MODELS",APP.'models'.DS);
define("VIEWS",APP.'views'.DS);

/* Config */
define("SERVER","localhost");
define("USERNAME","root");
define("PASSWORD","");
define("DATABASE","movies");
define("DATABASE_TYPE","mysql");


define('PROTOCAL','http');
$path = str_replace("\\", "/",PROTOCAL ."://" . $_SERVER['SERVER_NAME'] . __DIR__  . "/");

$path = str_replace($_SERVER['DOCUMENT_ROOT'], "", $path);

define('URL', str_replace("app/core", "public", $path));
define('FRONT',$path.'front/');
define('BACK',$path.'back/');

session_start();




require_once('../vendor/autoload.php');


$init = new Core();

