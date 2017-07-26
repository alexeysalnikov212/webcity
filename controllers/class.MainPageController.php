<?php
/*
класс контроллер для главной странички
соединяется с базой и выводит данные для главной странички
*/
    class MainPageController
    {
        public function actionMainPage() // берет из баз данные для показа главной странички
                                    //и передает их вьюшке Main
        {
            $obEvent = new Event; //создаем объект 
            $obCompany = new Company;
         
            
            $events = $obEvent->getMain(); // вызываем метод этого объкта 
            $companies = $obCompany->getMain();//и записываем данные в переменные
            
            include __DIR__."/../views/main.php"; // подключаем вьюшку
            
            //теперь во вьюшке можно будет обращаться к этим переменным как к массиву объектов Event и Company соответственно
        }
    }
