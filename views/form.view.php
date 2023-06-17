
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
<form action="/check" method="post">
    <p>Этаж: </p>
    <select name="floorNum" class="floorNum">
        <option value=1>1</option>
        <option value=2>2</option>
    </select>
    <p>Кабинет: </p>
    <select name="roomNum" class="roomNum">
        <option value=1>1</option>
        <option value=2>2</option>
        <option value=3>3</option>
        <option value=4>4</option>
        <option value=5>5</option>
    </select>
    <p>Дата: </p>
    <p>Начало брони: </p>
    <p>Конец брони: </p>
    <input type="date" name="date" class="date">
    <input type="time" name="startTime" class="startTime">
    <input type="time" name="endTime" class="endTime">
    <button type="submit">Бронировать</button>
</form>
<style>
    form{
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
        left: 15%;
    }
    .date{
        position: absolute;
        height: 7%;
        left: 57%;
        top: 28.5%;
    }
    .floorNum{
        position: absolute;
        height: 7%;
        width: 17%;
        left: 70%;
        top: 6%;
    }
    .roomNum{
        position: absolute;
        height: 7%;
        width: 17%;
        left: 70%;
        top: 17.5%;
    }

    }
    button{
        position: absolute;
        height: 7%;
        width: 25%;
        left: 60%;
        top: 80%;
    }
    .startTime{
        position: absolute;
        height: 7%;
        width: 17%;
        left: 70%;
        top: 41%;
    }
    .endTime{
        position: absolute;
        height: 7%;
        width: 17%;
        left: 70%;
        top: 53%;
    }
</style>
</body>
</html>