<?php
    spl_autoload_register(function ($clase){
        if(file_exists("../modelos/$clase.class.php"))
            require "../modelos/$clase.class.php";

        if(file_exists("../controladores/$clase.class.php"))
            require "../controladores/$clase.class.php";
    });

    require '../configuracion.php';
    require_once 'render.php';

    session_start();