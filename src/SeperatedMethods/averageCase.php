<?php
function digits_sequence($n,$num1= 0,$num2= 1)
{
    if ($n<=1) {
        return $n;
    }
    $counter= 1; 
    while($counter < $n){
        $num3= array_sum(str_split($num2))+array_sum(str_split($num1));
        $num1= array_sum(str_split($num2));
        $num2=$num3;
        $counter++;
        }
    return $num3;
}

echo digits_sequence(10);

// Time complexity : O n