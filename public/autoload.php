<?php
//этот файл загружает новые классы, встречающиеся в программе. Добавляется только в индекс.пхп и дальше автоматически добавляет неизвестные ранее классы.

 function __autoload($class)
{
    
    if (file_exists(__DIR__."/../models/class.".$class.".php"))
    {require_once __DIR__."/../models/class.".$class.".php";}
    
    else if (file_exists(__DIR__."/../controllers/class.".$class.".php"))
    {require_once __DIR__."/../controllers/class.".$class.".php";}
    
    else if (file_exists(__DIR__."/../classes/class.".$class.".php"))
    {require_once __DIR__."/../classes/class.".$class.".php";}
}
