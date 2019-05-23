<?php 
session_start();
session_name('medico_laguna');
    
require_once("ini.php"); 

    $where = "mostrar = 1 AND elim = 0";
    $categorias = get_all_actived_inactived('categorias', $where, 'nombre');    

    
    $where = "elim = 0 AND autorizado = 1";
    
    if(isset($_GET['categoria']) && is_numeric($_GET['categoria'])):
        $where .= " AND categoria_id = ". $_GET['categoria'] ;
    endif;
    
    if(isset($_POST['buscar'])):
        $where .= " AND palabras_clave LIKE '%".$_POST['buscar'] . "%'" ;
    endif;
    
    $busqueda_resultados = get_all_actived_inactived('articulos', $where, 'fecha');        
        
    if(empty($busqueda_resultados))
    {        
        $where = "elim = 0 AND autorizado = 1";           
    }
    
    $paginador = get_all_actived_inactived_paginado('articulos', $where, '9' , 'fecha', 'DESC');  
        
    if(! isset($_GET['categoria']) && ! isset($_POST['buscar']) )
    {
            $where = "elim = 0"
                    . " AND localizacion = 'blog'"
                    . " AND tipo = 6"
                    . " AND fecha_inicio <= '" . date("Y/m/d") . "'"
                    . " AND fecha_fin >= '" . date("Y/m/d") . "'" ;
            $banners6 = get_all_actived_inactived('banners', $where, 'RAND()');    
    }
    
    $sql = " SELECT * FROM banners"
            . " WHERE"
            . " elim = 0"            
            . " AND localizacion = 'blog'"
            . " AND tipo = 7"
            . " AND fecha_inicio <= '" . date("Y/m/d") . "'"
            . " AND fecha_fin >= '" . date("Y/m/d") . "'"
            . " ORDER BY RAND()" ;
    $banner7 = get_one_sql($sql);    
    
    
    $sql = " SELECT * FROM invasivos"
            . " WHERE"
            . " elim = 0"            
            . " AND localizacion = 'blog'"
            . " AND tipo = 1"
            . " AND fecha_inicio <= '" . date("Y/m/d") . "'"
            . " AND fecha_fin >= '" . date("Y/m/d") . "'" ;
    $invasivo = get_one_sql($sql);  
    
    
    $anterior = ($paginador['pagina_actual'] == 1) ? 1 : $paginador['pagina_actual']-1;    
    $siguiente = ($paginador['total_paginas'] > $paginador['pagina_actual']) ? $paginador['pagina_actual']+1 : $paginador['pagina_actual'];
        
    $sql = " SELECT * FROM imagen";
    $imagen = get_one_sql($sql);      
    
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="es"> <!--<![endif]-->
<?php include("includes/metatags.php"); ?>
    
    <?php 

    if(isset($_GET['categoria']) && is_numeric($_GET['categoria'])):

            $cat = get_all_data_from('categorias', $_GET['categoria']);
            $fondo = UP_IMG_PATH . $cat['imagen'];
    endif;

    ?>    
    
<body 
    class="main" 
    
     <?php if(isset($_GET['categoria']) && is_numeric($_GET['categoria'])):?>     
        style="background: url(<?php echo $fondo; ?>) no-repeat center center fixed;-webkit-background-size: cover;-moz-background-size: cover; -o-background-size: cover;background-size: cover;"
     <?php elseif(isset($imagen['home_imagen']) && $imagen['home_imagen'] != ""): ?>
        style="background: url(<?php echo UP_IMG_PATH . $imagen['home_imagen'] ?>) no-repeat center center fixed;-webkit-background-size: cover;-moz-background-size: cover; -o-background-size: cover;background-size: cover;"
     <?php endif; ?>     
     
