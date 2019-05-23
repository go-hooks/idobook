<?php

function laboratorios_read($id) {
    $sSql = 'SELECT * FROM '
            . ' laboratorios l'
            . ' INNER JOIN '
            . ' registros r'
            . ' ON l.id=r.id'
            . ' WHERE'
            . ' l.id = :lid';

    $oConnection = db_connect();

    if (!$oConnection) {
        return false;
    }
    mysql_bind($sSql, array('lid' => $id));
    $result = mysql_query($sSql, $oConnection);

    if (mysql_num_rows($result) > 0) {
        return mysql_fetch_array($result, MYSQL_ASSOC);
    } else {
        return false;
    }
}

function comprobar_correo($correo) {
    $sSql = 'SELECT * FROM '
            . ' registros r'
            . ' WHERE'
            . ' r.correo = :rcorreo'
            . ' AND elim=0';


    $oConnection = db_connect();

    if (!$oConnection) {
        return false;
    }
    mysql_bind($sSql, array('rcorreo' => $correo));
    $result = mysql_query($sSql, $oConnection);

    if (mysql_num_rows($result) > 0) {
        return true;
    } else {
        return false;
    }
}

function buscar_laboratorios($buscar) {
    
    if ($buscar['buscar']!=''){   

    $sSql = 'SELECT '
            . ' l.id,'
            . ' r.pagado, '            
            . ' r.autorizado, '
            . ' l.nombre '
            . 'FROM '
            . ' laboratorios l, registros r '
            . 'WHERE '
            . ' l.id = r.id AND elim=0 AND '                   
            . 'nombre like "%' . $buscar['buscar'] . '%"' 
            . 'ORDER BY r.autorizado, l.nombre';
    
    }     
    else{
    $sSql = 'SELECT '
            . ' l.id,'
            . ' r.pagado, '            
            . ' r.autorizado, '
            . ' l.nombre '
            . 'FROM '
            . ' laboratorios l, registros r '
            . 'WHERE '
            . ' l.id = r.id AND elim=0 '            
            . 'ORDER BY r.autorizado, l.nombre';
    }     
    
    
    return  db_paginate($sSql, array('limit' => 30));      
    
   
}

function buscar_laboratorios_estatus($buscar) {

    $valor=0;        
    
    if (strtoupper($buscar['buscar'])=='AUTORIZADO'){        
        $valor=1;        
    }    
    
    $sSql = 'SELECT '
            . ' l.id,'
            . ' r.pagado, '            
            . ' r.autorizado, '
            . ' l.nombre '
            . 'FROM '
            . ' laboratorios l, registros r '
            . 'WHERE '
            . ' l.id = r.id AND elim=0 AND '                   
            . ' r.autorizado = ' . $valor . ' ' 
            . 'ORDER BY r.autorizado, l.nombre';

    return  db_paginate($sSql, array('limit' => 30));      

}

function buscar_laboratorios_sitio($buscar) {
    
    $valor=0;        
    
    if (strtoupper($buscar['buscar'])=='ACTIVO'){        
        $valor=1;        
    }     
    
    $sSql = 'SELECT '
            . ' l.id,'
            . ' r.pagado, '            
            . ' r.autorizado, '
            . ' l.nombre '
            . 'FROM '
            . ' laboratorios l, registros r '
            . 'WHERE '
            . ' l.id = r.id AND elim=0 AND '                   
             . ' r.pagado = ' . $valor . ' ' 
            . 'ORDER BY r.autorizado, l.nombre';

    return  db_paginate($sSql, array('limit' => 30));      

}

function get_last_laboratorio($cantidad = 1000) {
    $sSql = 'SELECT '
            . ' l.id,'
            . ' r.pagado, ' 
            . ' r.autorizado, '
            . ' l.nombre '
            . 'FROM '
            . ' laboratorios l, registros r '
            . 'WHERE '
            . ' l.id = r.id AND elim=0 '            
            . 'ORDER BY r.autorizado, l.nombre';

	$data = db_paginate($sSql, array('limit' => 30));

   if(!$data){
   		set_flash('<strong>¡No hay laboratorios aun!</strong> <br />Talvez quieras agregar algunos cuantos...', 'info');
   }
   
   return $data;
}


