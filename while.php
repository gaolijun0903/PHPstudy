<?php
	$mysqli = new mysqli('localhost','root','root','edu');
	$i = 1;
	while($i<=100){
		$sql = "insert into user (uname,age) value('dai{$i}',$i)";
		$mysqli->query($sql);
		$i++;
	}
?>