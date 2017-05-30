<?php

////////////////////////////////////////////////////////////////
// REQUIRED INCLUDES
////////////////////////////////////////////////////////////////

// redirecionamento 301
//require_once('includes/redir301.php');

// url amigavel
require_once('classes/Url.class.php');

// db
//require_once ('includes/db.php');

// classes diversas
//require_once ('classes/funlib.php');

////////////////////////////////////////////////////////////////
// FRIENDLY URL
////////////////////////////////////////////////////////////////


// site.com/page/action/id/return
$page   = Url::getURL( 0 );
$action = Url::getURL( 1 );
$id     = Url::getURL( 2 );
$return = Url::getURL( 3 ); 
$urlPath= URL::getBase();

if ($page == null) {
    $page = "default";
}

////////////////////////////////////////////////////////////////
// TITLES
////////////////////////////////////////////////////////////////

if ( $page == 'default' or $page == '' ) {$tituloSite = "Titulo Inicio";}


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta name="MobileOptimized" content="320">
    <meta name="HandheldFriendly" content="True">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $tituloSite ?></title>
    <META NAME="description" content="" />
    <META NAME="keywords" content="" />
    <META NAME="copyright" CONTENT="Copyright © - http://www.site.com.br">
    <META NAME="AUTHOR" CONTENT="Mind Design - http://www.mind.art.br">
    <META NAME="distribution" CONTENT="global">
    <META NAME="rating" content="general">
<!--
    <META NAME="Robots" CONTENT="index, follow, all">
    <META NAME="GOOGLEBOT" content="index,follow">
    <META NAME="MSNBot" content="index,follow">
    <META NAME="InktomiSlurp" content="index,follow">
    <META NAME="Unknownrobot" content="index,follow">
    <META NAME="RATING" CONTENT="GENERAL">
    <meta name="Revisit-after" content="1 days">  
 -->
    <meta name="robots" content="noindex">
    <meta name="googlebot" content="noindex">
    <link rel="stylesheet" href="<?php echo $urlPath;?>css/main.css?<?php echo rand(5,20)?>">
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo $urlPath;?>favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo $urlPath;?>favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo $urlPath;?>favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo $urlPath;?>favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo $urlPath;?>favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo $urlPath;?>favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo $urlPath;?>favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo $urlPath;?>favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $urlPath;?>favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="<?php echo $urlPath;?>favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $urlPath;?>favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo $urlPath;?>favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $urlPath;?>favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo $urlPath;?>favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php echo $urlPath;?>favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
</head>

<body>

 
    <?php
    ////////////////////////////////////////////////////////////////
    // CONTENT INCLUDE
    ////////////////////////////////////////////////////////////////
    ?>
    <div class="content">

            <?php
            if(file_exists('includes/'.$page.'.php')){
                require('includes/'.$page.'.php');
            } else {
                require('includes/404.php');
            }
            ?>

    </div>
    <?php

    ////////////////////////////////////////////////////////////////
    // JAVASCRIPT INCLUDES
    ////////////////////////////////////////////////////////////////
    ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>
    <script src="<?php echo $urlPath;?>js/ie8.js"></script>
    <script src="<?php echo $urlPath;?>js/options.js?<?php echo rand(5,20)?>"></script>


    <!-- analitycs -->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-00000000-0', 'site.com');
      ga('send', 'pageeview');
    </script>

</body>

</html>
