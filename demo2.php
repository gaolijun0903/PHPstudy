<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>PHP $_REQUEST和$_POST</title>
	</head>
	<body>
		<h2>$_POST</h2>
		<div>
			<p></p>
			<p>PHP $_POST 被广泛应用于收集表单数据，在HTML form标签的指定该属性："method="post"。</p>
			<p>以下实例显示了一个输入字段（input）及提交按钮(submit)的表单(form)。 </p>
			<p>当用户通过点击 "Submit" 按钮提交表单数据时, 表单数据将发送至<form>标签中 action 属性中指定的脚本文件。 </p>
			<p>在这个实例中，我们指定文件来处理表单数据。</p>
			<p>如果你希望其他的PHP文件来处理该数据，你可以修改该指定的脚本文件名。 </p>
			<p>然后，我们可以使用超级全局变量 $_POST 来收集表单中的 input 字段数据</p>
		</div>
		<hr />
		<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			Name:
			<input type="text" name="fname" />
			<input type="submit" />
		</form>
		<?php
		$name = $_REQUEST['fname'];
		//$name = $_POST['fname'];
		echo $name;
		?>
		
		<hr />
		<h2>$_GET</h2>
		<div>
			<p>PHP $_GET 同样被广泛应用于收集表单数据，在HTML form标签的指定该属性："method="get"。</p>
			<p>$_GET 也可以收集URL中发送的数据。</p>
			<p>假定我们有一个包含参数的超链接HTML页面：</p>
			<p>当用户点击链接 "Test $GET", 参数 "subject" 和 "web" 将发送至"test_get.php",</p>
			<p>你可以在 "test_get.php" 文件中使用 $_GET 变量来获取这些数据。</p>
		</div>
		<a href="test_get.php?subject=PHP&web=runoob.com">Test $GET</a>
	</body>
</html>
