<?php
/*
класс контроллер событий наследуется от абстрактного
к нему обращается точка входа ( index.php), вызывая нужную функцию, 
сам контроллер обращается к моделям(models/class.Event),получает оттуда нужную информацию
и подключает view для вывода в html
*/
class EventController extends AController
    {
        protected static $class = "Event";
        
        protected static $view ="event";
        protected static $views ="events";
        
        protected static $title ="Событие";
        protected static $titles ="Все события";

public function actionCalendar() // берет из баз данные для показа главной странички
        //и передает их вьюшке Main
    {
    $date = $_GET['date'];    
    $events = Event::getCalendar($date); // вызываем метод этого объкта
        
        // получаем все категории для navbar
        $categories = Category::getAllCategory();

        $values = [
            "events" => $events,
            "categories" => $categories,
            "title" => "Главная",
        ];

        render("template.php", "events.php", $values);

        //теперь во вьюшке можно будет обращаться к этим переменным как к массиву объектов Event и Company соответственно
    }
}