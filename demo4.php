<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>面向对象</title>
	</head>
	<body>
		<?php
			class Site {
				/*成员变量*/
				var $url;
				var $title;
				/*PHP构造函数*/
				function __construct($par1,$par2){
					print "构造函数\n";
					$this->name = "MyDestructableClass";
					$this->url = $par1;
					$this->title = $par2;
				}
				/*成员函数*/
				function setUrl($par){
					$this->url = $par;
				}
				function getUrl(){
					echo $this->url . PHP_EOL;
				}
				function setTitle($par){
					$this->title = $par;
				}
				function getTitle(){
					echo $this->title . PHP_EOL;
				}
				function __destruct(){
					print "销毁" . $this->name . "\n";
				}
			}
			/*创建实例*/
			$runoob = new Site('www.runoob.com','菜鸟教程');
			$taobao = new Site('www.taobao.com','淘宝');
			$google = new Site('www.google.com','Google 搜索');
			
			/*调用成员函数，获取标题和URL*/
			$runoob->getTitle();
			$taobao->getTitle();
			$google->getTitle();
			
			$runoob->getUrl();
			$taobao->getUrl();
			$google->getUrl();
			
			/*实例中 Child_Site 类继承了 Site 类，并扩展了功能：*/
			class Child_Site extends Site{
				var $category;
				function setCate($par){
					$this->category = $par;
				}
				function getCate(){
					echo $this->category . PHP_EOL;
				}
				/*如果从父类继承的方法不能满足子类的需求，可以对其进行改写，这个过程叫方法的覆盖（override），也称为方法的重写。
				实例中重写了 getUrl 与 getTitle 方法：*/
				function getUrl(){
					echo $this->url . PHP_EOL;
					return $this->url;
				}
				function getTitle(){
					echo $this->title . PHP_EOL;
					return $this->title;
				}
			}
			
		?>
	</body>
</html>
