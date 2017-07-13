<?php
//класс контроллер организаций
//к нему обращается точка входа ( index.php), вызывая нужную функцию, 
//сам контроллер обращается к моделям(models/class.Organization),получает оттуда нужную информацию
//и подключает view для вывода в html
    class OrgController
    {
        public function actionAll() // берет из базы все организации и записывает их в массив объектов item 
            // и вызывает view для показа
        {
            $item = Organization::getAll();
            include __DIR__."/../views/allOrganization.php";
        }
        public function actionOne() // показывает одну организацию
        {
            $id = $_GET['id'];
            $item = Organization::getOne($id);
            include __DIR__."/../views/oneOrganization.php";
        }
    }
?> 