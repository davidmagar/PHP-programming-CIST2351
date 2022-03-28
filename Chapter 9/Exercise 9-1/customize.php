<?php // Script 9.1 - customize.php

var_dump($_POST);

// Handle the form if it has been submitted:
if (isset($_POST['font_size'], $_POST['font_color'], $_POST['font_style'])) {
	
	// Send the cookies:
	setcookie('font_size', $_POST['font_size']);
	setcookie('font_color', $_POST['font_color']);
	setcookie('font_style', $_POST['font_style']);

	// Message to be printed later:
	$msg = '<p>Your settings have been entered! Now see them <a href="view_settings.php">in action</a>.</p>';
	
} // End of submitted IF.
?><!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Customize Your Settings</title>
</head>
<body>
<?php // If the cookies were sent, print a message.
if (isset($msg)) {
	print $msg;
}

?>

<p>Use this form to set your preferences:</p>

<form action="customize.php" method="post">
	<select name="font_size">
		<option value="">Font Size</option>
		<option value="xx-small" <?php if(isset($_POST['font_size'])&& $_POST['font_size']=="xx-small") echo 'selected="selected"'; ?>>xx-small</option>

		<option value="x-small" <?php if(isset($_POST['font_size'])&& $_POST['font_size']=="x-small") echo 'selected="selected"'; ?>>x-small</option>

		<option value="small" <?php if(isset($_POST['font_size'])&& $_POST['font_size']=="small") echo 'selected="selected"'; ?>>small</option>

		<option value="medium" <?php if(isset($_POST['font_size'])&& $_POST['font_size']=="medium") echo 'selected="selected"'; ?>>medium</option>

		<option value="large" <?php if(isset($_POST['font_size'])&& $_POST['font_size']=="large") echo 'selected="selected"'; ?>>large</option>

		<option value="x-large" <?php if(isset($_POST['font_size'])&& $_POST['font_size']=="x-large") echo 'selected="selected"'; ?>>x-large</option>

		<option value="xx-large" <?php if(isset($_POST['font_size'])&& $_POST['font_size']=="xx-large") echo 'selected="selected"'; ?>>xx-large</option>
	</select>

	<select name="font_color">
		<option value="">Font Color</option>
		<option value="999" <?php if(isset($_POST['font_color'])&& $_POST['font_color']=="999") echo 'selected="selected"'; ?>>Gray</option>

		<option value="0c0" <?php if(isset($_POST['font_color'])&& $_POST['font_color']=="0c0") echo 'selected="selected"'; ?>>Green</option>

		<option value="00f" <?php if(isset($_POST['font_color'])&& $_POST['font_color']=="00f") echo 'selected="selected"'; ?>>Blue</option>

		<option value="c00" <?php if(isset($_POST['font_color'])&& $_POST['font_color']=="c00") echo 'selected="selected"'; ?>>Red</option>

		<option value="000" <?php if(isset($_POST['font_color'])&& $_POST['font_color']=="000") echo 'selected="selected"'; ?>>Black</option>
	</select>

	<select name="font_style">
		<option value="">Font Style</option>
		<option value="normal" <?php if(isset($_POST['font_style'])&& $_POST['font_style']=="normal") echo 'selected="selected"'; ?> >Normal</option>

		<option value="italic" <?php if(isset($_POST['font_style'])&& $_POST['font_style']=="italic") echo 'selected="selected"'; ?>>italic</option>
	</select>
	<input type="submit" name="submit" value="Set My Preferences">
</form>

</body>
</html>
<?php 
var_dump($_COOKIE);
?>