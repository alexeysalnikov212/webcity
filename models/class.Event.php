<?php
//Класс событие, наследуется от абстрактной модели
class Event extends AbstractModel
{
    protected static $table = "events";//для связи с базой из абстрактной модели
    protected static $class = "Event"; //для связи с базой из абстрактной модели
        
    //свойства
    private $id;
    private $title;
    private $description;
    private $category_id;
    private $date_start;
    private $date_end;
    private $place_id;
    private $company_id;
    private $pictures=[];    
    private $place;
    private $company_name;
    
    public function __construct() // при создании компании создается массив событий этой компании
    {
    //возможно, нужно сделать новый класс Pictures
     $this->place = Place::getPlace($this->place_id);
     $this->pictures = Picture::getPicture($this->id);
     $this->company_name = Company::getName($this->company_id);
    }

    public function __get($property) // получает свойства объекта 
    {
        $keys= array_keys(get_class_vars('Event'));
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
        $keys= array_keys(get_class_vars('Event'));
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

    public function check() // проверка значений для вставки 
    {
     $check=TRUE;
        
          //проверка на нотНуль 
          if($this->title===NULL or
            $this->description===NULL or
            $this->category_id===NULL or
            $this->date_start===NULL or
            $this->date_end===NULL or
             $this->place_id===NULL or
            $this->company_id===NULL)
          {$check=FALSE;}
            
            return $check;
    }
    
    public static function getMain() // отбирает для главной странички 8 новостей по дате
    {
        $db = new DB;   // Создаем объект нужного сласса
        $q="SELECT * FROM events ORDER BY date_start LIMIT 8"; //формируем запрос 
            return $db->queryAll($q, "Event"); //возвращаем массив объектов
    }
}
