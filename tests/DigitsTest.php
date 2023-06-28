<?php

namespace Alisina\Sheypoor;

use PHPUnit\Framework\TestCase;
use Alisina\Sheypoor\Digits;
class DigitsTest extends TestCase
{
    public function test_recursive_digits_sequence()
    {
        $digits = new Digits();
    
        $this->assertSame(0, $digits->digits_sequence_recursive(0));
        $this->assertSame(8, $digits->digits_sequence_recursive(6));
        $this->assertSame(10, $digits->digits_sequence_recursive(10));
        
    }
    public function test_digits_sequence_with_wile()
    {
        $digits = new Digits();
    
        $this->assertSame(0, $digits->digits_sequence_while(0));
        $this->assertSame(8, $digits->digits_sequence_while(6));
        $this->assertSame(10, $digits->digits_sequence_while(10));
        
    }
    public function test_digits_sequence_with_mod()
    {
        $digits = new Digits();
    
        $this->assertSame(0, $digits->digits_sequence_mod(0));
        $this->assertSame(8, $digits->digits_sequence_mod(6));
        $this->assertSame(10, $digits->digits_sequence_mod(10));
        
    }
}