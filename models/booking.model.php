<?php
use Model\User;

// подготовим данные для INSERT запрос
$name=User::get('name');
$floorNum=User::get('floorNum');
$roomNum=User::get('roomNum');
$date=User::get('date');
$startTime=User::get('startTime');
$endTime=User::get('endTime');

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
mail($_COOKIE["email"],$mailHead,$message);