<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Random Number Generator</title>
</head>
<body>
	<h2>Random Number Generator</h2>
	<?php 
	//This for debugging
	var_dump($_POST);

	// Get the value from Post array
	$lowest = $_POST['lowest'];
	$highest = $_POST['highest'];

	// Create a random number

	$n1 = mt_rand($lowest, $highest);
	$n2 = mt_rand($lowest, $highest);
	$n3 = mt_rand($lowest, $highest);

	// Adding the random number value
	$total = $n1 + $n2 + $n3;

	// calcuate the average
	$average = $total / 3;


	  //*** I try to put 2 decimals for the average but did not work ****
	//number_formate
	//number_format($average, 2);

	// Generate the number
	echo "<p>Your numbers between $lowest and $highest are: <br> $n1 <br> $n2 <br> $n3 <br> <br>
	The sum of $n1 + $n2 + $n3 = $total.<br><br>
	The average of $n1, $n2, $n3 is $average;. </p>";


	?>

</body>
</html>