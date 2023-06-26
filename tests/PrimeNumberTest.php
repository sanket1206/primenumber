<?php

namespace Tests;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use sanket\PrimeNumber;


final class PrimeNumberTest extends TestCase{

    function testPrimeNumbers()
    {
        $this->getPrimeNumbersOf(2, [2]);
        $this->getPrimeNumbersOf(3, [3]);
        $this->getPrimeNumbersOf(4, [2,2]);
        $this->getPrimeNumbersOf(5, [5]);
        $this->getPrimeNumbersOf(6, [2,3]);
        $this->getPrimeNumbersOf(7, [7]);
        $this->getPrimeNumbersOf(8, [2,2,2]);
        $this->getPrimeNumbersOf(9, [3,3]);
        $this->getPrimeNumbersOf(2*2*3*3*5*7*11*11*13, [2,2,3,3,5,7,11,11,13]);
    }

    
    private function getPrimeNumbersOf($number, $listOfPrimes): void
    {
        $test = new PrimeNumber();
        $this->assertEquals($listOfPrimes, $test->getPrimeNumbers($number));
    }

}
