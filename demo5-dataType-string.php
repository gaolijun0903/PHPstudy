<?php
/*
 * 标量类型：整型（int）        浮点型（float）    字符串型（string）     布尔型（Boolean）
 * 复合类型：数组（array）   对象（object）
 * 其他类型：NULL		    资源（resource）
 */
$num = 2.5;
var_dump($num);
echo '<br/>';

$name = 'wangwang';

$str = '这是一个字符串$name,不能识别变量。当只是简单字符串时，建议使用单引号，可省去PHP解析时间。'.$name.'单引号执行效率优于双引号。';
$str2 = "这也是一个字符串{$name},可以识别以\$开头的变量。也可识别转义字符串，回车符、换行符、制表符等\n\r\t";
echo $str;
echo '<br/>';
echo $str2;

$bbs = <<<aaa
	<html>
		<head>
			<meta charset="UTF-8">
		</head>
		<body>
			<h1>"欢迎学习PHP"{$name}</h1>
			<span>现在学习的是定界符的使用“<<<aaa aaa;”</span>
			<div>$str2</div>
		</body>
	</html>
aaa;

echo $bbs;






?>