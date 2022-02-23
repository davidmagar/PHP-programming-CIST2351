<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Your Feedback</title>
</head>
<body>
	<?php // Script 3.3 handle_form.php
	// This page will receive the data from feedback.html
	// It will receive: title, name, email, response, comments and submit in $_GET

	// Var_dump wil show the number of array
	var_dump($_GET);
	
	// Create shorthand versions of the variables:
	$title = $_GET['title'];
	$name = $_GET['name'];
	$response = $_GET['response'];
	$comments = $_GET['comments'];



		// Print the received data:
	echo "<p>Thank You, $title $name, for your comments.</p>
	<p>You stated that you found this example to be '$response' and added: <br> $comments </p>";
	?>

</body>
</html>