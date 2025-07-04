<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



<?php

$first_number = 10;
echo " The first number is: ". $first_number . "<br>";
$secound_number = 10;
echo " The secound number is: ". $secound_number . "<br>";
$number = $first_number + $secound_number;
echo " The sum of the two numbers is: ". $number . "<br>";


echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";


$number_one = 10;
$number_two = 20;
$number_three = 30;
$number_four = 40;
$number_five = 50;

$result_One = $number_one + $number_two ;
$result_Two = $result_One + $number_three ;
$result_Three = $result_Two - $number_one;
$result_four = $result_Three * $result_One;

echo " The result of the first calculation is: ". $result_four . "<br>";
echo " The result of the second calculation is: ". $result_Three . "<br>";
echo " The result of the third calculation is: ". $result_Two . "<br>";
echo " The result of the fourth calculation is: ". $result_One;



?>


    
</body>
</html>