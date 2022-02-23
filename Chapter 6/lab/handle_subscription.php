<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Magazine Subscription</title>
</head>
<body>
	<h1>Magazine Subscription</h1>
	<h3>Monthly $5.99, Yearly $59.99, Taxes 7%</h3>
	<h2>Thank you for your subscription</h2>

	<?php 
		// For debugging
		var_dump($_POST);

		// This Code will get the value from the post array
		$subscriptions = $_POST['subscriptions'];
		$year = $_POST['year'];
		$price = $_POST['price'];
		$tax = $_POST['tax'];
		$shipping = $_POST['shipping'];
		$subscribe = $_POST['subscribe'];



		// Get the values from personal Information array
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];

		// comments entered in saparate lines will show in separate lines in display
		$comments = nl2br($_POST['comments']);


		// concatenateing the first and last name
		$name = ucfirst($first_name) . ' ' .ucfirst($last_name);


	
		//Monthly payment
		$perMonth = 5.99;
		$perYear = 59.99;
		$monthly = $subscriptions * $perMonth;
		$yearly = ($year * $subscriptions) * $perYear;

		//Calculate the total:
		$total = $price * $subscriptions;
		$total = $total + $shipping;

		// Determine the tax rate:
		$taxrate = $tax / 100;
		$taxrate = $taxrate + 1;

		// factor in taxrate;
		$total = $total * $taxrate;
		$total_year = $yearly + $taxrate;

		//Adjust for html tags
		$html_post = htmlentities($_POST['comments']);

	


		// Print the result


		echo "<p> You are requesting $subscriptions subscription for $year year. <br><br> Your subscriptions price is $$price.<br><br> Your monthly payment will be $$monthly for $subscriptions subscriptions for $year years. <br><br> But if you pay at once your payment will be $$yearly before tax and shipping. <br><br> Your shipping cost is $$shipping .<br><br> Your Taxes is $tax%. <br><br> Your Total payment is $$total. per month. Your yearly payment is $$total_year.<br><br> Thank you, $name for your comments: <br> $comments. </p>";



	?>

</body>
</html>