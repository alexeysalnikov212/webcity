<?php
//Класс событие, наследуется от абстрактной модели
class User extends AbstractModel
{
    protected static $table = "users";//для связи с базой из абстрактной модели
    protected static $class = "User"; //для связи с базой из абстрактной модели
        
    //свойства
    public $id;
    public $login;
    public $hash;
    public $email;
    public $picture_url;
}
