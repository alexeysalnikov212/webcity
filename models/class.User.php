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

}
