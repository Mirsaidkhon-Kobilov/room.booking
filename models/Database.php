<?php

namespace Model;

use \PDO;

class Database
{
    // свойство для хранения объекта встроенного класса PDO
    // представляет собой связь с базой данных
    private $connection;

    //конструктор создаёт объект встроенного класса PDO
    // для работы с базой данных
    public function __construct()
    {
        $this->connection = new PDO('mysql:host=localhost;dbname=room.booking;user=root');
    }

    // метод провверяет есть ли бронь на указанное пользователем время
    public function check($query)
    {
        // используем метод prepare() встроенного класса PDO
        $prepare=$this->connection->prepare($query);
        $prepare->execute();

        // результат запроса запишем в виде асоциативного массива
        return $prepare->fetchAll(PDO::FETCH_ASSOC);
    }

    // метод для INSERT запроса
    // вызывается если бронь комнаты будет успешной
    public function insert($query)
    {
        $this->connection->exec($query);
    }
}