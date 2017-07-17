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
            <a class="navbar-brand" href="index.php">
              <img src="img/logo.png" height="60" alt="">
            </a>
          </div>
          <div class="collapse navbar-collapse" id="navbar-main">
            <!-- Содержимое основной части -->
            <ol class="nav navbar-nav">
              <div class="col-md-6">
                <div class="form-group">
                  <select class="form-control" name="cat">
                  <option disabled selected value="">Категории</option>
                  <option>Все категории</option>
                  <option>Для детей</option>
                  <option>Концерты</option>
                  <option>Кино</option>
                  <option>Мастер-классы</option>
                  <option>Фестивали</option>
                  <option>18+</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6">

                <div class="form-group">
                  <div class="input-group date" id="datetimepicker">
                    <input type="text" class="form-control"/>
                    <span class="input-group-addon">
                     <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                  </div>
                </div>

              </div>
            </ol>
            <ol class="nav navbar-nav navbar-right">
              <div class="button">
                <img src="img/button_search.png" height="50" alt=""></div>
                         
					    <div class="button" data-toggle="modal" data-target="#myModal"><img src="img/button_in.png" height="50" alt=""></div>
              <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Авторизация на сайте</h4>
      </div>
      <div class="modal-body">
        	<?php include("templates/login_form.php");?>
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
