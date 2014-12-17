<?php

define("TING", __DIR__);

require TING . '/system/app.php';
require TING . '/routes.php';

T::app()->view->set('url', 'http://localhost/shop');
T::app()->run();
