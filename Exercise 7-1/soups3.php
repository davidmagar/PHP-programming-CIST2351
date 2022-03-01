<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>No Soup for You!</title>
</head>
<body>
	<h1>Mmm...soups</h1>
		<?php 
			// This script create and print an arra.

			// Address erroe management, if you wnat.


			//Create the array:
			$soups = [
				'Monday' => 'Rice',
				'Tuesday' => 'Beef dumpling',
				'Wednesday' => 'Buffalo wings',
				'Thursday' => 'Chicken teriyaki',
				'Friday' => 'Bean and cheese Burrito',
				'Saturday' => 'Stake',

			];

			$count = count($soups);

			print "<h4>Display the count of the elements in new array</h4>";

			print "<p>The soups array contains $count elements.</p>";

			print "<h4>Display the first, third and fifth elements of the new array.</h4>";

			print "<p>The <i>first</i> element of the array is $soups[Monday].</p>";
			print "<p>The <i>Third</i> element of the array is $soups[Wednesday].</p>";
			print "<p>The <i>Fifth</i> element of the array is $soups[Friday].</p>";

			print "<h4>Use a 'for loop' to display all of the elements in the new array.</h4>";

			// Print each key and value:
			foreach ($soups as $day =>$soup) {
				print "<p>$day: $soup</p>\n";
			}


			var_dump($soups);
		?>

</body>
</html>