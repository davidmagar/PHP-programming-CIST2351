<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add an Event</title>
</head>
<body>
	<?php 

		var_dump($_POST['days']);

		if (!empty($_POST['name'])) {
			// Print the text:
			print "<p>You want to add an event called <b>{$_POST['name']}</b> which takes place on: <br>";
			
		} else {
			//Validating the event input.
			print "<p>Please enter the name of the event</p>";

		}
		
		

		// Print each weekday:
		if (isset($_POST['days']) AND is_array($_POST['days'])) {

			foreach ($_POST['days'] as $day) {
				print "<ul><li>$day<br></li></ul>\n";
			}

		} else {
			print 'Please select at least one weekday for this event!';
		}

		// Complete the paragraph:
		print '</p>';

	?>

</body>
</html>