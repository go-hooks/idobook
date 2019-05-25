<?php

/*
    Nombre del archivo: ini.php
    Descripcion: Cargador de modelos y vistas asi como todo archivo que se nesecita incluir para
                 el buen funcionamiento del cms.
    ---------------------------------------------------------------------------------------
    @version 1.0
    Develop by
    Updated by
*/
    // DEFAULT
    include 'config.php';
    include 'encriptar.php';
    require_once INCLUD_PATH . 'MySQLConnect.class.php';
    require_once INCLUD_PATH . 'data_base_fns.inc.php';
    require_once INCLUD_PATH . 'util_fns.inc.php';
    require_once INCLUD_PATH . 'util_fns_aux.inc.php';
    require_once INCLUD_PATH . 'thumbnail.php';