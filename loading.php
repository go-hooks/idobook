 <html>  
    <head>
        <?php
            session_start();
            session_name('idobook');      
            $_SESSION['contador'] = 1;
            require_once(dirname(__FILE__) . "/ini.php");        
            include('includes/metatags.php'); 
        ?>
  
        <title>Idobook_Loading</title>
    </head>

    <body id="loading">

        <div id="loading_bienvenido">
            <h2 class="coloridobook">Esp&eacute;ralo...</h2>
        </div>

        <div id="loading_img">
            <img src="img/Loading/logo_idobook_loading.png"> 
        </div>

        <div id="loading_redes">
            <a href="https://twitter.com/idobookmx" target="_blank">
                <img src="img/social_twitter_new.png" />
            </a>
            <a href="https://www.facebook.com/idobookmx" target="_blank">
                <img src="img/social_facebook_new.png" class="medio" />
            </a>
            <a href="https://www.instagram.com/idobookmx/" target="_blank">
                <img src="img/social_instagram_new.png">
            </a>
        </div>

        <a href="doc/idobook_mediakit.pdf" target="_blank">
            <div id="loading_entrar">
                <h2 class="coloridobook">Media Kit</h2>
                <!--<img src="img/Loading/entrar.png">-->
            </div>
        </a>  

        <!-- JQUERY -->

    <script src="js/vendor/jquery.cycle2.min.js"></script>
    <script src="js/vendor/jquery.cycle2.carousel.min.js"></script>

    <!-- SELECTIVIZR -->

    <!--[if (gte IE 6)&(lte IE 8)]>
        <script src="js/polyfills/selectivizr-min.js"></script>
    <![endif]-->

    </body>
</html>

