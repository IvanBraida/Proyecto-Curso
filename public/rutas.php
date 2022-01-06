<?php
    require '../utils/autoloader.php';

    $request = $_SERVER['REQUEST_URI'];
    switch($request){
        case '/':
            cargarVista('principal');
            break;

    }