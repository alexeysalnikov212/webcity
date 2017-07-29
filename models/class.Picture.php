<?php
//Класс событие, наследуется от абстрактной модели
class Picture 
{
    protected static $table = "pictures";//для связи с базой извне
    protected static $class = "Picture";
    //свойства
    public $event_id;
    public $picture_url;
    
    public static function getPicture($event_id) // выводит место из таблицы
    {
        $db = new DB;
        return $db->queryAll("SELECT picture_url FROM ".self::$table." WHERE event_id = {$event_id}", self::$class);
    }    
}
?>