<?php

$url = 'https://accounts.google.com/o/oauth2/auth?' . urldecode(http_build_query($params));

?>

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
    <img src="./public/img/google-logo.png">
    <?php
    echo '<a href="' . $url . '">Авторизация через Google</a>';
    ?>
    <style>
        img{
            position: absolute;
            height: 10%;
            left: 47%;
            top: 42%;
        }
        a{
            position: absolute;
            font-size: 28px;
            top: 55%;
            left: 40%;
        }
    </style>
</body>
</html>
