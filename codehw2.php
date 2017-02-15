<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Code Homework #2</title>
</head>
<body>
<?php
# Challenge 1: ISBN Validation
echo "<h1>ISBN Validation</h1>";

$isbn_number = "156881111x";
echo "Checking ISBN: $isbn_number for validity...";

# Isolate each digit of the ISBN in a variable
$first_digit = (substr($isbn_number,0,1));
$second_digit = (substr($isbn_number,1,1));
$third_digit = (substr($isbn_number,2,1));
$fourth_digit = (substr($isbn_number,3,1));
$fifth_digit = (substr($isbn_number,4,1));
$sixth_digit = (substr($isbn_number,5,1));
$seventh_digit = (substr($isbn_number,6,1));
$eighth_digit = (substr($isbn_number,7,1));
$ninth_digit = (substr($isbn_number,8,1));
$tenth_digit = (substr($isbn_number,9,1));

# Check to see if X is in the Tenth Digit, and if so set value to 10
if (is_numeric($tenth_digit)) {
}
elseif ($tenth_digit = "x") {
	$tenth_digit = 10;
	}

# Sum of 10x the first ISBN digit, 9x the second digit, 8x the third digit...all the way to 1x the last digit
#echo ($first_digit * 10) + ($second_digit * 9) + ($third_digit * 8) + ($fourth_digit * 7) + ($fifth_digit * 6) + ($sixth_digit * 5) + ($seventh_digit * 4) + ($eighth_digit * 3) + ($ninth_digit * 2) + ($tenth_digit * 1) . "<br>";

# Save return value into a variable
$sum_digits = isbn_validator($first_digit, $second_digit, $third_digit, $fourth_digit, $fifth_digit, $sixth_digit, $seventh_digit, $eighth_digit, $ninth_digit, $tenth_digit);
#echo "Sum of digits is: $sum_digits"; // Sum of digits for debugging

if (($sum_digits % 11) == 0) {
	echo "<br> This is a valid ISBN!";
	}
else {
	echo "<br> This is NOT a valid ISBN!";
	}

function isbn_validator($first, $second, $third, $fourth, $fifth, $sixth, $seventh, $eighth, $ninth, $tenth) {
	$sum_digits = ($first * 10) + ($second * 9) + ($third * 8) + ($fourth * 7) + ($fifth * 6) + ($sixth * 5) + ($seventh * 4) + ($eighth * 3) + ($ninth * 2) + ($tenth * 1);
	return $sum_digits;
}

##########

# Challenge 2: Coin Toss
echo "<h1>Coin Toss</h1>";

#Challenge 2A
echo "<h3>a) Flipping a Coin 1-9 Times</h3>";

# ONE COIN TOSSED
echo "Flipping a coin 1 time...<br>";
$CoinTossResult1 = cointoss();

# THREE COINS TOSSED 
echo "<p>Flipping a coin 3 times...<br>";
# 1st Coin
$CoinTossResult2 = cointoss();
#2nd Coin
$CoinTossResult3 = cointoss();
#3rd Coin
$CoinTossResult4 = cointoss();

# FIVE COINS TOSSED
echo "<p>Flipping a coin 5 times...<br>";
# 1st Coin
$CoinTossResult5 = cointoss();
#2nd Coin
$CoinTossResult6 = cointoss();
#3rd Coin
$CoinTossResult7 = cointoss();
#4th Coin
$CoinTossResult8 = cointoss();
#5th Coin
$CoinTossResult9 = cointoss();

# SEVEN COINS TOSSED
echo "<p>Flipping a coin 7 times...<br>";
# 1st Coin
$CoinTossResult10 = cointoss();
#2nd Coin
$CoinTossResult11 = cointoss();
#3rd Coin
$CoinTossResult12 = cointoss();
#4th Coin
$CoinTossResult13 = cointoss();
#5th Coin
$CoinTossResult14 = cointoss();
#6th Coin
$CoinTossResult15 = cointoss();
#7th Coin
$CoinTossResult16 = cointoss();

# NINE COINS TOSSED
echo "<p>Flipping a coin 9 times...<br>";
# 1st Coin
$CoinTossResult17 = cointoss();
#2nd Coin
$CoinTossResult18 = cointoss();
#3rd Coin
$CoinTossResult19 = cointoss();
#4th Coin
$CoinTossResult20 = cointoss();
#5th Coin
$CoinTossResult21 = cointoss();
#6th Coin
$CoinTossResult22 = cointoss();
#7th Coin
$CoinTossResult23 = cointoss();
#8th Coin
$CoinTossResult24 = cointoss();
#9th Coin
$CoinTossResult25 = cointoss();

function cointoss() {
	$headsORtails = mt_rand(0,1);
	if ($headsORtails == 0) {
		echo "<img src='https://webdevdbcourses.prattsi.org/~jkorns/homework/images/brutus_heads.jpg' alt='heads' style='width:75px;'>";
		}
	elseif ($headsORtails == 1) {
		echo "<img src='https://webdevdbcourses.prattsi.org/~jkorns/homework/images/brutus_tails.jpg' alt='tails' style='width:75px;'>";
		}
	return $headsORtails;
	}


#Challenge 2B
echo "<h3>b) Two Heads in a Row</h3>";
#Counter for Heads Flipped
$HeadsCount = 0;
#Counter for Number of Coin Tosses
$CoinTossCount = 0;
#Heads and Tails of Coin Images
$heads = ("<img src='https://webdevdbcourses.prattsi.org/~jkorns/homework/images/brutus_heads.jpg' alt='heads' style='width:75px;'>");
$tails = ("<img src='https://webdevdbcourses.prattsi.org/~jkorns/homework/images/brutus_tails.jpg' alt='tails' style='width:75px;'>");

#Loop for Coin Tosses
while ($HeadsCount < 2) { 
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

echo "<p>Flipped two heads in a row, in $CoinTossCount flips!";

?>
</body>
</html>