function salvar_laboratorio($aData) {
    
    $required = array(
        'encuesta' => $aData['encuesta'],
        'nombre' => $aData['nombre'],
        'password' => $aData['password']
    );
    
    
    if (in_array('', $required)) {
        set_flash('Faltan Datos', 'warning');
        return false;
    }   
    
    if (! isset($aData['id'])) {
        
        $id = db_insertar('registros', array(
            'encuesta' => $aData['encuesta'],
            'autorizado' => $aData['autorizado'],
            'destacado' => $aData['destacado'],
            'palabras_clave' => $aData['palabras_clave'],
            'horario' => $aData['horario'],               
            'correo_contacto' => $aData['correo_contacto'],
            'correo' => $aData['correo'],
            'password' => Encrypter::encrypt($aData['password'])             
        ));      
        
        if($id==0)
        {
            return false;
        }
    
    }
    else{
        $id = $aData['id'];
        
        $result = db_modificar('registros',$aData['id'] , array(
            'encuesta' => $aData['encuesta'],
            'autorizado' => $aData['autorizado'],
            'destacado' => $aData['destacado'],
            'palabras_clave' => $aData['palabras_clave'],
            'horario' => $aData['horario'],               
            'correo_contacto' => $aData['correo_contacto'],
            'correo' => $aData['correo'],
            'password' => Encrypter::encrypt($aData['password'])             
        ));
        
    }
    
    
    if (isset($aData['id'])) {
        
                $result = db_modificar('laboratorios',$aData['id'] , array(
                    'id' => (int)$id,
                    'representante' => $aData['representante'],
                    'nombre' => $aData['nombre'],
                    'telefono' => $aData['telefono'],     
                    'calle_contacto' => $aData['calle_contacto'],
                    'numero_contacto' => $aData['numero_contacto'],
                    'colonia_contacto' => $aData['colonia_contacto'],
                    'cp_contacto' => $aData['cp_contacto'],
                    'estado_id' => (int)$aData['estado_id'],
                    'municipio_id' => (int)$aData['municipio_id'],                                        
                    'telefono_contacto' => $aData['telefono_contacto'],  
                    'fax_contacto' => $aData['fax_contacto']
                ));
                        
        $exit = "Laboratorio exitosamente <strong>actualizado</strong>";
    } else {
        

                $result = db_insertar('laboratorios' , array(
                    'id' => (int)$id,
                    'representante' => $aData['representante'],
                    'nombre' => $aData['nombre'],
                    'telefono' => $aData['telefono'],     
                    'calle_contacto' => $aData['calle_contacto'],
                    'numero_contacto' => $aData['numero_contacto'],
                    'colonia_contacto' => $aData['colonia_contacto'],
                    'cp_contacto' => $aData['cp_contacto'],
                    'estado_id' => (int)$aData['estado_id'],
                    'municipio_id' => (int)$aData['municipio_id'],                                        
                    'telefono_contacto' => $aData['telefono_contacto'],  
                    'fax_contacto' => $aData['fax_contacto']
                ));        
        
        $exit = "Laboratorio exitosamente <strong>creado</strong>";
    }
   
        set_flash($exit, 'success');
        return true;
}


function salvar_sitio($aData) {            
    
    if (isset($aData['id'])) {
        
                $result = db_modificar('registros',$aData['id'] , array(
                    'imagen' => $aData['imagen'],
                    'banner' => $aData['banner'],
                    'url' => $aData['url'],                               
                    'descripcion' => $aData['descripcion'],
                    'facebook' => $aData['facebook'],
                    'twitter' => $aData['twitter'],
                    'skype' => $aData['skype'],     
                    'sitio_web' => $aData['sitio_web'],
                    'mapa' => $aData['mapa'],
                    'subscripcion' => $aData['subscripcion'],
                    'forma_de_pago' => $aData['forma_de_pago'],
                    'fecha_inicio' => $aData['fecha_inicio'],
                    'fecha_fin' => $aData['fecha_fin'],
                    'pagado' => $aData['pagado']
                    
                ));
                        
        $exit = "Datos exitosamente <strong>actualizados</strong>";
    }
    
    if ($result) {
        set_flash($exit, 'success');
        return true;
    }
}


function cargar_laboratorios( ) {
    
    $sSql = 'SELECT '
            . ' l.id,'
            . ' l.nombre '
            . 'FROM '
            . ' laboratorios l, registros r '
            . 'WHERE '
            . ' l.id = r.id AND elim=0 '            
            . 'ORDER BY l.nombre';

    return db_fetch($sSql);
}


