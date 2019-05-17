<?php

//接受标题
$title = $_GET['title'];

// 先读取出这扁文章的内容
$content = file_get_contents('./data/arts/' . $title);

//显示修改的表单
view('post-edit');