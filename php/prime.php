<?php

function primeFinder($n){
    if($n==1){
        return 0;
    }
    for($i = 2; $i < $n/2; $i++){
        if($n % $i == 0){
            return 0;
        }
    }
    return 1;
}

$arr = array(7,5,3,52,149,65,99,73,44,80);

foreach($arr as $a){
    $prime = primeFinder($a); 
    if($prime == 1){
        echo "$a <br>";
    }
}

?>