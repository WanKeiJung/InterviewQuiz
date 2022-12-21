<?php

// Example 1
$nums = [1,2,3,4,5,6,7];
$k = 3;

rotate($nums,$k);
print_r($nums); // output the result

function rotate(&$nums,$k){
    do{
        $pop = array_pop($nums); // get & delete the last number from $nums
        array_unshift($nums,$pop); // use $pop as the insert number
        $k--; // count the steps

    }while($k>0);

}


// Example 2
$nums2 = [-1,-100,3,99];
$k2 = 2;

rotate2($nums2,$k2);
print_r($nums2); // output the result

function rotate2(&$nums2,$k2){
    do{
        $pop2 = array_pop($nums2); // get & delete the last number from $nums
        array_unshift($nums2,$pop2); // use $pop as the insert number
        $k2--;  // count the steps

    }while($k2>0);

}
