<?php
//SEPARADOR
define('DS', DIRECTORY_SEPARATOR);
//UBICACIONES PRIVADAS
define( "ROOT", dirname(__FILE__) );
define( "APP", 'app' );
define( "PUBLICO", 'public' );
//UBICACIONES PUBLICAS
define( "BASE", '/public/' );

define ('URL_AMIGABLE',TRUE);
define ('REQUIERE_ACCESO',FALSE);

define ('MODULO_DEFAULT','home');
define ('ACCION_DEFAULT','index');
 
define('HOST_BASE_DATOS', 'localhost');
define('NOMBRE_BASE_DATOS', 'globoazu_printema');
define('USUARIO_BASE_DATOS', 'globoazu');
define('CLAVE_BASE_DATOS', 'maqoX2386!');

define ('DESARROLLO',TRUE);

define ('HTML',TRUE);
define ('TITULO_DEFAULT','Printema');

$CSS = array("global", "facebox/src/facebox");
$JS  = array("global", "textfill/source/jquery.textfill.min", "facebox/src/facebox");
$READY = array("");

$ESTADO = array('0'=>'', '6'=>'Por validar','1'=>'Recibido', '2'=>'En producción', '3'=>'En almacén', '4'=>'En ruta', '5'=>'Entregado');