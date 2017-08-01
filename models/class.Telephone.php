<?php
//Класс событие, наследуется от абстрактной модели
class Telephone 
{
    protected static $table = "telephone_numbers";//для связи с базой извне
    protected static $class = "Telephone";
    //свойства
    private $company_id;
    private $telephone;
    
    public static function getTelephone($company_id) // выводит место из таблицы
    {
        $db = new DB;
        return $db->queryAll("SELECT telephone FROM ".self::$table." WHERE company_id = {$company_id}", self::$class);
    }    
    
        public function __get($property) // отбирает для главной странички 6 новостей по дате 
    {
        $keys= array_keys(get_class_vars('Telephone'));
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
        $keys= array_keys(get_class_vars('Telephone'));
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
          
        if($this->company_id===NULL or
            $this->telephone===NULL)
          {$check=FALSE;}
        
            return $check;
    }
}
?>