<?php
//класс контроллер событий
//к нему обращается точка входа ( index.php), вызывая нужную функцию, 
//сам контроллер обращается к моделям(models/class.Event),получает оттуда нужную информацию
//и подключает view для вывода в html
    class EventController extends AController
    {
        protected static $class = "Event";
        
        //  public function actionToday() // берет из базы все организации и записывает их в массив объектов item 
            // и вызывает view для показа
       // {
        //    $items = Event::getAll();
    //        include __DIR__."/../views/allEvent.php";
    //    }
        // показывает одно событие по i
    }
?> 