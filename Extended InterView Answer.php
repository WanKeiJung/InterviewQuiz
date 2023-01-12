<?php


$s = "is2 sentence4 This1 a3";

$new_s = explode(' ',$s);

echo "<pre>";
var_dump($new_s);




foreach ($new_s as $new){

    $result[] =  substr($new,0,-1); // 2 4 1 3

}


sort($result);
echo implode(' ', $result);

