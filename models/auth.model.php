<?php

//проверяем авторизован ли пользователь
if (!empty($_GET['code'])) {
    // если да то
    // получаем код для получения нужного нам токена
    $params = array(
        'client_id'     => '392383151749-1jre7ef4r88ttgknk9nqmki352dvtf7r.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect_uri'  => 'http://localhost',
        'grant_type'    => 'authorization_code',
        'code'          => $_GET['code']
    );

    // Отправляем код для получения токена (POST-запрос).
    $ch = curl_init('https://accounts.google.com/o/oauth2/token');
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_HEADER, false);
    $data = curl_exec($ch);
    curl_close($ch);

    $data = json_decode($data, true);

    // Проверяем получен ли токен
    if (!empty($data['access_token'])) {

        // Токен получили, теперь получаем данные пользователя.
        $params = array(
            'access_token' => $data['access_token'],
            'id_token'     => $data['id_token'],
            'token_type'   => 'Bearer',
            'expires_in'   => 3599
        );

        $info = file_get_contents('https://www.googleapis.com/oauth2/v1/userinfo?' . urldecode(http_build_query($params)));
        $info = json_decode($info, true);

        //записываем данные пользователя после авторизации
        setcookie('name',$info["name"],time()+1800);
        setcookie('email',$info["email"],time()+1800);
    }
}
else{
    // если пользователь не авторизован то
    //задаём начальные значания, которые нужны для начала авторизации
    $params = array(
        'client_id'     => '392383151749-1jre7ef4r88ttgknk9nqmki352dvtf7r.apps.googleusercontent.com',
        'redirect_uri'  => 'http://localhost',
        'response_type' => 'code',
        'scope'         => 'https://www.googleapis.com/auth/userinfo.email https://www.googleapis.com/auth/userinfo.profile',
        'state'         => '123'
    );

}