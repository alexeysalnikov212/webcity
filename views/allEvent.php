<?php //пример вывода всех событий
?>


<!DOCTYPE html><html lang="ru">
<head><meta charset="utf-8">
     <title>Афиша Краматорска</title>
    </head>
    <body>
<table border = "5">
    
 <?php foreach($item as $itemx):?>
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