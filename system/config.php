<?php

class C
{
   private static $config__ = array(
        'database' => array(
            'host' => 'localhost',
            'user' => 'root',
            'pass' => 'root',
            'db'   => 'shop',
        ),
    ); 

   public static function get($name)
   {
        if (isset(self::$config__[$name])) {
            return self::$config__[$name];
        } else {
            return array();
        }
   }
}