function cargar_laboratorios_exportar( ) {
    
    $sSql = 'SELECT '
            . ' l.id,'
            . ' l.nombre, '
            . ' l.representante, '            
            . ' l.telefono, '
            . ' r.correo_contacto, '
            . ' l.calle_contacto, '
            . ' l.numero_contacto, '
            . ' l.colonia_contacto, '
            . ' l.cp_contacto, '
            . ' e.estado, '
            . ' u.municipio '
            . 'FROM '
            . ' laboratorios l, registros r, estados e, municipios u '
            . 'WHERE '
            . ' l.id = r.id AND l.estado_id = e.id AND l.municipio_id = u.id AND r.elim=0 '            
            . 'ORDER BY l.nombre';

    
	$conn = db_connect();
	if (!$conn) 
        {
		return false;
	}
        
	$result = @mysql_query($sSql, $conn);

        $return = array();

        if (mysql_num_rows($result) > 0) {
                while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
                        $return[] = $row;
                }
        }
                
        return $return;
}


function laboratorios_aseguradoras($id) {
    
    $sSql = 'SELECT '
            . ' a.id,'
            . ' a.nombre '
            . 'FROM '
            . ' aseguradoras a, registro_aseguradora r '
            . 'WHERE '
            . ' a.id = r.aseguradora_id AND elim=0 AND r.registro_id =' . $id            
            . ' ORDER BY a.nombre';

    return db_fetch($sSql);
}

function laboratorios_tarjetas($id) {
    
    $sSql = 'SELECT '
            . ' t.id,'
            . ' t.nombre '
            . 'FROM '
            . ' tarjetas t, registro_tarjeta r '
            . 'WHERE '
            . ' t.id = r.tarjeta_id AND elim=0 AND r.registro_id =' . $id                
            . ' ORDER BY t.nombre';

    return db_fetch($sSql);
}

function comprobar_aseguradora($registro, $aseguradora) {
    $sSql = 'SELECT * FROM '
            . ' registro_aseguradora '
            . ' WHERE'
            . ' registro_id =' . $registro
            . ' AND '
            . ' aseguradora_id =' . $aseguradora;

    $oConnection = db_connect();

    if (!$oConnection) {
        return false;
    }

    $result = mysql_query($sSql, $oConnection);

    if (mysql_num_rows($result) > 0) {
        return true;
    } else {
        return false;
    }
}

function comprobar_tarjeta($registro, $tarjeta) {
    $sSql = 'SELECT * FROM '
            . ' registro_tarjeta '
            . ' WHERE'
            . ' registro_id =' . $registro
            . ' AND '
            . ' tarjeta_id =' . $tarjeta;

    $oConnection = db_connect();

    if (!$oConnection) {
        return false;
    }

    $result = mysql_query($sSql, $oConnection);

    if (mysql_num_rows($result) > 0) {
        return true;
    } else {
        return false;
    }
}


function agregar_aseguradora($aData) {            
    
    
    $required = array(
        'registro_id' => $aData['registro_id'],
        'aseguradora_id' => $aData['aseguradora_id']
    );
    
    
    if (in_array('', $required)) {
        set_flash('Faltan Datos', 'warning');
        return false;
    }   
    
    if( comprobar_aseguradora($aData['registro_id'],$aData['aseguradora_id']) ){
        set_flash('La aseguradora ya fue agregada.', 'warning');
        return false;        
    }
    
    if (isset($aData['registro_id'])) {
        
                $result = db_insertar('registro_aseguradora', array(
                    'registro_id' => $aData['registro_id'],
                    'aseguradora_id' => $aData['aseguradora_id']                    
                ));
                        
        $exit = "Datos exitosamente <strong>actualizados</strong>";
    }
    
    if ($result) {
        set_flash($exit, 'success');
        return true;
    }
}


function agregar_tarjeta($aData) {            
    
    
    $required = array(
        'registro_id' => $aData['registro_id'],
        'tarjeta_id' => $aData['tarjeta_id']
    );
    
    
    if (in_array('', $required)) {
        set_flash('Faltan Datos', 'warning');
        return false;
    }   
    
    if( comprobar_tarjeta($aData['registro_id'],$aData['tarjeta_id']) ){
        set_flash('La tarjeta ya fue agregada.', 'warning');
        return false;        
    }
    
    if (isset($aData['registro_id'])) {
        
                $result = db_insertar('registro_tarjeta', array(
                    'registro_id' => $aData['registro_id'],
                    'tarjeta_id' => $aData['tarjeta_id']                    
                ));
                        
        $exit = "Datos exitosamente <strong>actualizados</strong>";
    }
    
    if ($result) {
        set_flash($exit, 'success');
        return true;
    }
}