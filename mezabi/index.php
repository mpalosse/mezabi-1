<?php

spl_autoload_extensions(".php");
spl_autoload_register();

use yasmf\DataSource;
use yasmf\Router;

$dataSource = new DataSource(
    $host = 'mezabi-1-db',
    $port = '3306', 
    $db = 'mezabi-1', 
    $user = 'mezabi-1', 
    $pass = 'mezabi-1', 
    $charset = 'utf8mb4'
);

$router = new Router() ;
$router->route($dataSource);
