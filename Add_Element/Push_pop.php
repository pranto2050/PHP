




<?php
// Data Push of array

echo "Page Working". "<br>";
echo "<br>";

$arr = ["Pranto","Santo","roktim","Samin", "Sajib"];

array_push($arr,"ruddho","Sabbir","Ashik"); // Data Push Inside in this array => Add element in this array Last Position
array_pop($arr); // Data remove Inside in this array => Remove element in this array Last Position

array_splice($arr,-2); // Remove Last 2 Element

foreach($arr as $value){
    echo $value. "<br>";
}



?>