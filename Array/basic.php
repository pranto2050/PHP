



<?php

// Array is. the collaction of the Data... Array ia collaction Of data in single variable--
// Type of Array:
// 1 . Indexed array:   Simple From
// 2. Assicutive Array: Key and Value
// 3. Multidimontion Array




//$student = ["Santo","Prappo","Rohan", "Sanzit", "Minin", "Mehain", "Sazin", "Tamim"];
//
//// Array Length Chack Used count(array_name)
//echo count($student);
//
//echo "Is this array if this arrsy output 1 or not array out put 0 Output is: = ". is_array($student) . "<br>";
//
//// Loop Used And output ---> And use Style color
//for($i = 0; $i < count($student); $i++){
//    
//    echo "<h2 style='color:red; font-size:20px;'>". $student[$i] ."</h2>";
//}
//





// ---------- Advanced ----------


$student = ["Santo","Prappo","Rohan", "Sanzit", "Minin", "Mehain", "Sazin", "Tamim"];

// Array Length Chack Used count(array_name)
echo count($student);

echo "Is this array if this arrsy output 1 or not array out put 0 Output is: = ". is_array($student) . "<br>";

// Loop Used And output ---> And use Style color
for($i = 0; $i < count($student); $i++){
    if($i%2==0){
        echo "<h2 style='color:red; font-size:20px;'>". $student[$i] ."</h2>";
    }
    else{
        echo "<h2 style='color:green; font-size:20px;'>". $student[$i] ."</h2>";
    }
    
}


?>