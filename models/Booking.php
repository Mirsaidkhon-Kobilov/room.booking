<?php

namespace Model;

class Booking
{
    // все данные из формы
    static private $floorNum;
    static private $roomNum;
    static private $date;
    static private $startTime;
    static private $endTime;

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