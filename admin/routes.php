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
    $users = array(
        array('id' => 1, 'email' => '23423@qq.com', 'name' => "庄三", 'state' => '普通', 'pass' => '2342342', 'phone' => '11323432', 'des' => '这是个描述'),
        array('id' => 2, 'email' => 'admin@qq.com', 'name' => "管理员", 'state' => '高级', 'pass' => 'ac3232', 'phone' => '182323432', 'des' => '这是个描述'),
    );

    $app->render('admin/yonghu.ptml', array('title' => '用户管理', 'users' => $users));
});
