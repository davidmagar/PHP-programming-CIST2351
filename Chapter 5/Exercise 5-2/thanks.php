<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Thanks!</title>
</head>
<body>
	<?php 

	var_dump($_GET);
	$name = $_GET['name'];
	$email = $_GET['email'];

	// Print a message
	print "<p>Thank you, $name. We will contact you at $email.</p>";

	?>

</body>
</html>