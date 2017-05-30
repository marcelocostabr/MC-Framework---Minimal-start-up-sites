<?php

    $_SERVER['REQUEST_URI'];

    if ($_SERVER["REQUEST_URI"]=="/br/lista-produtos/agco-massey-ferguson") {
        Header( "HTTP/1.1 301 Moved Permanently" );
        Header( "Location: http://stahl.com.br/br/produtos/agco-massey-ferguson");
    }

?>