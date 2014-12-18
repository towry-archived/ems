<?php

require_once TING . '/system/app.php';

$app = T::app();
$app->setName('admin');

$app->get('/', function () use($app) {
    $app->render('admin.ptml', array('title'=>"后台管理"));
});

$app->get('/yonghu', function () use($app) {
    /*
     * $users 是个伪数据 
     * 真正的数据应该从数据库中得到
     */
    $db = T::db();
    $sql = 'SELECT * from users LIMIT 0, 30';
    $users = mysql_query($sql);

    $app->render('admin/yonghu.ptml', array('title' => '用户管理', 'users' => $users));
});
