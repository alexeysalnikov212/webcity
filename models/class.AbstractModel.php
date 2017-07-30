<?php
// Абстрактная модель - ее наследуют классы Event и Organization
//имеет функции для связи с базой данных.
abstract class AbstractModel
{
    protected static $table;        //для связи с базой
    protected static $class;        //для связи с базой
    
    public static function getAll() // выводит все записи
    {
        $db = new DB; // соединяемся с базой данных
        return $db->queryAll("SELECT * FROM ".static::$table, static::$class); //выполняем запрос, заполняя данными из него новые объекты( функция fetch_object)
    }
    
    public static function getOne($id) // выводит одно, работает аналогично getAll
    {
        $db = new DB;
         return $db->queryOne("SELECT * FROM ".static::$table." WHERE id = {$id}", static::$class);
    }
    
    
    public static function getSome($key,$value) // отбирает по указанному критерию 
    {
        $db = new DB;
        $ob= new static::$class;   // Создаем объект нужного сласса
        $q="SELECT * FROM ".static::$table." WHERE {$key} = '{$value}'"; //формируем запрос
            return $db->queryAll($q, static::$class); //аналогично getAll
    }

    public static function create($keys,$values) // отбирает по указанному критерию 
    {
        $db = new DB;
        $ikeys = implode(", ",$keys);
        $ivalues = implode("', '",$values);
        $q="INSERT INTO `".static::$table. "` ({$ikeys}) VALUES ('{$ivalues}')";
        return $db->query1($q);
    }
    
     public static function change($keys,$ob) // отбирает по указанному критерию 
    {
        $db = new DB;
        foreach($keys as $key):{
        $q="UPDATE `".static::$table. "` SET  {$key} = '{$ob->$key}' WHERE id = '{$ob->id}'";
        $db->query1($q);
        }
         endforeach;
         return TRUE;
    }
    
    public static function delete($id) // выводит одно, работает аналогично getAll
    {
        
     //нужна проверка на доступ к данной функции
        
        $db = new DB;
        $statement= $db->queryOne("SELECT * FROM ".static::$table." WHERE id = {$id}", static::$class);
        if($statement!=NULL)
        {return $db->queryq("DELETE FROM ".static::$table." WHERE id = {$id}");}
        else return FALSE;
    }
}
