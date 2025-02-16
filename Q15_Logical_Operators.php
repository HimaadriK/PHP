<?php
	$year = 2024;
	if(($year % 400 == 0) || ($year % 100 != 0) && ($year % 4 == 0)) 
	{
		echo "$year is a leap year.";
	}
	else
	{
		echo "$year is not a leap year.";
	}
echo "<br>";
echo "This program is executed by Himaadri Kapoor, 2220100224";?>