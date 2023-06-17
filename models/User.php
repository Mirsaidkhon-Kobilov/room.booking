<?php

namespace Model;

class User
{
    // все данные касающиеся текущего пользователя
    static private $name;
    static private $email;
    static private $floorNum;
    static private $roomNum;
    static private $date;
    static private $startTime;
    static private $endTime;

    // метод для запоминания Имени и Почты пользователя
    static function setNameAndEmail($name,$email)
    {
        self::$name=$name;
        self::$email=$email;
    }

    // метод для запоминания данных из Формы
    // заполненной пользоввателем
    static function setFormData($floorNum, $roomNum, $date, $startTime, $endTime)
    {
        self::$floorNum=$floorNum;
        self::$roomNum=$roomNum;
        self::$date=$date;
        self::$startTime=$startTime;
        self::$endTime=$endTime;
    }

    // метод принимает название свойства и возвращает его значение
    static function get($param)
    {
        return self::$$param;
    }
}