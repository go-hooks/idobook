<div id="zonaperfil">

    <div class="col1" style="width: 60%; display:inline-block; vertical-align: top;">     
      <?php if(isset($_SESSION['usuario_id']) && is_numeric($_SESSION['usuario_id'])): ?>       
          <h3><?php echo $_SESSION['nombre_usuario'];  ?> </h3>         
      <?php endif; ?> 
    </div>

   <div class="col2" style="width: 38%; display:inline-block; vertical-align: top;">  
        <?php if(isset($_SESSION['usuario_id']) && is_numeric($_SESSION['usuario_id'])): ?>         
            <ul>
                 <?php
                    $sql = "SELECT * FROM registros"
                            . " WHERE"
                            . " elim = 0"
                            . " AND id =" . $_SESSION['usuario_id'];   
                    $registro = get_one_sql($sql);                          
                 ?>                               
                 <?php if($registro):  ?>                
                 <?php if($registro['forma_de_pago'] != ''):  
                        switch ($_SESSION['usuario_tipo']) 
                        {
                          case "medico":
                            ?>  <li><a href="editar_minisitio_medico.php">Mi Mini Sitio</a></li> <?php  
                            break;
                          case "hospital":
                            ?>  <li><a href="editar_minisitio_hospital.php">Mi Mini Sitio</a></li> <?php  
                            break;
                          case "laboratorio":
                            ?>  <li><a href="editar_minisitio_laboratorio.php">Mi Mini Sitio</a></li> <?php    
                            break;
                          case "servicio":
                            ?>  <li><a href="editar_minisitio_servicio.php">Mi Mini Sitio</a></li> <?php     
                            break;
                          case "proveedor":
                            ?>  <li><a href="editar_minisitio_proveedor.php">Mi Mini Sitio</a></li> <?php    
                            break;                        
                        }                                          
                 ?>                                                
                 <?php else:  
                        switch ($_SESSION['usuario_tipo']) 
                        {
                          case "medico":
                            ?>  <li><a href="editar_perfil_medico.php">Mi Perfil</a></li> <?php    
                            break;
                          case "hospital":
                            ?>  <li><a href="editar_perfil_hospital.php">Mi Perfil</a></li> <?php  
                            break;
                          case "laboratorio":
                            ?>  <li><a href="editar_perfil_laboratorio.php">Mi Perfil</a></li> <?php  
                            break;
                          case "servicio":
                            ?>  <li><a href="editar_perfil_servicio.php">Mi Perfil</a></li> <?php  
                            break;
                          case "proveedor":
                            ?>  <li><a href="editar_perfil_proveedor.php">Mi Perfil</a></li> <?php  
                            break;                        
                        }                        
                  ?>                                                   
                 <?php endif; ?>                
                 <?php endif; ?>                   
                    <li><a href="eliminar.php" onclick="return confirm('Esta seguro que desea eliminar su registro?')">Eliminar</a></li>
                    <li><a href="index.php?salir=true"><img src="img/ico-closesession.png">Salir</a></li>
            </ul>
        <?php endif; ?>    
    </div>
</div>

<form id="zonabuscador" name="contacto"  method="post" action="resultados-busqueda.php">
    <input required="" id="buscador" type="text" name="buscar" placeholder="Busca el proveedor que desees">
    <input id="btnbuscador" type="submit" value="BUSCAR">        
</form>