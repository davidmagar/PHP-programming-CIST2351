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
	// It will receive: title, name, email, response, comments and submit in $_POST

	// Var_dump wil show the number of array
	var_dump($_POST);
	
	// Create shorthand versions of the variables:
	$title = $_POST['title'];
	$name = $_POST['name'];
	$response = $_POST['response'];
	$comments = $_POST['comments'];



		// Print the received data:
	print "<p>Thank You, $title $name, for your comments.</p>
	<p>You stated that you found this example to be '$response' and added: <br> $comments </p>";
	?>

</body>
</html>