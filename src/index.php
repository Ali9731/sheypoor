<?php 

require_once(__DIR__.'\Digits.php');
use Alisina\Sheypoor\Digits;


$digits=new Digits;
echo  'mod method(6): '.$digits->digits_sequence_mod(6)."\n";


echo  'while method(6): '.$digits->digits_sequence_while(6)."\n";


echo  'recursive method(6): '.$digits->digits_sequence_recursive(6)."\n";