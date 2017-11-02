<?php
/*
 * 布尔型 TRUE false
 * 为布尔型假的类型： FALSE、   0 、   ''、   '0'、  null、   空数组$a = array();
 */

header('Content-Type:text/html;charset=utf-8');
$name = $_GET['username'];
if($name){
	echo "你的名字是：".$name;
}else{
	echo "请输入名字，再提交";
}

?>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<body>
		<form action="" method="get">
			<input type="text" name="username" /><br/>
			<input type="submit" value="提交" />
		</form>
	</body>
</html>