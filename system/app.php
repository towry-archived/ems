<?php if (!defined("TING")) die("Error");

require_once TING . '/vendor/Slim/Slim.php';

\Slim\Slim::registerAutoloader();

class T
{
    private static $slim;

    public static function app($config = array())
    {
        $config['debug'] = true;
        $config['templates.path'] = TING . '/views';
        
        if (!isset(self::$slim)) {
            self::$slim = new \Slim\Slim($config);
        } 

        return self::$slim;
    }
}

