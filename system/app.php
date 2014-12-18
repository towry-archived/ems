<?php if (!defined("TING")) die("Error");

require_once TING . '/vendor/Slim/Slim.php';
require_once TING . '/system/config.php';
require_once TING . '/system/common.php';

\Slim\Slim::registerAutoloader();

class T
{
    private static $slim;
    private static $db;


    public static function app($config = array())
    {
        $config['debug'] = true;
        $config['templates.path'] = TING . '/views';
        
        if (!isset(self::$slim)) {
            self::$slim = new \Slim\Slim($config);
            self::addHooks();
        } 

        return self::$slim;
    }

    public static function db($config = array())
    {
       if (isset(self::$db)) {
            return self::$db;
       } else {
            $defaults = C::get('database');
            array_merge($defaults, $config);

            $link = mysql_connect($defaults['host'], $defaults['user'], $defaults['pass']);
            if (!$link) {
                throw new Exception("Error Connecting Mysql", 1);
            }
            if (!mysql_select_db($defaults['db'])) {
                throw new Exception("Error Selecting db", 1);
            }

            self::$db = $link;
       }

       return self::$db;
    }
    
    public static function closedb()
    {
        if (isset(self::$db) && !is_null(self::$db)) {
            mysql_close(self::$db);
        }
    }

    public static function addHooks()
    {
        self::$slim->hook('slim.after', function () {
            self::closedb();
        });
    }
}

