<?php

use Router\Router as Router;


require_once '../vendor/autoload.php';

Router::dispatch($_SERVER['REQUEST_URI']);