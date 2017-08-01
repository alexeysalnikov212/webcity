<?php
/**
 * Class MainPageController
 *
 * класс контроллер для главной странички
 * соединяется с базой и выводит данные для главной странички
 */

class MainPageController extends Controller
{


    /**
     * MainPageController constructor.
     */
    public function __construct()
    {
    }

    /**
     *  Действие по умолчанию
     */
    public function actionIndex() // берет из баз данные для показа главной странички
        //и передает их вьюшке Main
    {
        $events = Event::getMain(); // вызываем метод этого объкта
        $companies = Company::getMain();//и записываем данные в переменные

        // получаем все категории для navbar
        $categories = Category::getAllCategory();

        $values = [
            "events" => $events,
            "companies" => $companies,
            "categories" => $categories,
            "title" => "Главная",
        ];

        render("template.php", "main.php", $values);

        //теперь во вьюшке можно будет обращаться к этим переменным как к массиву объектов Event и Company соответственно
    }
}
