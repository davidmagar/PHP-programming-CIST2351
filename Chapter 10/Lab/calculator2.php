<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Cost Calculator</title>
</head>
<body>
<?php // Script 10.5 - calculator2.php #2
/* This script displays and handles an HTML form. 
It uses a function to calculate a total from a quantity, price, and tax rate. */

// Define a tax rate:
$tax = 8.75;

// This function performs the calculations.
function calculate_total ($quantity, $price) {

	global $tax;
	
	$total = $quantity * $price; // Calculation
	$taxrate = ($tax / 100) + 1;
	$total = $total * $taxrate; // Add the tax.
	$total = number_format ($total, 2); // Formatting
	
	return $total; // Return the value.

} // End of function.

// Check for a form submission:
if (isset($_POST['submitted'])) {

	// Check for values:
	if ( is_numeric($_POST['quantity']) AND is_numeric($_POST['price']) ) {
	
		// Call the function and print the results:
		$total = calculate_total($_POST['quantity'], $_POST['price']);
		print "<p>Your total comes to $<span style=\"font-weight: bold;\">$total</span>, including the $tax percent tax rate.</p>";
		
	} else { // Inappropriate values entered.
		print '<p style="color: red;">Please enter a valid quantity and price!</p>';
	}

	
}
print '<form action="" method="post">';

include('function/function.php');
make_text_input('quantity', 'Quantity', 3);
make_text_input('price', 'Price', 3);

print '<input type="submit" name="submit" value="Calculate!">';
print '<input type="hidden" name="submitted" value="true"><form>';



?>

</body>
</html>
