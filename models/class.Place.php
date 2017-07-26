<?php
//Класс событие, наследуется от абстрактной модели
class Place 
{
    protected static $table = "places";//для связи с базой извне
    protected static $class = "Place";
    //свойства
    public $place_id;
    public $name;
    public $latitude;
    public $longitude;
    public $city;
    public $street;
    public $house;
    public $apartment;
    public $postalcode;    
 
    public static function getPlace($place_id) // выводит место из таблицы
    {
        $db = new DB;
        return $db->queryOne("SELECT * FROM ".self::$table." WHERE place_id = {$place_id}", self::$class);
    }    
}
