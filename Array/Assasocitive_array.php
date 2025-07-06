





<?php
// His Array want some Key
// This Array every element wants Key. Example: $user = ["name" => "Pranto", "ID" => "23303101"] Like this


$useres = [
    "name" => "Pranto",
    "Age" => 24,
    "City" => "Dhaka",
    "Mobile" => "01979728818"  // Note the quotes
];

// Get Output
echo $useres["name"] . "<br>";
echo $useres["Mobile"] . "<br>";



// Loop Using

//foreach($useres as $value){
//    echo $value . "<br>";
//};

// Show Array Key

//foreach($useres as $key => $value){
//    echo $key . "<br>";
//};

// Show Array Key and Data

foreach($useres as $key => $value){
    echo $key . " Is ". $value . "<br>";
};















?>

