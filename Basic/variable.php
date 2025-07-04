


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



<?php



// variable $my = 10 > This is integer type variable
// variable $my = "10" > This is string type variable
// variable $my = 10.5 > This is float type variable
// variable $my = true > This is boolean type variable
// variable $my = false > This is boolean type variable
// variable $my = null > This is null type variable
// variable $my = array(1,2,3) > This is array type variable

echo " Hellow World " . "<br>"; // This is string type variable
echo 12  . "<br>"; // This is integer type variable
echo 12.5  . "<br>"; // This is float type variable
echo true  . "<br>"; // This is boolean type variable
echo false  . "<br>"; // This is boolean type variable
echo null ; // This is null type variable
$arr = array(1, 2, 3);
echo implode(", ", $arr). "<br>";







# Constaint Variable
define("PI", 3.14); // This is constaint variable
echo "This is the constaint variable value of PI is: ". PI . "<br>";

// Or
const PIE = 3.1416;
echo "This is the constaint variable value of PI is: ". PIE . "<br>";


// Line Gap
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";


// Variable

$nyName = "Md.Pranto";
$myID = 23303101;
$myAge = 25;
$myAge = "01979728818";
$myCG = 3.63;
$single = true;


// Print Variable
echo "My name is: " . $nyName . "<br>";
echo "My ID is: " . $myID . "<br>";
echo "My Age is: " . $myAge . "<br>";
echo "My CG is: " . $myCG . "<br>";
echo "Am I single: " . $single . "<br>";
echo "<br>";
echo "<br>";
echo " Data Type In Php" . "<br>";
echo var_dump($nyName) . "<br>";
echo var_dump($myID) . "<br>";
echo var_dump($myAge) . "<br>";
echo var_dump($myCG) . "<br>";
echo var_dump($single) . "<br>";
//  Line Gap
echo "<br>";
echo "<br>";


// Chack Variable type
echo var_dump($nyName);



?>

