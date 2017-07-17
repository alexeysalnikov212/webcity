<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <link rel="icon" href="img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>MyDay</title>

  <!-- Bootstrap -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/colorbox.css" rel="stylesheet">

  <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
  <script type="text/javascript" src="js/moment-with-locales.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/bootstrap-datetimepicker.min.js"></script>
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css" />
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
 
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <!-- ... -->

</head>
<body>
<div id="container-fluid">
	<?php include ("main-blocks/navbar.php");?>
  <?php include ("main-blocks/header.php");?>
	<?php include ("main-blocks/events.php");?>
  <?php include ("main-blocks/carousel.php");?>
  <?php include ("main-blocks/footer.php");?>

</div>
           
         
         <script> $('#media').carousel({
    pause: true,
    interval: false,
  });
});
       </script> 
          <script>
              $('#datetimepicker').datetimepicker({ pickTime: false, language: 'ru' }
              );

            </script>

            <script>
              $(document).ready(function () {
                $(".iframe").colorbox({ iframe: true, width: "50%", height: "90%", speed: 500, transition: "fade", fadeOut: 500 });
              });
            </script>

            <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            <!-- Include all compiled plugins (below), or include individual files as needed -->
            <script src="js/jquery.colorbox-min.js"></script>
</body>

</html>

<!--?php
//точка входа


    // подключение конфигурации из псет7 для проверки зарегистрированный пользователь заходит или нет
    // (старт/проверка сессии)
    require(__DIR__."/../includes/config.php"); 

    //Рендерить надо в контроллерах. точка доступа в идеале должна обращаться только к контроллерам.
    //render("main.php", ["title" => "main"]);

? -->
<!-- ?php
//подключение автозагрузки классов (ищет в папках classes,models,controllers)
require_once __DIR__."/autoload.php";

//проверка на входящие параметры
$ctrl = isset($_GET['ctrl']) ? $_GET['ctrl'] : 'Event';  // Проверяем, указано ли в GET название контроллера
$act = isset($_GET['act']) ? $_GET['act'] : 'All';       // проверяем указано ли в GET действие (atcion)

//тут не заморачивайтесь:если в ГЕТ-параметрах что-то передается, то управление передается 
//указанному контроллеру, который в свою очередь, вызывает указанный в ГЕТ метод
//по умолчанию - вызывается ктрл EventController, и выполняется его метод actionAll
//это для того, чтоб в строке браузера при http://127.0.0.1/final/public/?ctrl=org&act=one&id=2
//вызывало контроллер "организации(org)", который вызывает метод (actionOne) и берет id организации. 

$className = $ctrl."Controller";   
$controller = new $className;
$method = 'action'.$act;
$controller-> $method();
? --> 

