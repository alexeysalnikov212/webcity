<?php
//класс контроллер событий
//к нему обращается точка входа ( index.php), вызывая нужную функцию, 
//сам контроллер обращается к моделям(models/class.Event),получает оттуда нужную информацию
//и подключает view для вывода в html
    class AController
    {
        public function actionAll() // берет из базы все организации и записывает их в массив объектов item 
            // и вызывает view для показа
        {
            $ob = new static::$class; 
            $items = $ob::getAll();
            var_dump(static::$class);
            include __DIR__."/../views/all".static::$class.".php";
        }
        public function actionOne() // показывает одно событие по id
        {
            $ob = new static::$class; 
            $id = $_GET['id'];
            $item = $ob::getOne($id);
            include __DIR__."/../views/one".static::$class.".php";
        }
    }
?> 