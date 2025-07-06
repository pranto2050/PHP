




<?php


function sum($num1 = 1, $num2 = 1){ // Here is $num1 = 1 and $num2 = 1 Bought are Default Argument 
    $sum = $num1 + $num2;
    return $sum;
}


echo sum() . "<br>"; // Call function with no parameter
echo sum(19,49) . "<br>"; // Call function with 2 Parameter


?>