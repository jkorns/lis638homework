<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Code Homework #3</title>
<style>
* {
	font-family: Lucida Grande, sans-serif;
}

table {
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

h1 {
	text-align: center;
}

h2 {
	font-weight: bold;
	background-color: #ffffb3;
	text-align: center;
}
</style>
</head>
<body>
<?php
# Challenge 1: Book Lists
echo "<h1>Book Lists</h1>";

$bookdata = array(
	array("PHP and MySQL Web Development", "Luke", "Welling", 144, "Paperback", 31.63),
	array("Web Design with HTML, CSS, JavaScript and jQuery", "Jon", "Duckett", 135, "Paperback", 41.23),
	array("PHP Cookbook: Solutions & Examples for PHP Programmers", "David", "Sklar", 14, "Paperback", 40.88),
	array("JavaScript and JQuery: Interactive Front-End Web Development", "Jon", "Duckett", 251, "Paperback", 22.09),
	array("Modern PHP: New Features and Good Practices", "Josh", "Lockhart", 7, "Paperback", 28.49),
	array("Programming PHP", "Kevin", "Tatroe", 26, "Paperback", 28.96)
				);
#print_r($bookdata); // for debugging

#Start table
echo "<table>";
#Table headers
echo"<tr>
	<th>Title</th>
	<th>First Name</th>
	<th>Last Name</th>
	<th>Number of Pages</th>
	<th>Type</th>
	<th>Price</th>
	</tr>";
#Table rows
foreach ($bookdata as $values) { // Prints values from places 1-6 in each subarray
	echo "<tr>
		<td> $values[0] </td>
		<td> $values[1] </td>
		<td> $values[2] </td>
		<td> $values[3] </td>
		<td> $values[4] </td>
		<td> $values[5] </td>
		</tr>";
}
echo "</table>";

#Calculate total price of books
$totalprice = $bookdata[0][5] + $bookdata[1][5] + $bookdata[2][5] + $bookdata[3][5] + $bookdata[4][5] +$bookdata[5][5];
echo "<h2>Your total price is: \$$totalprice</h2>";


##########


# Challenge 2: Coin Toss (continued)
echo "<h1>Four Heads in a Row</h1>";

#Call coinToss function
$CoinTossResult = coinToss(4);

#Function definition for CoinToss
function coinToss ($NumberFlips) {
	#Counter for Heads Flipped
	$HeadsCount = 0;
	#Counter for Number of Coin Tosses
	$CoinTossCount = 0;
	#Heads and Tails of Coin Images
	$heads = ("<img src='https://webdevdbcourses.prattsi.org/~jkorns/homework/images/brutus_heads.jpg' alt='heads' style='width:75px;'>");
	$tails = ("<img src='https://webdevdbcourses.prattsi.org/~jkorns/homework/images/brutus_tails.jpg' alt='tails' style='width:75px;'>");
	
	#Loop for Coin Tosses
	while ($HeadsCount < $NumberFlips) { 
		$cointoss_var = mt_rand(0,1);
		$CoinTossCount ++;
			if ($cointoss_var==0) { //If the result of the coin toss is 0, increment the heads counter and print the heads image
				$HeadsCount ++;
				echo "$heads";
			}
			else {
				$HeadsCount = 0; //Else the value of the heads counter is set back to 0 and the tails image is printed
				echo "$tails";
			}
		}
		echo "<p>Flipped four heads in a row, in $CoinTossCount flips!";
}
		
?>
</body>
</html>