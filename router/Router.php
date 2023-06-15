<?php

namespace Router;

final class Router
{
    //свойство для хранения маршрутов
    static private $routes=[
        '/'=>'controllers/index.php', //controllers/index.php ещё не создан
    ];

    //метод для вызова нужного контроллера
    static function dispatch($uri){

        //парсим URI и оставим только путь
        $path=parse_url($uri)['path'];

        //вызываем соответствующий контроллер
        if(array_key_exists($path, self::$routes)){
            require self::$routes[$path];
        }
        else{
            //если нет такого пути выводим ошибку
            self::printError();
        }
    }

    //метод отправки ошибки с нужным кодом
    static function printError($code=404){

        http_response_code($code);

        require "view/{$code}.php"; //view/404.php ещё не создан
    }
}