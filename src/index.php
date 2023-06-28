<?php 

require_once(__DIR__.'\Digits.php');
use Alisina\Sheypoor\Digits;


$digits=new Digits;
echo  $digits->digits_sequence_mod(6)."\n";


echo  $digits->digits_sequence_while(6)."\n";


echo  $digits->digits_sequence_recursive(6)."\n";