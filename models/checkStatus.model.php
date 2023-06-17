<?php

//получаем данные переданные из формы методом POST
$floorNum=$_POST['floorNum'];
$roomNum=$_POST['roomNum'];
$date=$_POST['date'];
$startTime=$_POST['startTime'].':00';
$endTime=$_POST['endTime'].':00';

//сохраняем данные из формы в COOKIE на будущее
Model\User::setFormData($floorNum,$roomNum,$date,$startTime,$endTime);

// запрос для проверки существует ли бронь
// которая пересекается со временем указанным пользователем
$query="SELECT user_name AS userName, start_time AS startTime, end_time AS endTime
                FROM booking WHERE (floor_num=$floorNum)
                AND (room_num=$roomNum) AND (date='$date') 
                AND (((start_time<='$startTime') AND (end_time>'$startTime')) 
                         OR ((start_time<'$endTime') AND (start_time>='$startTime')))";


// делаем запрос в базу для проверки брони комнаты
$database=new Model\Database();
$result=$database->check($query);


// если нет бронировокпересекающихся с запросом пользователя
// то вызываем страницу для бронировки
// иначе вызовим страницу показывающую кем занята комната
if ($result==NULL){
    require './controllers/booking.php';
}
else{
    require './controllers/alreadyBooked.php';
}