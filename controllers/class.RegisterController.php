<?php
/*
	класс контроллер для регистрации
*/
    class RegisterController
    {
        public function actionindex()
        {            
            include __DIR__."/../views/Register.php"; // подключаем вьюшку
        }
    }
