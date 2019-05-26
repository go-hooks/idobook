<?php
    session_start();
    session_name('medico_laguna');      
    $_SESSION['contador'] = 1;
    require_once(dirname(__FILE__) . "/ini.php");        
    include('includes/metatags.php'); 
?>
  
<title>Idobook_Loading</title>

</head>

    <body id="loading">

        <!--<div id="loading_bienvenido">
            <img src="img/Loading/bienvenido.png"> 
        </div>  -->  

        <div id="loading_img">
            <img src="img/Loading/logo_idobook_loading.png"> 
        </div>

        <div id="loading_slogan">
        <h2 class="coloridobook">ENCUENTRA TODO LO NECESARIO PARA TU BODA</h2>
        </div>

        <div id="loading_siguenos">
            <img src="img/Loading/siguenos.png"> 
        </div>    
    
        <div id="loading_redes">
            <img src="img/Loading/social.png"> 
        </div>-->

        <!-- <a href="index.php">   
            <div id="loading_entrar">
                <img src="img/Loading/entrar.png">
            </div>
        </a>    -->

        <!-- JQUERY -->

    <script src="js/vendor/jquery.cycle2.min.js"></script>
    <script src="js/vendor/jquery.cycle2.carousel.min.js"></script>

    <!-- SELECTIVIZR -->

    <!--[if (gte IE 6)&(lte IE 8)]>
        <script src="js/polyfills/selectivizr-min.js"></script>
    <![endif]-->

    </body>

</html>

