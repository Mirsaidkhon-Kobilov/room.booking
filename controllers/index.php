<?php

require './models/auth.model.php';

//авторизовванный пользователь перейдёт на страницу с формой
//не авторизовванный пользователь вернётся к началу
if(isset($login)) {
    require './views/form.view.php';
}
else{
    require './views/index.view.php';
}