<?php 
	/* This page lets people log into the site. */
	// set the page title and include the header file:
	define('TITLE', 'login');
	include('templates/header.html');

	//print some introductory text:
	print '<h2>Login Form </h2>
		<p>User who are logged in can take advantage of certain features like this, that, and other things </p>';

	// Check if the form been submitted:
		if($_SERVER['REQUEST_METHOD'] == 'POST') {

			//Handle the form:
			if ( (!empty($_POST['email'])) && (!empty($_POST['password'])) ) { // form validation

				if( (strtolower($_POST['email']) == 'me@example.com') && ($_POST['password'] == 'testpass')) { //correct!

					//Redirect the user to welcome page!

					ob_end_clean();// Destroy the buffer!

					header('location: welcome.php');

				} else { //incorrect

					print '<p class="text--error">The submitted email address and password do not match those on file!<br>Go back and try again.</p>'; 
				} // incorrect ends

				} else { // Forget a field.
					print '<p class="text--error"> Pleae make sure you enter both an email address and a password!<br> Go back and try again</p>';
				} // foget ends
			} else { // Display the form.
				print '<form action="login.php" method="post" class="form-inline">
				<p><label for="email">Email Address: </label><input type="email" name="email" size="20"></p>
				<p><label for="password">Password:</label><input type="password" name="password" size="20"></p>
				<p><input type="submit" name="submit" value="Log In!" class="button--pill"></p>
				</form>';

		}
		

		include('templates/footer.html');
		//need the footer.
?>