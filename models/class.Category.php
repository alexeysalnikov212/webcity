<?php
//Класс событие, наследуется от абстрактной модели
class Category
{
    protected static $table = "categories";//для связи с базой извне
    protected static $class = "Category";
    //свойства
    private $id;
    private $category_name;
    private $parent;
    
    public static function getCategoryName($id) // выводит место из таблицы
    {
        $db = new DB;
        return $db->queryOne("SELECT category_name FROM ".self::$table." WHERE id = '{$id}'", self::$class);
    }    
    
        public function __get($property) // отбирает для главной странички 6 новостей по дате 
    {
        $keys= array_keys(get_class_vars('Category'));
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
        $keys= array_keys(get_class_vars('Category'));
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