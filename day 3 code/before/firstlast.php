<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Query String Link Example</title>
	</head>
	<body>
		<p>
			<?php
			$firstname = $_GET['firstname'];
			$lastname = $_GET['lastname'];
			echo 'Welcome to our web site, ' .
					htmlspecialchars($firstname, ENT_QUOTES, 'utf-8') . ' ' .
					htmlspecialchars($lastname, ENT_QUOTES, 'utf-8') . '!';
			?>
		</p>
	</body>
</html>