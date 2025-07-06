<?php





// Basic Function 
//What is function?
// Ans: A function in programming is a named block of code that does something specific.


// This functiojn Not Return type
function sum(){
    $i = 10;
    $j = 30;
    $sum = $i + $j;
    
    echo $sum;
}

sum(); // Sum is a function






echo "<br>";
echo "<br>";
// Para Meter and Argumrnt
$my_name = "Md.Pranto Islam";
$id = 23303101;
// Not Return Type
function printtt($name, $id){
    echo "Name: " . $name . "<br>";
    echo "My ID: " . $id . "<br>";
}


echo printtt($my_name, $id);
printtt($my_name, $id);




echo "<br>";

// Return Type ---- Function    
function sum1(){
    $sum = 60 + 30;
    return $sum;
}


echo sum1();


?>
