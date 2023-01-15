<?php

// Example 1
$nums = [1,2,3,4,5,6,7];
$k = 3;

quiz($nums,$k);
print_r($nums); // output the result


// Example 2
$nums = [-1,-100,3,99];
$k = 2;

quiz($nums,$k);
print_r($nums); // output the result


function quiz(&$nums,$k){
    do{
        $pop = array_pop($nums); // get & delete the last number from $nums
        array_unshift($nums,$pop); // use $pop as the insert number
        $k--; // count the steps

    }while($k>0);

}





