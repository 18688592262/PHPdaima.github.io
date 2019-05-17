<?php
//1接受表单的数字
$username = $_POST['username'];
$password = $_POST['password'];

//2判断账号是否正确
$account = file_get_contents('./data/account');  //读取账号
//根据行转成数组
$account = explode("\n", $account);
//循环每个账号
foreach($account as $v){
    //拼出账号的格式
    $tmp = $username . ' ' . md5($password);
    // 如果账号相同代表登录成功
    if($tmp == $v){
        //开启session
        // session_start();
        //把用户保存到session中
        $_SESSION['name'] = $username;
        //提示信息
        message('登录成功！', '');  
    }
}

message('登录或者密码错误！', 'login');   