<?php
//Класс событие, наследуется от абстрактной модели
class Place 
{
    protected static $table = "places";//для связи с базой извне
    protected static $class = "Place";
    
    //свойства
    private $place_id;
    private $name;
    private $latitude;
    private $longitude;
    private $city;
    private $street;
    private $house;
    private $apartment;
    private $postalcode;    
 
    public static function getPlace($place_id) // выводит место из таблицы
    {
        $db = new DB;
        return $db->queryOne("SELECT * FROM ".self::$table." WHERE place_id = {$place_id}", self::$class);
    }    
    
    public function __get($property) // получает значения объекта 
    {
        $keys= array_keys(get_class_vars('Place'));
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
        $keys= array_keys(get_class_vars('Place'));
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
          if($this->place_id===NULL or
            $this->name===NULL or
            $this->latitude===NULL or
            $this->longitude===NULL or
           $this->postalcode===NULL)
          {$check=FALSE;}
            
            return $check;
    }

}
