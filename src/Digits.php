<?php 
namespace Alisina\Sheypoor;

class Digits
{
    const MAX = 1000000000;
    const MIN = 0;
    // ---------------Best Case------------
    public function digits_sequence_mod($n){ 
        self::validate($n);

          // in this series of numbers , numbers will repeat every 24 numbers and its a cycle.
        if ($n==0) return 0;
        if($n<25){              //the first cycle will be like this: 0,1,1,2,3,5,8,13,12,7,10,8,9,17,17,16,15,13,10, 5,6,11,8,10,9
            $arr= [1,1];
            $index = $n-2 ;
        }else{                  //after the first cycle all cycles will be like this: 10,10,2,3,5,8,13,12,7, 10, 8, 9,17,17,16,15,13,10, 5,6,11,8,10,9
            $arr=[10,10];
            $index = $n%24 -2 ; // so we can create an array and choose the index.($n mod 24) will be the number of index
        }
        $counter= 1; 

            while($counter <= $index)
            {
                $newIndex=array_sum(str_split($arr[$counter]))+array_sum(str_split($arr[$counter-1]));
                array_push($arr,$newIndex);
                $counter++;
            }
        return end($arr);
    }
    // Time complexity : O n mod 24  --> in the worst case it will be : O(23)

    // if you give 1000,000,000 it will be : O 16

    // if we want to write the fastest way we can define the repeating cycle as two Constants for less than 24 and more than 24


    // ---------------Average Case------------
    public function digits_sequence_while($n){
        self::validate($n);
        if ($n<=1) {
            return $n;
        }
        $num1= 0;
        $num2= 1;
        $counter= 1; 
        while($counter < $n){
            $num3= array_sum(str_split($num2))+array_sum(str_split($num1));
            $num1= array_sum(str_split($num2));
            $num2=$num3;
            $counter++;
            }
        return $num3;
    }
    // Time complexity : O n


    // ---------------Worst case------------
    public function digits_sequence_recursive($n) {
        //we cant validate here because the validation function runs in every recursive calls
        if($n <= 1){  
            return $n;    
        }  else {  
            return (array_sum(str_split($this->digits_sequence_recursive($n-1))) + array_sum(str_split($this->digits_sequence_recursive($n-2))));  
        }   
    }
    // Time complexity : O 2^n


    protected static function validate($n)
    {
        if (!is_integer($n)) {
            throw new \InvalidArgumentException('Application only accepts integers. Input was: ' . $n);
        }

        if ($n < self::MIN or $n > self::MAX) {
            throw new \OutOfRangeException('Input must be a between '.self::MIN.' and ' . self::MAX);
        }
    }
}