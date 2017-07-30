<div id="navbar">
    <nav class="navbar navbar-inverse navbar-fixed-top">
     <div class="container-fluid">
          <!-- Классы navbar и navbar-default (базовые классы меню) -->
      <nav class="navbar navbar-inverse">
            <!-- Контейнер (определяет ширину Navbar) -->
          <div class="container-fluid">
              <!-- Заголовок -->
              <div class="navbar-header">
                <!-- Кнопка «Гамбургер» отображается только в мобильном виде (предназначена для открытия основного содержимого Navbar) -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-main" aria-expanded="false">
                  <span class=sr-only>Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <!-- Бренд или название сайта (отображается в левой части меню) -->
                <div class="col-md-6">
                  <a class="navbar-brand" href="index.php">            
                  <img src="img/logo.png" class="img-responsive" alt="">
                  </a>
                </div>
              </div>
            <div class="collapse navbar-collapse" id="navbar-main">
                <!-- Содержимое основной части -->
                <ol class="nav navbar-nav">         
                  <div class="col-xs-6 col-md-4"> 
                     <div class="form-group">   
                       <div class="btn-group">
                            <button type="button" class="btn btn-default">Категории</button>
                            <button type="button" data-toggle="dropdown" class="btn btn-default dropdown-toggle"><span class="caret"></span></button>
                              <ul class="dropdown-menu">
                                  <?php $href="?ctrl=event&act=some&key=category_id&value="; ?>
                                  
                                  <li><a href="?ctrl=event&act=all">Все категории</a></li>
                                  <li><a href="<?=$href."2" ?>">Кино</a></li>
                                  <li><a href="<?=$href."3" ?>">Концерты</a></li>
                                  <li><a href="<?=$href."4" ?>">Скидки и рекламные акции</a></li>
                                  <li><a href="<?=$href."5" ?>">Выставки</a></li>
                                  <li><a href="<?=$href."6" ?>">Для детей</a></li>
                                  <li><a href="<?=$href."7" ?>">Театр</a></li>
                                  <li><a href="<?=$href."8" ?>">Спорт</a></li>
                                  <li><a href="<?=$href."9" ?>">Семинары</a></li>
                              </ul>
                      </div>
                    </div>
                  </div>
                  <div class="col-xs-6 col-md-4">
                    <div class="form-group date">
                      <div class="input-group date" id="datetimepicker">
                        <input type="text" class="form-control" readonly="readonly">
                        <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="col-xs-6 col-md-4">
                    <div class="form-group date">
                      <div class="input-group date" id="search-text" >
                        <input type="text" class="form-control" placeholder="Поиск по названию">
                        <span class="input-group-addon">
                        <span class="glyphicon glyphicon-ok"></span>
                        </span>
                      </div>
                    </div>
                  </div>
                </ol>
                <ol class="nav navbar-nav navbar-right">
                  <div class="button-nav">
                    <button type="button" class="btn btn-success btn-lg" aria-label="Поиск">
                    <span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                  </div>                 
                    <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-primary btn-lg" aria-label="Вход"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span></button>
                     <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                       <div class="modal-content">
                         <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <h4 class="modal-title" id="myModalLabel">Авторизация на сайте</h4>
                         </div>
                         <div class="modal-body">
                           <?php include("../views/blocks/login.php");?>
                         </div>
                         <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                         </div>
                       </div>
                      </div>
                     </div>
                </ol>
            </div>                     
          </div>
      </nav>
     </div>
    </nav>
</div>