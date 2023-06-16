<?php
namespace Controller;

class Authorization
{
    // авторизован ли пользователь
    private $loginStatus;

    // информация о пользователе
    private $userInfo;

    // метод для смены статуса пользователя на авторизированного
    function login($userInfo){
        $this->loginStatus=true;

        $this->setUserInfo($userInfo);
    }

    // метод для смены статуса пользователя на НЕ авторизированного
    /*function logout(){
        $this->loginStatus=false;
    }*/

    // метод для записи данных авторизованного пользователя
    function setUserInfo($userInfo){
        $this->userInfo=$userInfo;
    }

    // метод возвращает статус авторизации пользователя
    function getLoginStatus(){
        return $this->loginStatus;
    }

    // метод возвращает информацию пользователя
    function getUserInfo(){
        return $this->userInfo;
    }
}