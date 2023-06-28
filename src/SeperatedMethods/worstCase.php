<?php
function digits_sequence($num){   
    if($num <= 1){  
    return $num;
}  else {  
return (array_sum(str_split(digits_sequence($num-1))) + array_sum(str_split(digits_sequence($num-2))));  
}   
}  
echo digits_sequence(2);  
// Time complexity : O 2^n