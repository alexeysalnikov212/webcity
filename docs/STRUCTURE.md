Структура проекта
====================
```
.
|-- config
|   `-- db.config.json
|-- controllers
|   |-- class.AController.php
|   |-- class.CompanyController.php
|   |-- class.Controller.php
|   |-- class.EventController.php
|   |-- class.MainPageController.php
|   |-- class.RegisterController.php
|   `-- class.UserController.php
|-- database
|   |-- webcity_data.sql
|   |-- webcity_data_and_structure.sql
|   |-- webcity_structure.sql
|   `-- webcity_test.sql
|-- docs
|   `-- STRUCTURE.md
|-- includes
|   |-- autoload.php
|   |-- config.php
|   `-- helpers.php
|-- models
|   |-- class.AbstractModel.php
|   |-- class.Category.php
|   |-- class.Company.php
|   |-- class.DB.php
|   |-- class.Event.php
|   |-- class.Picture.php
|   |-- class.Place.php
|   |-- class.Telephone.php
|   `-- class.User.php
|-- public
|   |-- css
|   |   |-- images
|   |   |   |-- controls.png
|   |   |   `-- loading.gif
|   |   |-- img
|   |   |   |-- cal.gif
|   |   |   |-- next_mon.gif
|   |   |   |-- next_year.gif
|   |   |   |-- no_cal.gif
|   |   |   |-- prev_mon.gif
|   |   |   `-- prev_year.gif
|   |   |-- bootstrap-datetimepicker.min.css
|   |   |-- bootstrap-theme.css
|   |   |-- bootstrap-theme.css.map
|   |   |-- bootstrap-theme.min.css
|   |   |-- bootstrap.css
|   |   |-- bootstrap.css.map
|   |   |-- bootstrap.min.css
|   |   |-- colorbox.css
|   |   |-- login-form.css
|   |   |-- style.css
|   |   `-- styles.css
|   |-- fonts
|   |   |-- glyphicons-halflings-regular.eot
|   |   |-- glyphicons-halflings-regular.svg
|   |   |-- glyphicons-halflings-regular.ttf
|   |   |-- glyphicons-halflings-regular.woff
|   |   `-- glyphicons-halflings-regular.woff2
|   |-- img
|   |   |-- 1.jpg
|   |   |-- BG.jpg
|   |   |-- Velosipedisty.jpg
|   |   |-- button_in.png
|   |   |-- button_search.png
|   |   |-- favicon.ico
|   |   |-- head.png
|   |   |-- logo.png
|   |   |-- page3-img1.jpg
|   |   |-- page3-img4.jpg
|   |   |-- page3-img5.jpg
|   |   |-- page3-img6.jpg
|   |   |-- page3-img8.jpg
|   |   |-- page3-img9.jpg
|   |   `-- private-parties.jpg
|   |-- js
|   |   |-- bootstrap-datetimepicker.min.js
|   |   |-- bootstrap.js
|   |   |-- bootstrap.min.js
|   |   |-- jquery-1.11.1.min.js
|   |   |-- jquery.colorbox-min.js
|   |   |-- jquery.colorbox-ru.js
|   |   |-- map.js
|   |   |-- moment-with-locales.min.js
|   |   `-- scripts.js
|   |-- upload
|   `-- index.php
|-- views
|   |-- blocks
|   |   |-- carousel.php
|   |   |-- companies.php
|   |   |-- company.php
|   |   |-- event.php
|   |   |-- events.php
|   |   |-- footer.php
|   |   |-- login.php
|   |   |-- main.php
|   |   |-- navbar.php
|   |   |-- register.php
|   |   `-- user.php
|   |-- 404.php
|   |-- apology.php
|   |-- dump.php
|   `-- template.php
|-- CONTRIBUTORS.md
`-- LICENSE

```

:octocat: Ниже описаны варианты использования директорий и основных файлов.
-------------------------------------------------------------------
* _config_: Каталог конфигурационных файлов приложения.
    * _db.config.json_: Конфигурационный файл базы данных
* _controllers_: Каталог MVC - контроллеры.
* _database_: Файлы базы данных.
    * _webcity.sql_: Дамп базы данных (структура и данные).
* _docs_: Этот каталог содержит документацию, сгенерированную или написаную вручную.
* _includes_: В этом каталоге должны храниться все сторонние библиотеки, пользовательские библиотеки, конфиги и любой другой дополнительный код проекта.
    * _autoload.php_: Файл автозагрузки классов.
    * _config.php_: Файл настройки приложения.
    * _helpers.php_: Файл вспомогательных функций.
* _models_: Каталог MVC - модели.
* _public_: Этот каталог содержит все общедоступные файлы для приложения.
    * _css_: Все файлы css.
    * _fonts_: Все файлы шрифтов.
    * _img_: Все файлы изображений.
    * _js_: Все файлы javascript.
    * _upload_: Файлы загружаемые пользователем.
* _views_: Файлы составляющие макет.
    * _blocks_: Блоки подключаемые к шаблонам.
