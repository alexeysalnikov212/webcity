<?php
/*
класс Абстрактный контроллер
к нему обращается точка входа ( index.php), вызывая нужную функцию, 
сам контроллер обращается к моделям(models/class.Event),получает оттуда нужную информацию
и подключает view для вывода в html
*/


    class AController
    {
        public $allCategories;
        
        public function __construct() // при создании компании создается массив событий этой компании
    {
     $this->allCategories = Category::getAllCategory();
    }

        /**
         * Действие по умолчанию
         */
        public function actionIndex()
        {
            $this->actionAll();
        }

        public function actionAll() // берет из базы все записи и записывает их в массив объектов item 
            // и вызывает view для показа
        {
            $ob = static::$class; //создаем объект дочернего класса
            $items = $ob::getAll(); // вызываем метод этого объкта

            $view = static::$views;
            $title = static::$titles;

            // получаем все категории для navbar
            $values = [
                $view => $items,
                "categories" => $this->allCategories,
                "title" => $title,
            ];
            render("template.php", $view.'.php',$values);
        }
        public function actionOne() // показывает одно событие/организацию по id работает аналогично actionAll
        {
            $ob = new static::$class; 
            $id = $_GET['id']; //TODO:проверка если нету id
            $item = $ob::getOne($id);
            
           $view = static::$view;
            $title = static::$title;

            $values = [
                $view => $item,
                "categories" => $this->allCategories,
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

            $view = static::$views;
            $title = static::$titles;
            
            $values = [
                $view => $items,
                "categories" => $this->allCategories,
                "title" => "События",
            ];
            render("template.php", $view.'.php',$values);
        }
        
        public function actionCreate() //создает новую строку в базе
        {
            $ob = new static::$class;
            $values=[];
            $keys=[];
            foreach ($_POST as $key=>$value):
            {
                $ob->$key=$value;
                if($ob->$key!=NULL)
                {
                    $keys[]=$key;
                    $values[]=$value;
                }
            }
            endforeach;
            
            if(!$ob->check(1)) // 1 = +проверка на уникальность
             {
                 echo ("Не указаны обязательные поля или такое уже существует");
             }
                    
            else
            {
            $id = $ob->create($keys,$values);   //вызываем функцию криэйт
            $item = $ob::getOne($id);           //получаем созданную запись
            
            $view = static::$view;
            $title = static::$title;

            $values = [
                $view => $item,
                "categories" => $this->allCategories,
                "title" => $title,
            ];

            render("template.php", $view.'.php',$values);
            
             }
            
        }
        
                
        public function actionDelete() // удаляет запись
        {
            $ob = new static::$class; 
            $id = $_GET['id']; //TODO:проверка если нету id
            if($ob::delete($id))
            {echo "Удалено";}
            else
            {echo "Не удалено, что-то пошло  не так";}
            //render("template.php", 'delete.php');
                }

    
        public function actionChange() //изменяет строку в базе 
        {
            $ob = new static::$class;
            $keys=[];
            foreach ($_POST as $key=>$value):
            {
                $ob->$key=$value;
                if($ob->$key!=NULL)
                {
                    $keys[]=$key;
                }
            }
            endforeach;
            
            if(!$ob->check()) //
             {
                 echo ("Не указаны обязательные поля или такое уже существует");
             }
                    
            else if(!$ob->change($keys,$ob))//вызываем функцию чэнджь
            {
                echo ("не изменилось");
            }
            
            else
            {
                $item = $ob::getOne($ob->id);           //получаем созданную запись
            
            $view = static::$view;
            $title = static::$title;

                $values = [
                $view => $item,
                    "categories" => $this->allCategories,
                "title" => $title,
            ];

            render("template.php", $view.'.php',$values);
            }
        }
}