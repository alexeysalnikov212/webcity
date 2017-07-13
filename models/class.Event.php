<?php
//Класс событие, наследуется от абстрактной модели
class Event extends AbstractModel
{
    
    protected static $table = "events";//для связи с базой из абстрактной модели
    protected static $class = "Event"; //для связи с базой из абстрактной модели
    
    
    //свойства
    public $id;
    public $name;
    public $place;
    public $time;
    public $price;
    public $description;
    
    //public $foto;    
   }
?>