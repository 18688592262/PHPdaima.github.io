<?php


define('IN', 'admin.php');


session_start();
include('functions.php');

/*
入口文件：
1 项目初始化
check_login()
2 加载相应的功能模块
*/
// check_login()
//接受请求 默认是mian 页面
//isset :判断一个变量是否存在 有可能出现值为空的情况 所以这里应该使用！empty更合适
$action = !empty($_GET['a']) ? $_GET['a'] : 'main';
//3 登录权限验证
$noNeedLogin = ['login', 'dologin'];  //不需要验证登录的地址
if( !in_array($action, $noNeedLogin) ){

    check_login();
}

include('./controller/admin/'. $action . '.php');

// if($action == 'main'){
//     include('main.php');
// }else if($action == 'logout'){
//     include 'logout.php';
// }else if($action == 'login'){
//     include('login.php');
// }