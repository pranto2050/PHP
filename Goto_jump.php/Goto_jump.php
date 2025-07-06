



<?php

$id = 100;

if($id > 18){
    goto jump;
}
else{
    echo "Youare not Avable for Voit";
}
// Not Print if the Excute the goto Section
echo "Good Job";


// Do not pring Before Section or any thing " echo "Good Job"   "
jump:
echo "You Are Adult Becouse you are: ". $id . " Years Old";




?>