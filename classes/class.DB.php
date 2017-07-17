<?php
//класс датабэйс - соединяется с базой данных, выполняет запросы
//обращаться так : 
//$db = new DB; 
//return $db->нужная функция от ДБ("Запрос",["класс, в который нужно преобразовать данные из запроса"]);

class DB
{ 
    public $link;
    
    public function __construct()
    {   
        $this->link = new PDO('mysql:dbname=1; host=localhost','root','');
        $this->link->exec("SET CHARSET utf8");
    }
    
    public function queryAll($query,$class="stdClass",$parameters=[])
    {
        $handle = $this->link->prepare($query);
        $handle->execute($parameters);
        return $handle->fetchAll(PDO::FETCH_CLASS,$class);
    }
     public function queryOne($query, $class = "stdClass",$parameters=[])
    {
        return $this->queryAll($query,$class)[0];
    }
   
    
    /*
    //Функция связывается с базой данных, возвращает весь спискок и конвертирует данные в нужный класс
    //т.е. на выходе получается массив указанных объектов (например массив объектов Event)
    public function queryAll($query, $class)
    {
        $link = mysqli_connect('localhost','root','','1');
        mysqli_query($link,"SET CHARSET utf8");
        
        $result = mysqli_query($link,$query);
        if (false === $result)
        {return false;}
        
        $res = [];
        while ($row = mysqli_fetch_object($result, $class))
        {$res[] = $row;}
        
        return $res;
    }
    
    //Функция связывается с базой данных, возвращает первую строку и конвертирует ее в нужный класс
    //т.е. на выходе получается один объект (например объект класса Event)
     public function queryOne($query, $class = "stdClass")
    {
        return $this->queryAll($query,$class)[0];
    }
    public function queryInsert($query)
    {
        $link = mysqli_connect('localhost','root','','1');
        mysqli_query($link,"SET CHARSET utf8");
        
        $result = mysqli_query($link,$query);
        if (false === $result)
        {return false;}
        
        $res = [];
        while ($row = mysqli_fetch_object($result, $class))
        {$res[] = $row;}
        
        return $res;
    }*/
}
?>