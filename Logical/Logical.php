<?php

echo "Working This Page";
echo "<br>";

// && , || >=

$my_age = 39;
$salary = 40000;
$job = "privat";

if ($my_age >= 25 && $my_age < 30 && $salary >= 20000 && $job == "gov") {
    echo "You are ready to marry a rich and cute girl -- You are: " . $my_age . " " . $salary . " " . $job . "<br>";
} 
elseif (($my_age > 30 && $my_age < 40) && $salary > 30000 && ($job == "gov" || $job == "privat")) {
    echo "You got an older wife<br>";
} 
else {
    echo "Good bye";
}

?>
