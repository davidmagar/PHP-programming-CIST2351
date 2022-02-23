<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Registration</title>
	<style type="text/css" media="screen">
		.error { color: red; }
	</style>
</head>
<body>
<h1>Registration Results</h1>

	<?php // Script 6.7 - handle_reg.php #6
		/* This script receives seven values from register.html:
		email, password, confirm, year, terms, color, submit */

		// Address error management, if you want.
		//Debugging the code:
		var_dump($_POST);

		//Assigning variable from registration form
		$email = $_POST['email'];
		$password = $_POST['password'];
		$confirm = $_POST['confirm'];
		$year = $_POST['year'];
		$color = $_POST['color'];
		$terms = $_POST['terms'];

		// Assigning variables for current year.
		$currentYear = date("Y");
		


		// Flag variable to track success:
		$okay = true;

		// Validate the email address:
		if (empty($_POST['email'])) {
			print '<p class="error">Please enter your email address.</p>';
			$okay = false;
			}


		// Validate the password:
		if (empty($_POST['password'])) {
			print '<p class="error">Please enter your password.</p>';
			$okay = false;
			}elseif (strlen($_POST['password']) == "password") {
			print '<p class="error">Your password can not be password.</p>';
			$okay = false;
		}

		// Check the two passwords for equality:
		if ($_POST['password'] != $_POST['confirm']) {
			print '<p class="error">Your confirmed password does not match the original password.</p>';
			$okay = false;
		}

		// Validate the year:
		if ( is_numeric($_POST['year']) AND (strlen($_POST['year']) == 4) ) {

			// Check that they were born before currentYear
			if ($_POST['year'] < $currentYear) {
				$age = $currentYear - $_POST['year']; // Calculate age this year.
			} else {
				print '<p class="error">Either you entered your birth year wrong or you come from the future!</p>';
				$okay = false;
			} // End of 2nd conditional.
			
		} else { // Else for 1st conditional.

			print '<p class="error">Please enter the year you were born as four digits.</p>';
			$okay = false;

		} // End of 1st conditional.

		//Generation validation

		 if ($_POST['year'] == (1965 <= 1950)) {
			$generation = 'Generation_x';
		} elseif ($_POST['year'] == (1981 <= 1995)) {
				$generation = 'Millennials';
			} elseif ($_POST['year'] == (1996 <= 2010)) {
				$generation = 'Generation Z';
			} elseif ($_POST['year'] == (2011 <= 2025)) {
				$generation = 'Generation Alpha';
			} else {
				print '<p class="error">Can not find your generation.</p>';
				$okay = false; 
			
		}

		// Validate the terms:
		if ( !isset($_POST['terms'])) {
			print '<p class="error">You must accept the terms.</p>';
			$okay = false;	
		}

		// Validate the color:
		if ($_POST['color'] == 'red') {
				$color_type = 'primary';
			} elseif ($_POST['color'] == 'yellow') {
				$color_type = 'primary';
				} elseif ($_POST['color'] == 'green') {
				$color_type = 'secondary';
				} elseif ($_POST['color'] == 'blue') {
				$color_type = 'primary';
				} elseif ($_POST['color'] == 'orange') {
				$color_type = 'secondary';	// code...
				} elseif ($_POST['color'] == 'purple') {
				$color_type = 'secondary'; 
			}else {

			 // Problem!
				print '<p class="error">Please select your favorite color.</p>';
				$okay = false;
		}

		// If there were no errors, print a success message:
		if ($okay) {
			print '<p>You have been successfully registered (but not really).</p>';
			print "<p>You will turn $age this year.</p>";
			print "<p>Your favorite color is a $color and it is $color_type color.</p>";
			print "<p>Your living in $generation .</p>";
		}
	?>
</body>
</html>