<?php
//точка входа
// подключение конфигурации из псет7 для проверки зарегистрированный пользователь заходит или нет
    // (старт/проверка сессии)
    require(__DIR__."/../includes/config.php"); 

    //Рендерить надо в контроллерах. точка доступа в идеале должна обращаться только к контроллерам.
    //render("main.php", ["title" => "main"]);

//подключение автозагрузки классов (ищет в папках classes,models,controllers)
require_once __DIR__."/../includes/autoload.php";

//проверка на входящие параметры
$ctrl = isset($_GET['ctrl']) ? $_GET['ctrl'] : 'MainPage';  // Проверяем, указано ли в GET название контроллера
$act = isset($_GET['act']) ? $_GET['act'] : 'Index';       // проверяем указано ли в GET действие (atcion)

//тут не заморачивайтесь:если в ГЕТ-параметрах что-то передается, то управление передается 
//указанному контроллеру, который в свою очередь, вызывает указанный в ГЕТ метод
//по умолчанию - вызывается ктрл EventController, и выполняется его метод actionAll
//это для того, чтоб в строке браузера при http://127.0.0.1/final/public/?ctrl=org&act=one&id=2
//вызывало контроллер "организации(org)", который вызывает метод (actionOne) и берет id организации. 

$className = $ctrl."Controller";
// Проверяем существование класса перед его использованием
if (class_exists($className)) {
    $controller = new $className;
}else
{
    render("404.php","404.php");
}

// Проверяем существование метода перед его использованием
$method = 'action'.$act;
if(method_exists($controller, $method))
{
    $controller-> $method();
}else
{
    render("404.php","404.php");
}

