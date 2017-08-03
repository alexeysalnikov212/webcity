<?php
//Класс событие, наследуется от абстрактной модели
class Picture 
{
    protected static $table = "pictures";//для связи с базой извне
    protected static $class = "Picture";
    //свойства
    private $event_id;
    private $picture_url;
    
    public static function getPicture($event_id) // выводит место из таблицы
    {
        $db = new DB;
        return $db->queryAll("SELECT picture_url FROM ".self::$table." WHERE event_id = {$event_id}", self::$class);
    }
    
    public function __get($property) // отбирает для главной странички 6 новостей по дате 
    {
        $keys= array_keys(get_class_vars('Picture'));
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
        $keys= array_keys(get_class_vars('Picture'));
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
          
        if($this->event_id===NULL or
            $this->picture_url===NULL)
          {$check=FALSE;}
        
            return $check;
    }
}
?>