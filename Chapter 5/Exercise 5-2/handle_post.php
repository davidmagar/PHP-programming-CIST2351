<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Forum Posting</title>
</head>
<body>
	<?php 

	var_dump($_POST);
	// Get the value from the $_POST array:
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$posting = nl2br($_POST['posting']);

	// Create a full name variable:
	$name = $first_name . ' ' . $last_name;

	// Print a message:
	print"<div>Thank you, $name, for your posting:
	<p>$posting</p></div>";

	// Make a link to another page:
	$name = urlencode($name);
	$email = urlencode($_POST['email']);
	print "<p>Click <a href=\"thanks.php?name=$name&email=$email\">here</a> to continue.</p>"
	?>

</body>
</html>