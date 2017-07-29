<?php
//Класс организация, наследуется от абстрактной модели
class Company extends AbstractModel
{
    
    protected static $table = "companies";////для связи с базой из абстрактной модели
    protected static $class = "Company";//для связи с базой из абстрактной модели
    
    //свойства
    private $id;
    private $fullname;
    private $description;
    private $place_id;
    private $email;
    private $www;
    private $picture_url;
    private $events=[];
    private $place;
    private $telephones=[];
    
    public function __construct() // при создании компании создается массив событий этой компании, массив места и массив телефонов
    {
     $this->events = Event::getSome("company_id",$this->id);
     $this->place = Place::getPlace($this->place_id);
     $this->telephones = Telephone::getTelephone($this->id);    
    }

    public function __get($property) // получает свойства объекта 
    {
        $keys= array_keys(get_class_vars('Company'));
        foreach ($keys as $key):
            {
                switch ($property)
                {
                case $key:
                return $this->$key;
                }
            }
        endforeach;    
    }
     
    public function __set($property,$value) // устанавливает значения свойств объекта
    {
        $keys= array_keys(get_class_vars('Company'));
        foreach ($keys as $key):
            {
                switch ($property)
                {
                case $key:
                $this->$property = $value;
                }
            }
        endforeach;    
    }
    
    
    public function check() // проверка 
    {
        $check=TRUE;
          
        if($this->fullname===NULL or
            $this->description===NULL or
             $this->place_id===NULL)
          {$check=FALSE;}
        
            return $check;
    }
    
    public static function getMain() // отбирает для главной странички 9 компаний 
    {
        $db = new DB;   // Создаем объект нужного сласса
        $q="SELECT * FROM companies LIMIT 9;"; //формируем запрос 
            return $db->queryAll($q, "Company"); //возвращаем массив объектов
    }

}
