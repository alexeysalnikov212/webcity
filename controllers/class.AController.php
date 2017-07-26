<?php
/*
класс Абстрактный контроллер
к нему обращается точка входа ( index.php), вызывая нужную функцию, 
сам контроллер обращается к моделям(models/class.Event),получает оттуда нужную информацию
и подключает view для вывода в html
*/
    class AController
    {
        public function actionAll() // берет из базы все записи и записывает их в массив объектов item 
            // и вызывает view для показа
        {
            $ob = new static::$class; //создаем объект дочернего класса
            $items = $ob::getAll(); // вызываем метод этого объкта

            $view = "events";
            $title = "Все события";
            if(static::$class === "Company") {
                $view = "companies";
                $title = "Все компании";
            }

            $values = [
                $view => $items,
                "title" => $title,
            ];
            render("template.php", $view.'.php',$values);
        }
        public function actionOne() // показывает одно событие/организацию по id работает аналогично actionAll
        {
            $ob = new static::$class; 
            $id = $_GET['id']; //TODO:проверка если нету id
            $item = $ob::getOne($id);

            $view = "event";
            $title = "Событие";
            if(static::$class === "Company") {
                $view = "company";
                $title = "Компания";
            }
            $values = [
                $view => $item,
                "title" => $title,
            ];
            render("template.php", $view.'.php',$values);
        }
        
        public function actionSome() //отбирает и показывает события/организации по определенному критерию 
        {
            $ob = new static::$class;
            $key = $_GET['key'];        //получаем данные из строки
            $value = $_GET['value'];
            $items = $ob::getSome($key,$value);

            $view = "events";
            $title = "События";
            if(static::$class === "Company") {
                $view = "companies";
                $title = "Компании";
            }

            $values = [
                $view => $items,
                "title" => $title,
            ];
            render("template.php", $view.'.php',$values);
        }
        
        public function actionCreate() //создает новую строку в базе
        {
            $ob = new static::$class;
            $keys= array_keys(get_class_vars(static::$class)); // получаем массив значений свойств объекта (name,description,и т.д.)
            $values=[];         //создаем массив значений, куда передадим все из $_POST
            foreach ($keys as $key)         //заполняем данные объекта
            {
                if (isset($_POST[$key]))
                {
                    $ob->$key=$_POST[$key];
                    $values[] = $_POST[$key];
                }
                else $values[]=NULL;        //если данных нет, пишем нул
            }
            $id = $ob->create($keys,$values);   //вызываем функцию криэйт
            $item = $ob::getOne($id);           //получаем созданную запись
            include __DIR__."/../views/one".static::$class.".php";
        }
        
        
// В РАЗРАБОТКЕ        
        public function actionDelete() // удаляет запись
        {
            $ob = new static::$class; 
            $id = $_GET['id'];
            $item = $ob::deleteOne($id);
            include __DIR__."/../views/one".static::$class.".php";
        }

// В РАЗРАБОТКЕ
        public function actionChange() //изменяет строку в базе 
        {
            $ob = new static::$class;
            $keys= array_keys(get_class_vars(static::$class)); // получаем массив значений свойств объекта 
                                                    //(name,description,и т.д.)
            $values=[];                             //создаем массив значений, куда передадим все из $_POST
            foreach ($keys as $key)                 //заполняем данные объекта
            {
                if (isset($_GET[$key]))
                {
                    $ob->$key=$_GET[$key];
                    $values[] = $_GET[$key];
                }
                else $values[]=NULL;
             //  $array[] = $key->$_GET[$key];
            }
           // var_dump($ob);
            $item = $ob->create($keys,$values);
            
            include __DIR__."/../views/one".static::$class.".php";
        }
    }
