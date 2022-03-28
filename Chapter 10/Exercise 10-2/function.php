<?php 
function make_text_input($name, $label, $size = 20) {
	
	// Begin a paragraph and a label:
	print '<p><label>' . $label . ': ';
	
	// Begin the input:
	print '<input type="text" name="' . $name . '" size="' . $size . '" ';
	
	// Add the value:
	if (isset($_POST[$name])) {
		print ' value="' . htmlspecialchars($_POST[$name]) . '"';
	}

	if(isset($_POST[$label])) {
		print 'value="password"';
	}
	
	// Complete the input, the label and the paragraph:
	print '></label></p>';
	
} // End of make_text_input() function.

?>