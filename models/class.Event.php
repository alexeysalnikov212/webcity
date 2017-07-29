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
    
    public function __construct() // при создании компании создается массив событий этой компании
    {
    //возможно, нужно сделать новый класс Pictures
     $this->place = Place::getPlace($this->place_id);
     $this->pictures = Picture::getPicture($this->id);
    }

    public function __get($property) // отбирает для главной странички 6 новостей по дате 
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
    
    
    public function getData() // отбирает для главной странички 6 новостей по дате 
    {
        $data=[
            'place' => $this->place,
            'pictures' => $this->pictures
            ];
        return $data;
    }
    
public function check() // отбирает для главной странички 6 новостей по дате 
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
    
    
//это надо будет переделать в абстракнтый класс
//изменить Ордер БАй с price на date
public static function getMain() // отбирает для главной странички 6 новостей по дате
    {
        $db = new DB;   // Создаем объект нужного сласса
        $q="SELECT * FROM events ORDER BY date_start LIMIT 8"; //формируем запрос 
            return $db->queryAll($q, "Event"); //возвращаем массив объектов
    }
}
