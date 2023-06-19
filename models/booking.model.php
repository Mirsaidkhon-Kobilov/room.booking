<?php
use Model\Booking;

// подготовим данные для INSERT запрос
$name=$_COOKIE['name'];
$floorNum=Booking::get('floorNum');
$roomNum=Booking::get('roomNum');
$date=Booking::get('date');
$startTime=Booking::get('startTime');
$endTime=Booking::get('endTime');

// INSERT запрос
$query="INSERT INTO `booking` (`id`, `floor_num`, `room_num`, `date`, 
                                    `start_time`, `end_time`, `user_name`) 
        VALUES (NULL, '$floorNum', '$roomNum', '$date', '$startTime', '$endTime', '$name');";

// создаём объект через который вызываем метод insert()
$database=new Model\Database();
$database->insert($query);

// отправляем пользователю почтовое оповещение
// на @gmail через который он авторизовался
$mailHead='Кабинет Забронирован!';
$message="Добрый день! Вы забронировали кабинет $floorNum-$roomNum в период времени от $startTime до $endTime, $date числа.";
mail($_COOKIE['email'],$mailHead,$message);