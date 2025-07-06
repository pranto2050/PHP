


<?php



// Break Statement is hear
$my = 10;

for($i = 1; $i <= $my; $i++){
    if($i == 5){
        echo "We are find the number is: " . $i. "<br>";
        break;
    }
}


echo "<br>";


// Continue Statement Is here

for($i = 1; $i <= $my; $i++){
    if($i == 5){
        continue;
    }
    echo "Other Number is: ". $i . "<br>";
}



?>