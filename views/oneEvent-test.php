<?php //пример вывода данных для одного события
?>

<!DOCTYPE html><html lang="ru">
<head><meta charset="utf-8">
     <title>Афиша Краматорска</title>
    </head>
    <body>
<h3><?= $item->name; ?></h3>
<h3><?= $item->place; ?></h3>
<h3><?= $item->price; ?></h3>
<h3><?= $item->time; ?></h3>
<h3><?= $item->description; ?></h3>
    </body>
</html>