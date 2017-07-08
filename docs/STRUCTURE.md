Structure of project
====================
```
.
|-- config
|   `-- db.config.json
|-- database
|-- docs
|   `-- STRUCTURE.md
|-- includes
|   |-- library
|   |   `-- WC.php
|   |-- config.php
|   `-- helpers.php
|-- public
|   |-- css
|   |   `-- styles.css
|   |-- fonts
|   |-- img
|   |-- js
|   |   `-- scripts.js
|   |-- index.php
|   |-- login.php
|   `-- logout.php
|-- views
|   |-- apology.php
|   |-- dump.php
|   |-- footer.php
|   |-- header.php
|   |-- login_form.php
|   `-- main.php
|-- CONTRIBUTORS.md
`-- LICENSE
```

:octocat: The following describes the use cases for each directory as listed.
-------------------------------------------------------------------
* _configs_: The application-wide configuration directory.
* _database_: Database schema.
* _docs_: This directory contains documentation, either generated or directly authored.
* _includes_: This directory should hold all 3rd party libraries, custom libraries, configs and any other code that acts as a resource in the project.
    * _library_: Central location for all custom and third party libraries.
* _public_: This directory contains all public files for the application.
    * _css_: All css files.
    * _fonts_: All fonts files.
    * _img_: All images files.
    * _js_: All javascript files.
* _views_: Reusable components that make up your layout.(templates)