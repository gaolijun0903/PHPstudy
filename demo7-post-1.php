<?php
	header('Content-Type:text/html;charset=utf-8');

	$uname = empty($_post["uname"]) ? "您没有输入姓名" : $_post["uname"];
	$age = empty($_post["age"]) ? "您没有输入年龄" : $_post["age"];
	$tel = empty($_post["tel"]) ? "您没有输入电话" : $_post["tel"];
	$qq = empty($_post["qq"]) ? "您没有输入QQ号码" : $_post["qq"];
	echo "姓名：{$uname} 年龄：{$age} 电话：{$tel} QQ号码{$qq}";
?>