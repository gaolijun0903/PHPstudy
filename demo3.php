<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>PHP $_REQUEST和$_POST</title>
	</head>
	<body>
		<?php
			echo '<h2>文件中的当前行号。</h2>';
			echo '这是第“' .__LINE__ .'”行';
			echo '<br>';
			echo '<h2>文件的完整路径和文件名。如果用在被包含文件中，则返回被包含的文件名。</h2>';
			echo '改文件位于“'.__FILE__.'”';
			echo '<br>';
			echo '<h2>文件所在的目录。如果用在被包括文件中，则返回被包括的文件所在的目录。</h2>';
			echo '改文件位于“'.__DIR__.'”';
			echo '<h2>文件中的当前行号。</h2>';
		?>
	</body>
</html>