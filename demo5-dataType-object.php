<?php
/*
 * 
 */
class dog{
	public $name="wangcai";
	function hello(){
		echo "<br/>汪汪，我的名字是";
	}
}
$wangcai = new dog();

var_dump($wangcai);
echo "<br/>";
echo $wangcai->name;
echo $wangcai->hello();
?>
