<?php

//1接受数据

$title = $_POST['deltitle'];

// var_dump($title);  2 循环每个文章删除
foreach($title as $v){

    unlink('./data/arts/'.$v);
}

//提示跳转
message('删除成功！', 'index.php?a=artlist');