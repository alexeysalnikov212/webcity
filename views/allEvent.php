<?php //пример вывода всех событий
// сюда передается массив объектов событий(items[]). для доступа к каждому можно цикл форич.
// событие имеет свойства : 
//name,description,price,date,ending,category_id,place_id,company_id,pictures[].
?>


<!DOCTYPE html><html lang="ru">
<head><meta charset="utf-8">
     <title>Афиша Краматорска</title>
    </head>
    <body>
<table border = "5">
   
 <?php foreach($items as $itemx):?>
<td>
<h3><?= $itemx->name; ?></h3>
<h3><?= $itemx->place; ?></h3>
<h3><?= $itemx->price; ?></h3>
<h3><?= $itemx->time; ?></h3>
</td>    
        <?php endforeach?>
    </table>
    </body>
</html>