<?php

$router->define([
    '/'=>'controllers/home.php',
    'addTask'=>'controllers/addTask.php',
    '404'=> 'controllers/404.php'
]);