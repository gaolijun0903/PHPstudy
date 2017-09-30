<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>魔术变量</title>
	</head>
	<body>
		<?php
			echo '<h2>__LINE__文件中的当前行号。</h2>';
			echo '这是第“' .__LINE__ .'”行';
			echo '<br>';
			echo '<h2>__FILE__文件的完整路径和文件名。如果用在被包含文件中，则返回被包含的文件名。</h2>';
			echo '改文件位于“'.__FILE__.'”';
			echo '<br>';
			echo '<h2>__DIR__文件所在的目录。如果用在被包括文件中，则返回被包括的文件所在的目录。</h2>';
			echo '改文件位于“'.__DIR__.'”';
			echo '<h2>__TRAIT__代码复用的一个方法</h2>';
		
			class Base {
			    public function sayHello() {
			        echo 'Hello ';
			    }
			}
			 
			trait SayWorld {
			    public function sayHello() {
			        parent::sayHello();
			        echo 'World!';
			    }
			}
			 
			class MyHelloWorld extends Base {
			    use SayWorld;
			}
			 
			$o = new MyHelloWorld();
			$o->sayHello();
			$obase = new Base();
			$obase->sayHello();
		?>
	</body>
</html>