<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Room Booking</title>
</head>
<body>
<div>
    <p>Извините, кабинет уже забронирован сотрудником:</p>
    <p><?php echo $result[0]['userName']; ?></p>
    <p>В период времени:</p>
    <p style="color: crimson"><?php echo $result[0]['startTime'],' - ',$result[0]['endTime']; ?></p>
    <a href="/">Выберите другое время</a>
</div>
<style>
    div{
        position: absolute;
        height: 60%;
        width: 25%;
        top: 20%;
        left: 37.5%;
        background-color: darksalmon;
    }
    p{
        position: relative;
        font-family: Serif;
        font-size: 25px;
        left: 13%;
    }
    a{
        position: absolute;
        font-size: 28px;
        top: 55%;
        left: 15%;
    }
</style>
</body>
</html>