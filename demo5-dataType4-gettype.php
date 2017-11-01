<?php
/*
 *PHP是一个弱类型的语言
 * var_dump()  没有返回值，直接输出到浏览器 与echo类似
 * gettype(变量或常量) 有返回值 string init object
 * 
 * define('URL','www.baidu.com'); 定义常量
 * 
 * is_int()   is_float()	is_array()	is_object()	 is_null()	is_resource()  返回布尔型值
 */

$names = array("wangwang",'junjun','wangzai');
echo getType($names);
if(gettype($names)=="array"){
	echo "<br/>这是一个数组";
}

if(is_array($names)){
	foreach($names as $key=>$value){
		echo "用户".$key."的姓名是".$value."<br/>";
	}
}

class cat{
	public $name='mimi';
	function hello($me){
		echo $me.'在吃饭';
	}
}
$miao = new cat();
echo $miao->hello("miao");
echo "<br/>";
echo gettype($miao);



define('URL','www.baidu.com'); 
if(is_string(URL)){
	echo 'URL常量是一个字符串类型';
}
?>