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

        <div id="loading_learn_more">
            <h3 class="coloridobook">Conoce m&aacute;s aqu&iacute;:</h3>
        </div>

        <a href="doc/idobook_mediakit.pdf" target="_blank">
            <div id="loading_entrar">
                <h2 class="coloridobook">Media Kit</h2>
            </div>
        </a>  

        <!-- JQUERY -->
        <!-- Optional JavaScript -->
        <script src="js/vendor/jquery.cycle2.min.js"></script>
        <script src="js/vendor/jquery.cycle2.carousel.min.js"></script>
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <!-- SELECTIVIZR -->

        <!--[if (gte IE 6)&(lte IE 8)]>
            <script src="js/polyfills/selectivizr-min.js"></script>
        <![endif]-->

    </body>
</html>

