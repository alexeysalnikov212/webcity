<?php
//Класс организация, наследуется от абстрактной модели
class Organization extends AbstractModel
{
    
    protected static $table = "organizations";////для связи с базой из абстрактной модели
    protected static $class = "Organization";//для связи с базой из абстрактной модели
    
    //свойства
    public $id;
    public $name;
    public $description;
}
?>