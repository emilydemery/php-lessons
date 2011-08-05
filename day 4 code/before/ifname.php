<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Form Example</title>
	</head>
	<body>
		<p>
			<?php
			$firstname = $_REQUEST['firstname'];
			$lastname = $_REQUEST['lastname'];
			if ($firstname == 'Kevin' || $lastname == 'Yank')
			{
		  		echo 'Welcome, oh glorious leader!';
			}
			else
			{
				echo 'Welcome, Plebe ' .
				$firstname . ' ' . 
				$lastname . '!';
			}
			?>
		</p>
	</body>
</html>