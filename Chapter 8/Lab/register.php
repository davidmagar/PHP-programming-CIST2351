<?php
	//register.php 
	//including the title page.
	define('TITLE', 'Register');
	include('templates/header.html');

	// Print the introductory text:
	print '<h2>Registaion Form</h2>
	<p>Registeer so that you can take advantage of certain features like this, that, and the other things.</p>
	<p>This form is a sticky form, which means it remembers the values entered into it.<br>The form will remember the First name, last name and email so that way if you forget one or the other you just need to fill out particular box instead of tryping all over again. <br>
		The benefit of having a sticky form is that user don&#039t have to type the same information if they miss something.<br>
		Yes, the form is sticky, it have a value attribue assigned into the text inputs.<br>
		Yes, everything is working perfectly fine because ther is no error during code validation.
	</p>';

	// Check if the form has been submitted:
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {

		$problem = false; // No problems so far.
		
		// Check for each value...
		if (empty($_POST['first_name'])) {
			$problem = true;
			print '<p class="text--error">Please enter your first name!</p>';
		}
		
		if (empty($_POST['last_name'])) {
			$problem = true;
			print '<p class="text--error">Please enter your last name!</p>';
		}

		if (empty($_POST['email']) || (substr_count($_POST['email'], '@') != 1) ) {
			$problem = true;
			print '<p class="text--error">Please enter your email address!</p>';
		}

		if (empty($_POST['password1'])) {
			$problem = true;
			print '<p class="text--error">Please enter a password!</p>';
		}

		if ($_POST['password1'] != $_POST['password2']) {
			$problem = true;
			print '<p class="text--error">Your password did not match your confirmed password!</p>';
		} 
		
		if (!$problem) { // If there weren't any problems...

			// Print a message:
			print '<p class="text--success">You are now registered!<br>Okay, you are not really registered but...</p>';

			// Clear the posted values:
			$_POST = [];
		
		} else { // Forgot a field.
		
			print '<p class="text--error">Please try again!</p>';
			
		}

	} // End of handle form IF.


?>
<!-- Create a form -->
<form action="register.php" method="post" class="form-inline">
	<p><label for="first_name">First Name:</label><input type="text" name="first_name" size="20" value="<?php if(isset($_POST['first_name'])) {print htmlspecialchars($_POST['first_name']);} ?>"></p>

	<p><label for="last_name">Last Name:</label><input type="text" name="last_name" size="20" value="<?php if(isset($_POST['last_name'])) {print htmlspecialchars($_POST['last_name']);} ?>"></p>

	<p><label for="email">Email:</label><input type="email" name="email" size="20" value="<?php if(isset($_POST['email'])) {print htmlspecialchars($_POST['email']);} ?>"></p>

	<p><label for="password1">Password:</label><input type="password" name="password1" size="20" value="<?php if(isset($_POST['password1'])) {print htmlspecialchars($_POST['password1']);} ?>"></p>

	<p><label for="password2">Password:</label><input type="password" name="password2" size="20" value="<?php if(isset($_POST['password2'])) {print htmlspecialchars($_POST['password2']);} ?>"></p>

	<p><input type="submit" name="submit" value="Register!" class="button--pill"></p>


	
</form>

<?php
	include('templates/footer.html'); 
?>