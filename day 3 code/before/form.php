<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Form Example</title>
	</head>
	<body>
		<p>
			<?php
			$firstname = $_POST['firstname'];
			$lastname = $_POST['lastname'];
			echo 'Welcome to our web site, ' .
					htmlspecialchars($firstname, ENT_QUOTES, 'UTF-8') . ' ' .
					htmlspecialchars($lastname, ENT_QUOTES, 'UTF-8') . '!';
			?>
		</p>
	</body>
</html>