<?php
/**
 * Класс контроллер для регистрации
 */

class RegisterController extends Controller
{
    /**
     *  Действие по умолчанию
     */
    public function actionIndex()
    {
        render("template.php", "register.php", ["title" => "Регистрация"]);
    }
}
