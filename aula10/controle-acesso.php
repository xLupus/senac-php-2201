<?php

session_start();

if( !isset($_SESSION['id']) ){
    header('location: /senac-php-2201/aula9/login.php');
    exit();
}