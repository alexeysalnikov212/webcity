<?php
//Класс событие, наследуется от абстрактной модели
class Event extends AbstractModel
{
    protected static $table = "events";//для связи с базой из абстрактной модели
    protected static $class = "Event"; //для связи с базой из абстрактной модели
        
    //свойства
    public $id;
    public $title;
    public $description;
    public $category_id;
    public $date_start;
    public $date_end;
    public $place_id;
    public $company_id;
    //public $foto;    

//это надо будет переделать в абстракнтый класс
//изменить Ордер БАй с price на date
public function getMain() // отбирает для главной странички 6 новостей по дате 
    {
        $db = new DB;   // Создаем объект нужного сласса
        $q="SELECT * FROM events ORDER BY date_start LIMIT 6"; //формируем запрос 
            return $db->queryAll($q, "Event"); //возвращаем массив объектов
    }
}
?>