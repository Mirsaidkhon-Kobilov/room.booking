<?php

use Router\Router as Router;

//Подключение Композера
require_once 'vendor/autoload.php';

//Вызов статического метода Роутера
Router::dispatch($_SERVER['REQUEST_URI']);