>
    
    
    
    <?php if(! isset($_SESSION['blog'])): ?>        
        
        <?php if(!empty($invasivo)): ?>        
    
            <?php $_SESSION['blog'] = 1 ?>
            <a href="<?php echo UP_IMG_PATH . $invasivo['imagen']  ?>" class="fancybox" id="promocion"></a>                
            
        <?php endif; ?>        
            
            
    <?php endif; ?>
            
            
	<!--[if lt IE 7]>
            <p class="chromeframe">Tu navegador es <strong>Obsoleto</strong>. Por favor <a href="http://browsehappy.com/">actualizalo</a> ó <a href="http://www.google.com/chromeframe/?redirect=true">instala el componente Google Chrome Frame</a> para mejorar tu experiencia.</p>
    <![endif]-->
    
    <div id="header">
        <div class="logo"><a href="index.php"><img src="img/logo.png" width="120px"></a></div>
<!--        <div class="title">Live Better</div>-->
    </div>
    <div id="content">
         
        
        <?php include("includes/header.php"); ?>
                        
        <?php if(! empty($banners6)): ?>
        
        <div class="banner cycle-slideshow" data-cycle-slides="> a">
            <div class="cycle-pager"></div>
            
            <?php foreach ($banners6 as $banner): ?>

                <a href="<?php echo $banner['url']  ?>" target="_blank">
                    <img src="<?php echo UP_IMG_PATH . $banner['imagen']  ?>" >
                </a>

            <?php endforeach; ?>                
            
        </div>
        
        <?php endif; ?>
        

        
                <form name="anterior" method="post">
                    <input type="hidden" name="_pagi_pg" value="<?php echo $anterior; ?>">
                </form>
        
                <form name="siguiente" method="post">
                    <input type="hidden" name="_pagi_pg" value="<?php echo $siguiente; ?>">
                </form>

        
        <div class="wrap pineable">
            <a onclick="document.forms['anterior'].submit();">                    
                <div class="pinprev"></div>
            </a>           
            <a onclick="document.forms['siguiente'].submit();">   
                <div class="pinnext"></div>
            </a>   
            <!--<div class="arrows">
                
                
                    <a onclick="document.forms['anterior'].submit();">                    
                        <div class="prev"></div>
                    </a>
                
                                
                    <a onclick="document.forms['siguiente'].submit();">   
                        <div class="next"></div>
                    </a>                    
                
                
            </div>-->
            <div class="pager">
                

            </div>
            
            <div id="grid">
                                
                <?php
                    foreach($paginador as $pagina):

                        foreach($pagina as $key => $articulos): ?>
                
                        <?php                         
                            $categoria = get_all_data_from('categorias', $articulos['categoria_id']);
                        ?>
                
                            <a href="detalle.php?id=<?php echo $articulos['id'] ?>">
                    
                            <div class="item" style="background-color: <?php echo $categoria['color']; ?>">
                                
                                <?php if(! isset($_GET['categoria'])): ?>
                                <div class="cat"><?php echo replace($categoria['nombre']); ?></div>
                                <?php endif; ?>
                                
                                <div class="title"><?php echo replace($articulos['titulo']); ?></div>
                                
                                <?php if($articulos['imagen'] != ''): ?>
                                    <div class="img round"><img width="132px" src="<?php echo UP_IMG_PATH . $articulos['imagen'] ?>"></div>
                                <?php endif; ?>
                                
                                    <div class="txt"><span><?php echo substr(html_entity_decode($articulos['texto']),0,140) . "..."; ?></span></div>
                                
                                <div class="date"> <?php echo date('d/m/Y', strtotime($articulos['fecha'])) ?></div>
                                <div class="vermas">Leer mas</div>
                            </div>
                            
                            </a>
                
                
                        <?php endforeach;

                    endforeach;
                ?>
                

                
                
            </div>
            
            
            <div class="pager"></div>
        </div>
        
        <?php if(! empty($banner7)): ?>
        
        <div class="banner lower cycle-slideshow" data-cycle-slides="> a">
    
                <a href="<?php echo $banner7['url']  ?>" target="_blank">
                    <img src="<?php echo UP_IMG_PATH . $banner7['imagen']  ?>" >
                </a>
            
        </div>
        
        <?php endif; ?>
    </div>
        
        
        
    <?php include("includes/footer.php"); ?>


        
</body>
</html>
