<?php
/*
класс контроллер событий наследуется от абстрактного
к нему обращается точка входа ( index.php), вызывая нужную функцию, 
сам контроллер обращается к моделям(models/class.Event),получает оттуда нужную информацию
и подключает view для вывода в html
*/
class EventController extends AController
    {
        protected static $class = "Event";
        
    }
?> 