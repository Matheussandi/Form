<?php
    $print = function($class) {
        if(file_exists('classes/'.$class.'.php')) {
            include_once('classes/'.$class.'.php');
        }
    };

    spl_autoload_register($print);

    define('HOST', 'localhost');
    define('DATABASE', 'form_cadastro');
    define('USER', 'root');
    define('PASSWORD', '');

    $connection = new mysqli(HOST, USER, PASSWORD, DATABASE);
?>