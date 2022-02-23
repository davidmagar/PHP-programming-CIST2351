<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Forum Posting</title>
</head>
<body>
	<?php 
	/*This script receive five values from posting.html */

	// Debug the code
	var_dump($_POST);

	//Get the value from post array:
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$posting = nl2br($_POST['posting']);

	// Create a full name variable
	$name = $first_name . ' ' . $last_name;

	// Ajust from HTML tags:

	$html_post = htmlentities($_POST['posting']);
	$strip_post = strip_tags($_POST['posting']);

	// Get a word count:
	$words = str_word_count($posting);

	// Get a snippet of the posting:
	$posting = substr($posting, 0, 50);

	// Print a message
	print "<div>Thank you, $name, for your posting:
	<p>Original: $posting</p>
	<p>Entity: $html_post</p>
	<p>Stripped: $strip_post</p>
	<p>$posting... </p>
	<p>($words words)</p></div>";






	?>

</body>
</html>