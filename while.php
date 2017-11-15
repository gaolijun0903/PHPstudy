<?php
	header('Content-Type:text/html;charset=utf-8');
	//mysql -uroot -p
	//root
	//show databases;
	//use edu;
	//create table user(uname varchar(20),age int(10));
	//insert into user(uname,age) values('gaolijun',18);
	//select * from user;
	//select count(*) from user;
	//dorp table user;
	
	$mysqli = new mysqli('localhost','root','root','edu');
//	$i = 1;
//	while($i<=100){
//		$sql = "insert into user (uname,age) value('dai{$i}',$i)";
//		$mysqli->query($sql);
//		$i++;
//	}
	
	$sql2 = "select * from user order by age";
	$result = $mysqli->query($sql2);
	while($row=$result->fetch_assoc()){
		echo "学员名：".$row['uname']."\t年龄：".$row['age']."<br/>";
	}
	
	
?>