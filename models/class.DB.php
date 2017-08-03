<?php
//класс датабэйс - соединяется с базой данных, выполняет запросы
//обращаться так : 
//$db = new DB; 
//return $db->нужная функция от ДБ("Запрос",["класс, в который нужно преобразовать данные из запроса"]);

class DB
{ 
    private static $config;
    private static $init_file_path = __DIR__ . "/../config/db.config.json";
    public $link;


    public function __construct() // это основное для всех запросов
    {   
        //self::init(__DIR__ . "/../config/db.config.json");
        $this->link = new PDO("mysql:dbname=id2441188_test;host=localhost",
                                "id2441188_test",
                                "12345"
        ); // создаем подключение
        $this->link->exec("SET CHARSET utf8");                              // устанавливаем русский язык
    }

    /**
    * Инициализация базы данных из JSON файла.
    */
        public static function init($path)
        {
            // убедится что еще не инициализированна
            if (isset(self::$config))
            {
                return;
            }

            // убедится что файл конфигурации доступен
            if (!is_file($path))
            {
                trigger_error("Could not find {$path}", E_USER_ERROR);
            }

            // чтение конфигурационного файла
            $contents = file_get_contents($path);
            if ($contents === false)
            {
                trigger_error("Could not read {$path}", E_USER_ERROR);
            }

            // декодирование конфигурационного файла
            $config = json_decode($contents, true);
            if (is_null($config))
            {
                trigger_error("Could not decode {$path}", E_USER_ERROR);
            }

            // сохранение конфигурации
            self::$config = $config;
        }

        /**
         * Executes SQL statement, possibly with parameters, returning
         * an array of all rows in result set or false on (non-fatal) error.
         */
        public static function query(/* $sql [, ... ] */)
        {
            // ensure library is initialized
            if (!isset(self::$config))
            {
                trigger_error("WC Library is not initialized", E_USER_ERROR);
            }

            // ensure database is configured
            if (!isset(self::$config["database"]))
            {
                trigger_error("Missing value for database", E_USER_ERROR);
            }
            foreach (["host", "name", "password", "username"] as $key)
            {
                if (!isset(self::$config["database"][$key]))
                {
                    trigger_error("Missing value for database.{$key}", E_USER_ERROR);
                }
            }

            // SQL statement
            $sql = func_get_arg(0);

            // parameters, if any
            $parameters = array_slice(func_get_args(), 1);

            // try to connect to database
            static $handle;
            if (!isset($handle))
            {
                try
                {
                    // connect to database
                    $handle = new PDO(
                        "mysql:dbname=" . self::$config["database"]["name"] . ";host=" . self::$config["database"]["host"],
                        self::$config["database"]["username"],
                        self::$config["database"]["password"]
                    );
                }
                catch (Exception $e)
                {
                    // trigger (big, orange) error
                    trigger_error($e->getMessage(), E_USER_ERROR);
                }
            }

            // ensure number of placeholders matches number of values
            // http://stackoverflow.com/a/22273749
            // https://eval.in/116177
            $pattern = "
                /(?:
                '[^'\\\\]*(?:(?:\\\\.|'')[^'\\\\]*)*'
                | \"[^\"\\\\]*(?:(?:\\\\.|\"\")[^\"\\\\]*)*\"
                | `[^`\\\\]*(?:(?:\\\\.|``)[^`\\\\]*)*`
                )(*SKIP)(*F)| \?
                /x
            ";
            preg_match_all($pattern, $sql, $matches);
            if (count($matches[0]) < count($parameters))
            {
                trigger_error("Too few placeholders in query", E_USER_ERROR);
            }
            else if (count($matches[0]) > count($parameters))
            {
                trigger_error("Too many placeholders in query", E_USER_ERROR);
            }

            // replace placeholders with quoted, escaped strings
            $patterns = [];
            $replacements = [];
            for ($i = 0, $n = count($parameters); $i < $n; $i++)
            {
                array_push($patterns, $pattern);
                array_push($replacements, preg_quote($handle->quote($parameters[$i])));
            }
            $query = preg_replace($patterns, $replacements, $sql, 1);

            // execute query
            $statement = $handle->query($query);
            if ($statement === false)
            {
                trigger_error($handle->errorInfo()[2], E_USER_ERROR);
            }
   
            // if query was SELECT
            // http://stackoverflow.com/a/19794473/5156190
            if ($statement->columnCount() > 0)
            {
                // return result set's rows
                return $statement->fetchAll(PDO::FETCH_ASSOC);
            }

            // if query was DELETE, INSERT, or UPDATE
            else
            {
                // return number of rows affected
                return $statement->rowCount();
            }
        }
    
     public function queryq($query,$parameters=[])  // выбирает из таблицы все записи
    {
        $handle = $this->link->prepare($query);             //подготовка запроса
        $x= $handle->execute($parameters);                     //выполнение запроса
        //var_dump($handle->errorInfo());  // передача данных в форме объектов
        return $x;
    } 

     public function query1($query,$parameters=[])  // для создания
    {
        $handle = $this->link->prepare($query);             //подготовка запроса
        $handle->execute($parameters);                     //выполнение запроса
        //var_dump($handle->errorInfo());
         return $this->link->lastInsertId();
          // передача данных в форме объектов
    } 
    public function queryAll($query,$class="stdClass",$parameters=[])  // выбирает из таблицы все записи
    {
        $handle = $this->link->prepare($query);             //подготовка запроса
        $handle->execute($parameters);                     //выполнение запроса
        return $handle->fetchAll(PDO::FETCH_CLASS,$class);  // передача данных в форме объектов
    }
     public function queryOne($query, $class = "stdClass",$parameters=[]) //выбирает из таблицы одну строку
    {
       if ($this->queryAll($query,$class)!=NULL)
       {return $this->queryAll($query,$class)[0];}
    }
   }
