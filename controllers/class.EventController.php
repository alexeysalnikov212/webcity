<?php
//класс контроллер событий
//к нему обращается точка входа ( index.php), вызывая нужную функцию, 
//сам контроллер обращается к моделям(models/class.Event),получает оттуда нужную информацию
//и подключает view для вывода в html
    class EventController
    {
        public function actionAll() // берет из базы все организации и записывает их в массив объектов item 
            // и вызывает view для показа
        {
            $item = Event::getAll();
            include __DIR__."/../views/allEvent.php";
        }
        public function actionOne() // показывает одно событие по id
        {
            $id = $_GET['id'];
            $item = Event::getOne($id);
            include __DIR__."/../views/oneEvent.php";
        }
    }
?> 