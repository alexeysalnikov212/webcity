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
    private $pictures=[];    
    private $place;
    
    public function __construct() // при создании компании создается массив событий этой компании
    {
    //возможно, нужно сделать новый класс Pictures
     $db = new DB;
     $this->pictures = $db->queryOne("SELECT * FROM pictures WHERE event_id = {$this->id}");
     
     $places = new Place();
     $this->place = $places->getPlace($this->place_id);
        
    }

    public function getPictures() // отбирает для главной странички 6 новостей по дате 
    {
        return $this->events;
    }
    public function getPlace() // отбирает для главной странички 6 новостей по дате 
    {
        return $this->place;
    }
//это надо будет переделать в абстракнтый класс
//изменить Ордер БАй с price на date
public function getMain() // отбирает для главной странички 6 новостей по дате 
    {
        $db = new DB;   // Создаем объект нужного сласса
        $q="SELECT * FROM events ORDER BY date_start LIMIT 6"; //формируем запрос 
            return $db->queryAll($q, "Event"); //возвращаем массив объектов
    }
}
