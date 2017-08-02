<?php
/**
 * Класс контроллер для регистрации
 */

class ProfileController extends Controller
{
    /**
     *  Действие по умолчанию
     */
    public function actionIndex()
    {
        render("template.php", "userr.php", ["title" => "Регистрация"]);
    }
}
