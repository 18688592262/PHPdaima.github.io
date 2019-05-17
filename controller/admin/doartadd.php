<?php
//1 接受表单中的数据
// var_dump($_POST);

//2生成文件

file_put_contents('./data/arts/'.$_POST['title'], $_POST['content']);

//3提示 跳转到列表页
message('添加成功！', 'artlist');

