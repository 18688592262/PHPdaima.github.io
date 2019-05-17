<?php

//1接受
$oldtitle = $_POST['oldtitle']; //原标题
$title = $_POST['title'];
$content = $_POST['content'];

// 如何知道原来的文件名是什么？ 把原文件名也传过来
//将新内容写入源文件中
file_put_contents('./data/arts/'.$oldtitle, $content);

//修改原文件名为新的文件名
rename('./data/arts/'.$oldtitle, './data/arts/'.$title);

//提示跳转
message('修改成功', 'index.php?a=artlist');