<?php

namespace sanket;

use InvalidArgumentException;


class PrimeNumber {

    
    function getPrimeNumbers($number)
    {
        $listOfPrimes = [];
        for ($divisor=2; $number > 1; $divisor ++)
            for( ; $number%$divisor === 0; $number /= $divisor)
               $listOfPrimes[] = $divisor;
        return $listOfPrimes;
    }
}