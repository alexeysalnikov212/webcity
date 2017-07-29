<?php
//Класс событие, наследуется от абстрактной модели
class Telephone 
{
    protected static $table = "telephone_numbers";//для связи с базой извне
    protected static $class = "Telephone";
    //свойства
    public $company_id;
    public $telephone;
    
    public static function getTelephone($company_id) // выводит место из таблицы
    {
        $db = new DB;
        return $db->queryAll("SELECT telephone FROM ".self::$table." WHERE company_id = {$company_id}", self::$class);
    }    
}
?>