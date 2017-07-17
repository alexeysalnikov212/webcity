<?php
//класс контроллер событий
//к нему обращается точка входа ( index.php), вызывая нужную функцию, 
//сам контроллер обращается к моделям(models/class.Event),получает оттуда нужную информацию
//и подключает view для вывода в html
    class AController
    {
        public function actionAll() // берет из базы все организации/события и записывает их в массив объектов item 
            // и вызывает view для показа
        {
            $ob = new static::$class; //создаем объект дочернего класса
            $items = $ob::getAll(); // вызываем метод этого объкта
            include __DIR__."/../views/all".static::$class.".php"; // подключаем вьюшку
        }
        public function actionOne() // показывает одно событие/организацию по id работает аналогично actionAll
        {
            $ob = new static::$class; 
            $id = $_GET['id'];
            $item = $ob::getOne($id);
            include __DIR__."/../views/one".static::$class.".php";
        }
        
        public function actionSome() //отюирает и показывает события/организации по определенному критерию 
        {
            $ob = new static::$class;
            $key = $_GET['key'];        //получаем данные из строки
            $value = $_GET['value'];
            $items = $ob::getSome($key,$value);
            include __DIR__."/../views/all".static::$class.".php";
        }
        
    }
?> 