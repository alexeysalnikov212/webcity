<?php
//Класс событие, наследуется от абстрактной модели
class Event extends AbstractModel
{
    protected static $table = "events";//для связи с базой из абстрактной модели
    protected static $class = "Event"; //для связи с базой из абстрактной модели
        
    //свойства
    public $id;
    public $name;
    public $place;
    public $time;
    public $price;
    public $description;
    
    //public $foto;    

//это надо будет переделать в абстракнтый класс
//изменить Ордер БАй с price на date
public function getMain() // отбирает для главной странички 6 новостей по дате 
    {
        $db = new DB;   // Создаем объект нужного сласса
        $q="SELECT * FROM events ORDER BY price LIMIT 6"; //формируем запрос 
            return $db->queryAll($q, "Event"); //возвращаем массив объектов
    }
}
?>