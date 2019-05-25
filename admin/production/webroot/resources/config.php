<?php

/* ================================================================== *

    Nombre del archivo: config.php
    Descripcion: Variables globales de configuracion
    -----------------------------------------------------------------

    @version 1.0
    Develop by

 * ================================================================== */

defined('JZ_UPALE')

    or die('Acceso Incorrecto');

if ($_SERVER['HTTP_HOST'] == 'localhost') {

    error_reporting(E_ALL); // E_ALL ^ E_NOTICE

} else {

    error_reporting(0);

}

set_time_limit (0);

ini_set("memory_limit", "150M");

// Separador de directorios

define('DS', DIRECTORY_SEPARATOR);

// Zona horaria

date_default_timezone_set('America/Mexico_City');

setlocale(LC_TIME, 'spanish');

// Paths

define('APP_PATH', realpath(dirname(dirname(__FILE__))));

define('RESOURCES_PATH', APP_PATH . DS . 'resources');

define('LIBRARY_PATH', RESOURCES_PATH . DS . 'library');

define('MEDIA_PATH', RESOURCES_PATH . DS . 'media');

define('TEMPLATE_PATH', RESOURCES_PATH . DS . 'templates');

define('MODEL_PATH', RESOURCES_PATH . DS . 'model');

define('CONTROLLER_PATH', RESOURCES_PATH . DS . 'controller');


//define('URL_APP', 'http://localhost/MedicoLaguna/production/webroot/');

define('URL_APP', 'http://dev.idobook.com.mx/admin/production/webroot/');

define('URL_IMAGES', URL_APP . 'img/');

define('URL_JS', URL_APP . 'js/');

define('URL_CSS', URL_APP . 'css/');

define('URL_MEDIA', URL_APP . 'media/');

define('URL_MODEL', URL_APP . 'resources/model/');

define('URL_FILES', URL_APP . '/uploads/files/');

define('UPLOADS', APP_PATH. DS . 'uploads');

define('UPS_FILES', UPLOADS . DS . 'files' . DS);

// Debugging

define('DEBUG', true);

define('DEBUG_FILE_LOG', 'log.txt');

define('DEBUG_FILE_LOG_PATH', RESOURCES_PATH);

// Array de Configuracion

//$db_server   = 'localhost';

//$db_name     = 'medico_laguna';

//$db_username = 'root';

//$db_password = '';



//$db_server   = 'localhost';

//$db_name     = 'tumedico_bd';

//$db_username = 'tumedico_user';

//$db_password = '=+D{GmPwp.0s';



$aConfig = array(

    'default-database' => 'local',
    'default-module' => 'medicos',
    'database' => array(

        'local' => array(
            'name' => 'idobook',  
            'user' => 'adminidobook',
            'pass' => 'idobook100',
            'host' => 'localhost',
        )
    ),

    'urls' => array(

        'base'       => URL_APP,

        'uploads'    => URL_APP . 'uploads/',

        'images'     => URL_APP . 'img/',

        'js'         => URL_APP . 'js/',

        'css'        => URL_APP . 'css/',

        'libreria'   => URL_APP . 'library/',

    ),

    'paths' => array(

        'resources' => RESOURCES_PATH,

        'library'   => LIBRARY_PATH,

        'templates' => TEMPLATE_PATH,

        'images'    => APP_PATH . DS . '/img',

        'js'        => APP_PATH . DS . '/js',

        'css'       => APP_PATH . DS . '/css',

    ),
    'bootstrap-file' => 'index.php',
    'default-action' => 'default',
);

DEFINE('DEFAULT_MODULE', $aConfig['default-module']);

$aMetas = array(

    'title'      => 'IDOBOOK ADMIN PANEL',      // title : String
    'section'    => 'Bienvenido',				// section : String
    'css'        => array('styles.css'),		// Array
    'libraries'  => array(''),					// Array
    'javascript' => array('util.js'),			// Array
);

/**

 * 64 32 16  8  4  2  1

 * ---------------------

 *  0  0  0  0  0  0  1

 */

$aErrorMessages = array(

    '0000001' => 'Error Desconocido.',
    '0001010' => 'El usuario y/o la contrase&ntilde;a es incorrecta.',
    '0010100' => 'El usuario ingresado no existe.',
    '0011110' => 'El usuario se encuentra Inactivo, consulte a su administrador.',
    '0101000' => 'El sistema ha detectado un posible acceso no autorizado y ha suspendido la cuenta. Consulte a su administrador',
    '1010000' => 'El sistema ha detectado un posible acceso no autorizado y ha suspendido cualquier forma de acceso dentro de las proximas 12 hrs. <br />Consulte a su administrador'
);