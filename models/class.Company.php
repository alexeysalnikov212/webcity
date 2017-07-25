<?php
//Класс организация, наследуется от абстрактной модели
class Company extends AbstractModel
{
    
    protected static $table = "companies";////для связи с базой из абстрактной модели
    protected static $class = "Company";//для связи с базой из абстрактной модели
    
    //свойства
   public $id;
    public $fullname;
    public $description;
    public $place_id;
    public $email;
    public $www;
    public $picture_url;
    private $events=[];
    private $place;
    
    public function __construct() // при создании компании создается массив событий этой компании
    {
     $event = new Event();
     $this->events = $event->getSome("company_id",$this->id);
     
     $place = new Place();
     $this->place = $place->getPlace($this->place_id);
        
    }

    public function getEvents() // отбирает для главной странички 6 новостей по дате 
    {
        return $this->events;
    }
    public function getPlace() // отбирает для главной странички 6 новостей по дате 
    {
        return $this->place;
    }
        
    public static function getMain() // отбирает для главной странички 6 новостей по дате 
    {
        $db = new DB;   // Создаем объект нужного сласса
        $q="SELECT * FROM companies LIMIT 9;"; //формируем запрос 
            return $db->queryAll($q, "Company"); //возвращаем массив объектов
    }

   }
?>