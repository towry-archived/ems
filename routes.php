<?php if (!defined("TING")) die("Error");

require_once TING . "/system/app.php";

$app = T::app();

$app->get('/', function() use($app) {
    $app->render('home.ptml', array('title'=>'Home'));
});
