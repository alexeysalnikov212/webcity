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
    private $telephones=[];
    
    public function __construct() // при создании компании создается массив событий этой компании
    {
     $this->events = Event::getSome("company_id",$this->id);
     $this->place = Place::getPlace($this->place_id);
     $this->telephones = Telephone::getTelephone($this->id);    
    }

    public function getPrivate() // отбирает для главной странички 6 новостей по дате 
    {
        $private=array('events' => $this->events, 'place' => $this->place, 'telephones'=>$this->telephones);
        return $private;
    }
        
    public static function getMain() // отбирает для главной странички 6 новостей по дате 
    {
        $db = new DB;   // Создаем объект нужного сласса
        $q="SELECT * FROM companies LIMIT 9;"; //формируем запрос 
            return $db->queryAll($q, "Company"); //возвращаем массив объектов
    }

   }
