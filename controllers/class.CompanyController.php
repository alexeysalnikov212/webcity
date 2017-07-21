<?php
/*
класс контроллер организаций наследуется от абстрактного
к нему обращается точка входа ( index.php), вызывая нужную функцию, 
сам контроллер обращается к моделям(models/class.Organization),получает оттуда нужную информацию
и подключает view для вывода в html
*/
    class CompanyController extends AController
    {
        protected static $class ="Company";
    }
?> 