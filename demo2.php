<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>PHP $_POST</title>
	</head>
	<body>
		<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			Name:
			<input type="text" name="fname" />
			<input type="submit" />
		</form>
		<?php
		$name = $_POST['fname'];
		echo $name;
		?>
	</body>
</html>
