<!DOCTYPE html>
<html>
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
	$number_dollars = (int) ($change / $dollar); # Number of dollars equals total change divided by 100
	echo $number_dollars;
	echo " dollar(s), ";
	$number_quarters = (int) (($change % $dollar) / $quarter); # Number of quarters equals the remainder of total change divided by 100, divided by 25
	echo $number_quarters;
	echo " quarter(s), ";
	$number_dimes = (int)(($change - (($dollar * $number_dollars) + ($quarter * $number_quarters)))/$dime);
	echo $number_dimes;
	echo " dime(s), ";
	$number_nickels = (int)(($change - (($dollar * $number_dollars) + ($quarter * $number_quarters) + ($dime * $number_dimes)))/$nickel);
	echo $number_nickels;
	echo " nickel(s), ";
	$number_pennies = (int) (($change - (($dollar * $number_dollars) + ($quarter * $number_quarters) + ($dime * $number_dimes) + ($nickel*$number_nickels)))/$penny);
	echo $number_pennies;
	echo " pennies.";
	}
else { # if the total change is less than a dollar
	$number_quarters = (int) ($change / $quarter); # Number of quarters equals the totalchange divided by 25
	echo $number_quarters;
	echo " quarter(s), ";
	$number_dimes = (int)(($change - ($quarter * $number_quarters))/$dime);
	echo $number_dimes;
	echo " dime(s), ";
	$number_nickels = (int)(($change - (($quarter * $number_quarters) + ($dime * $number_dimes)))/$nickel);
	echo $number_nickels;
	echo " nickel(s), ";
	$number_pennies = (int) (($change - (($quarter * $number_quarters) + ($dime * $number_dimes) + ($nickel*$number_nickels)))/$penny);
	echo $number_pennies;
	echo " pennies.";
	}
?>

</body>
</html>