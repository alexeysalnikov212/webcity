<?php
//Класс организация, наследуется от абстрактной модели
class Company extends AbstractModel
{
    
    protected static $table = "companies";////для связи с базой из абстрактной модели
    protected static $class = "Company";//для связи с базой из абстрактной модели
    
    //свойства
    public $id;
    public $name;
    public $description;
    public $picture;
    public $events= array();
     
   /*  public static function newEvent() // создает новое событие 
    {
        $db = new DB;
        $ob= new static::$class;   // Создаем объект нужного сласса
        $q="INSERT INTO events (name, description, category_id, date, ending, place_id,company_id,pictures_id)VALUES ({$_POST["name"]},{$_POST["description"]},{$_POST["catogory_id"]},{$_POST["date"]},{$_POST["ending"]},{$_POST["place_id"], {$id},{$_POST["pictures_id"]},; //формируем запрос
            return $db->queryAll($q, static::$class); // 
    }*/
}
?>