<?php
/*
 *PHP是一个弱类型的语言
 * var_dump()  没有返回值，直接输出到浏览器 与echo类似
 * gettype(变量，常量) 有返回值
 */

$names = array("wangwang",'junjun');
echo getType($names);
if(gettype($names)=="array"){
	echo "<br/>这是一个数组";
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
?>