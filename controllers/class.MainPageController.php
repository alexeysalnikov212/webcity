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
        $obEvent = new Event; //создаем объект
        $obCompany = new Company;


        $events = $obEvent->getMain(); // вызываем метод этого объкта
        $companies = $obCompany->getMain();//и записываем данные в переменные

        $values = [
            "events" => $events,
            "companies" => $companies,
            "title" => "Главная",
        ];

        render("template.php", "main.php", $values);

        //теперь во вьюшке можно будет обращаться к этим переменным как к массиву объектов Event и Company соответственно
    }
}
