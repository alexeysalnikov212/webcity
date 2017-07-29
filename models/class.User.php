<?php
//Класс событие, наследуется от абстрактной модели
class User extends AbstractModel
{
    protected static $table = "users";//для связи с базой из абстрактной модели
    protected static $class = "User"; //для связи с базой из абстрактной модели
        
    //свойства
    private $id;
    private $login;
    private $hash;
    private $email;
    private $picture_url;

    public function __get($property) // отбирает для главной странички 6 новостей по дате 
    {
        $keys= array_keys(get_class_vars('User'));
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
        $keys= array_keys(get_class_vars('User'));
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
    
    public function check($unic=0) // отбирает для главной странички 6 новостей по дате 
    {
     $check=TRUE;
        
         //проверка на уникальность
        
        if($unic===1)
        {
        $db = new DB;   // Создаем объект нужного сласса
         if($db->queryOne("SELECT * FROM users WHERE login = '{$this->login}'")!=NULL)
        {$check=FALSE;}
        }
        //проверка на нотНуль 
          if($this->login===NULL or
            $this->hash===NULL or
             $this->email===NULL)
          {$check=FALSE;}
            
            return $check;
    }

}
