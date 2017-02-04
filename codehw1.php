<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Code Homework #1</title>
</head>
<body>
<?php
# Challenge 1: Correct Change
echo "<h1>Correct Change</h1>";
$change = 159;
$dollar = 100;
$quarter = 25;
$dime = 10;
$nickel = 5;
$penny = 1;

# Total change due in cents
echo "You are due $change cents back in change total. <p>";
echo "You are due back ";

# Change broken down by dollars, quarters, dimes, nickels, and pennies
if ($change > 99) {
	# Calculate the number of dollars in total change
	$number_dollars = (int) ($change / $dollar); 
	echo $number_dollars;
	echo " dollar(s), ";
	# Calculate the number of quarters in the remaining change
	$number_quarters = (int) (($change % $dollar) / $quarter);
	echo $number_quarters;
	echo " quarter(s), ";
	# Calculate the number of dimes in the remaining change
	$number_dimes = (int)(($change - (($dollar * $number_dollars) + ($quarter * $number_quarters)))/$dime); 
	echo $number_dimes;
	echo " dime(s), ";
	# Calculate the number of nickels in the remaining change
	$number_nickels = (int)(($change - (($dollar * $number_dollars) + ($quarter * $number_quarters) + ($dime * $number_dimes)))/$nickel); 
	echo $number_nickels;
	echo " nickel(s), ";
	# Calculate the number of pennies in the remaining change
	$number_pennies = (int) (($change - (($dollar * $number_dollars) + ($quarter * $number_quarters) + ($dime * $number_dimes) + ($nickel*$number_nickels)))/$penny);
	echo $number_pennies;
	echo " pennies.";
	}
# Change broken down by quarters, dimes, nickels, and pennies if the total change is less than a dollar
else {
	# Calculate the number of quarters in the total change
	$number_quarters = (int) ($change / $quarter); 
	echo $number_quarters;
	echo " quarter(s), ";
	# Calculate the number of dimes in the remaining change
	$number_dimes = (int)(($change - ($quarter * $number_quarters))/$dime);
	echo $number_dimes;
	echo " dime(s), ";
	# Calculate the number of nickels in the remaining change
	$number_nickels = (int)(($change - (($quarter * $number_quarters) + ($dime * $number_dimes)))/$nickel);
	echo $number_nickels;
	echo " nickel(s), ";
	# Calculate the number of pennies in the remaining change
	$number_pennies = (int) (($change - (($quarter * $number_quarters) + ($dime * $number_dimes) + ($nickel*$number_nickels)))/$penny);
	echo $number_pennies;
	echo " pennies.";
	}

# Challenge 2: 99 Bottles of Beer
echo "<h1>99 Bottles of Beer</h1>";
$bottles = 99;

if ($bottles > 0) {
	while ($bottles > 0) {
		echo "$bottles bottles of beer on the wall, $bottles bottles of beer.<br>";
		echo "Take one down, pass it around, " . --$bottles . " bottles of beer on the wall.<br>";
		}
	}
?>
</body>
</html>