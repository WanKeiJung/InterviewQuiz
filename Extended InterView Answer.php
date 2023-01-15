<?php
$s = "Myself2 Me1 I4 and3";

$new_s = explode(' ',$s);

//echo "<pre>";
//var_dump($new_s);

$data = [];

for($i = 0; $i<count($new_s); $i++){

    $result = preg_replace('/[0-9]+/', ' ', $new_s[$i]);
    $data[substr($new_s[$i],-1)] =  $result;
}


ksort($data);

for($i = 0; $i<count($data); $i++){
    echo $data[$i+1];
}


