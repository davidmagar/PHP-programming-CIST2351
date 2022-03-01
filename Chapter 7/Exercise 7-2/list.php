<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>I have This Sorted Out</title>
</head>
<body>
	<?php 
		// This script receives a string in $_POST['word']. It then turns it into an array, sorts the array alphabetically, and reprints.

		// Turn incoming string into array:
		$words_array = explode(' ', $_POST['words']);

		// Sort the array:
		sort($words_array);

		//Pring the result
		print "<p>An alphabetized version of your list is:</p>";

		foreach ($words_array as $string_words) {
			print "<p>$string_words</p>";
		}

		var_dump($words_array);


	?>

</body>
</html>