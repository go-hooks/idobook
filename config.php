<?php
/*
    Nombre del archivo: config.php
    Descripcion: Variables globales de configuracion
    ---------------------------------------------------------------------------------------
    @autor 
    @version 1.0

    Develop by
    01/02/2012 : Alejandro Valdes (Developer)
*/

if ($_SERVER['REMOTE_ADDR'] == '11.70.0.51') {
    ini_set('display_errors','0');
    error_reporting(E_ALL ^ E_NOTICE);
} else {
    error_reporting(0);
}
error_reporting(0);
 

ini_set('display_errors','0');
error_reporting(E_ALL ^ E_NOTICE);

date_default_timezone_set('America/Mexico_City');
setlocale(LC_TIME, 'spanish');


// Datos de la base de datos

//define('DB_HOST', 'localhost');
//define('DB_USER', 'root');
//define('DB_PASSWORD', '');
//define('DB_NAME', 'medico_laguna');


define('DB_HOST', 'localhost');
define('DB_USER', 'adminidobook');
define('DB_PASSWORD', 'idobook100'); 
define('DB_NAME', 'idobook');

// Paths de los directorios
define('ABS_PATH', dirname(__FILE__).'/');         // Ruta absoluta del admin
define('INCLUD_PATH', 'includes/');                // includes/

define('UP_PATH', 'admin/production/webroot/uploads/');
//define('UP_PATH', 'production/webroot/uploads/');
define('UP_IMG_PATH', UP_PATH . 'images/');
define('UP_FILES_PATH', UP_PATH . 'files/');
define('BR', '<br />');