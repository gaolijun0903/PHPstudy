<!DOCTYPE html> 
<html> 
<head>
	<meta charset="UTF-8">
	<title>入门</title>
</head>
<body> 

<h1>My first PHP page1</h1> 

<?php 
echo "wang love jun,hahaha~"; 
echo "<br>";
echo $_SERVER['PHP_SELF'];   //当前执行脚本的文件名，与 document root     有关
echo "<br>";
echo $_SERVER['SERVER_NAME'];    //当前运行脚本所在的服务器的主机名。
echo "<br>";
echo $_SERVER['HTTP_HOST'];     //当前请求头中 Host: 项的内容，如果存在的话。
echo "<br>";
echo $_SERVER['HTTP_REFERER'];        //	引导用户代理到当前页的前一页的地址（如果存在）
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];      //包含当前脚本的路径。

echo "<hr>";
//var_dump($GLOBALS) ;

$url = "http://www.baidu.com/admin/index.php?uname=admin&pwd=123";
			$arr = parse_url($url);
			echo "<pre>";
			print_r($arr);
			echo "<br/>".parse_url($url,PHP_URL_HOST);
			echo "<br/>".parse_url($url,PHP_URL_PATH);
			echo "<br/>".parse_url($url,PHP_URL_QUERY);
 	
?> 

</body> 
</html>