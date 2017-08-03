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
        $values = [
            "categories" => $this->allCategories,
            "title" => "Главная",
        ];
        render("template.php", "user.php", $values);
    }
}
