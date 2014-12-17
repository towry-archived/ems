<?php

define('TING', dirname(__DIR__));
define('TING_ADMIN', __DIR__);

require_once TING . '/system/app.php';
require_once "routes.php";

T::app()->view->set('url', 'http://localhost/shop');
T::app()->run();
