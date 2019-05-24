    <!--[if lt IE 7]>
        <p class="chromeframe">Tu navegador es <strong>Obsoleto</strong>. Por favor <a href="http://browsehappy.com/">actualizalo</a> ó <a href="http://www.google.com/chromeframe/?redirect=true">instala el componente Google Chrome Frame</a> para mejorar tu experiencia.</p>
    <![endif]-->

    <header>
        <div class="wrapper">
            <a href="index.php">
                <!--<img src="img/logo.png" id="logo" class="fl">-->         
            </a>
            <p class="fecha">            

            <?php 
                date_default_timezone_set('America/Mexico_City');      
                setlocale (LC_TIME,"spanish");
                $dias = array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado");
                $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
                echo $dias[date('w')]." ".date('d')." de ".$meses[date('n')-1]. " del ".date('Y') ;            
                //echo strftime("%A, %d de %B de %Y");
            ?>
              <!--<br><br><span id="header_title" style="font-size: 16px" >DIRECTORIO DE PROVEEDORES</span>-->
            </p>

            <?php 
                $sql = " SELECT * FROM imagen";
                $imagen = get_one_sql($sql);    
            ?>
          
            <?php if(isset($imagen['imagen'])): ?>                   
                <a href="<?php echo $imagen['url'] ?>" target="_blank">
                    <img src="<?php echo UP_IMG_PATH . $imagen['imagen'] ?>" style="float:right" height="146px">            
                </a>
            <?php endif; ?>
                  
            <nav>
                <ul class="wrapper">
                   <li><a id="home_icon" href="index.php"><img src="img/ico-home.png"></a></li>
                   <li><a id="menu_option_1" href="medicos.php">BANQUETES</a></li>
                   <li><a id="menu_option_2" href="hospitales.php">WEDDING PLANNERS</a></li>
                   <li><a id="menu_option_3" href="servicios-relacionados.php">JOYERÍAS</a></li>
                   <li><a id="menu_option_4" href="proveedores.php">PROVEEDORES</a></li>
                   <li><a id="menu_option_5" href="proveedores.php">NOVIAS</a></li>
                   <li><a id="menu_option_6" href="empresa.php">QUIÉNES SOMOS</a></li>
                   <li><a id="menu_option_7" href="contacto.php">CONTACTO</a></li>          
                   <!--<li><a href="LiveBetter/index.php" target="_blank">Live Better</a></li>-->        
                </ul>
            </nav>
        </div>
    </header>