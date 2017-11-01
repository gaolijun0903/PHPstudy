<?php
/*
 1.自由转换
 2.强制转换    $a = '100';  $b = (int)$a;  不改变原变量的类型
 3.setype()   $a = '2008年北京'; settype($a,'array');   作用于原变量
 4.具体转换函数 intval()转换为整型	floatval()转换为浮点型 	strval()转换为字符串类型
 */ 
 $a = "200";
 $b = intval($a);
 var_dump($a); //string
 var_dump($b); //int
?>