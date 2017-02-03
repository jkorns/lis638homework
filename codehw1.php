<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h1>Correct Change</h1>
<?php
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
	$number_quarters = (int) (($change % $dollar) / $quarter); # Calculate the number of quarters in the remaining change
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
	# Calbulate the number of pennies in the remaining change
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
?>

</body>
</html>