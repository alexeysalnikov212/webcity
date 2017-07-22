<?php
//класс датабэйс - соединяется с базой данных, выполняет запросы
//обращаться так : 
//$db = new DB; 
//return $db->нужная функция от ДБ("Запрос",["класс, в который нужно преобразовать данные из запроса"]);

class DB
{ 
    public $link;
    
    public function __construct() // это основное для всех запросов
    {   
        $this->link = new PDO('mysql:dbname=webcity; host=localhost','root',''); // создаем подключение
        $this->link->exec("SET CHARSET utf8");                              // устанавливаем русский язык
    }
    
    public function query($query,$parameters=[])  // выбирает из таблицы все записи
    {
        $handle = $this->link->prepare($query);             //подготовка запроса
        $x= $handle->execute($parameters);                     //выполнение запроса
        //var_dump($handle->errorInfo());  // передача данных в форме объектов
        return $x;
    }

    public function query1($query,$parameters=[])  // для создания
    {
        $handle = $this->link->prepare($query);             //подготовка запроса
        $handle->execute($parameters);                     //выполнение запроса
        return $this->link->lastInsertId();
          // передача данных в форме объектов
    }
    public function queryAll($query,$class="stdClass",$parameters=[])  // выбирает из таблицы все записи
    {
        $handle = $this->link->prepare($query);             //подготовка запроса
        $handle->execute($parameters);                     //выполнение запроса
        return $handle->fetchAll(PDO::FETCH_CLASS,$class);  // передача данных в форме объектов
    }
     public function queryOne($query, $class = "stdClass",$parameters=[]) //выбирает из таблицы одну строку
    {
        return $this->queryAll($query,$class)[0];
    }
   }