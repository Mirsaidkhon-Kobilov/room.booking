
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
<form action="/result" method="post">
    <p>Этаж: </p>
    <select name="floorNum">
        <option value=1>1</option>
        <option value=2>2</option>
    </select>
    <p>Кабинет: </p>
    <select name="roomNum">
        <option value=1>1</option>
        <option value=2>2</option>
        <option value=3>3</option>
        <option value=4>4</option>
        <option value=5>5</option>
    </select>
    <p>Дата и время бронировки: </p>
    <input type="datetime-local" name="dateAndTime">
    <button type="submit">Проверить</button>

</form>
<style>

</style>
</body>
</html>
