

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condition</title>
</head>
<body>



<?php

$age = 33;

if ($age >= 18) {
    echo "You are eligible to vote.";
} else {
    echo "You are not eligible to vote.";
}

// Nastade if Else
if ($age >= 18) {
    if($age >= 21){
        echo "You are eligible to vote. ". "You Mast Give Vot " . $age . "<br>";
    }
    else{
        echo "Bolod" . "<br>";
    }
    echo "You are eligible to vote." . "<br>";
} 
else if ($age < 18) {
    if($age < 10){
        echo "Babby" . "<br>";
    }
    else{
        echo "You are not eligible to vote." . "<br>";
    }
}
else{
    echo "Error" . "<br>";
}






?>