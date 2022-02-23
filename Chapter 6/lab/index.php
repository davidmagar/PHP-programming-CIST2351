<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Subscription Purchase</title>
</head>
<body>
	<div>
		<h1>Magazine Subscription </h1>
		<h3>Monthly $5.99, Yearly $59.99</h3>
		<form action="handle_subscription.php" method="post">
			<p>Subscribe our Weekly Magazine</p>

			<p>Please select the number of subscription:  <!--<input type="text" name="subscriptions" size="3" value="1" min="1"> -->
				<select name="subscriptions">
					<option>Subscriptions</option>
					<?php // Print out 12 subscriptions
						for ($i = 1; $i <= 12; $i++) {
						print "<option value=\"$i\">$i</option>\n";
						}
					?>
				</select>
			</p>
			

			<p>Please select Number of Years for the subscription: <!-- <input type="text" name="year" size="3" value="2" min="1"> -->
				<select name="year">
					<option>Years</option>
					<?php  // print out 6 years
						for ($i = 1; $i <= 6 ; $i++) { 
							print "<option value=\"$i\">$i</option>\n";
						}
					?>
					
				</select>
			</p>

			<p>Price: <select name="price">
				<option value="5.99">Monthly</option>
				<option value="59.99">Yearly</option>
			</select></p>

			<p>Tax: <input type="tax" name="tax" size="3" value="7.00">%</p>

			<p>Type of Delivery: <select name="shipping">
				<option value="0.00">Online</option>
				<option value="5.50">Mail</option>
				<option value="10.95">FedEx</option>
			</select></p>

		
				<h3>Personal Information</h3>
				<p>First Name <input type="text" name="first_name" size="20"></p>
				<p>Last Name <input type="text" name="last_name" size="20"></p>
				<p>Comments <textarea name="comments" rows="10" cols="30"></textarea></p>

			

			<input type="submit" name="Subscribe" value="Subscribe Now">

			
		</form>
	</div>

</body>
</html>