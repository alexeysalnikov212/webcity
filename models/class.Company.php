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
    /*public $events= [];
     
    public function __construct() // при создании компании создается массив событий этой компании
    {
     $ob = new Event();
     $this->events = $ob->getSome("company_id",$this->id);
    }
    */
    public static function getMain() // отбирает для главной странички 6 новостей по дате 
    {
        $db = new DB;   // Создаем объект нужного сласса
        $q="SELECT * FROM companies LIMIT 9;"; //формируем запрос 
            return $db->queryAll($q, "Company"); //возвращаем массив объектов
    }

   }
?>