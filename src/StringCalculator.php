<?php

namespace Deg540\StringCalculatorPHP;

use function PHPUnit\Framework\isEmpty;

class StringCalculator
{
    public function Add(string $numbers): int
    {
        if(empty($numbers)) {
            return 0;
        }

        $delimiter = ',';

        if(str_starts_with($numbers, '//')){
            $delimiter = substr($numbers, 2,1);
            $numbers = substr($numbers, 3);
        }

        $numbers = str_replace('\n',$delimiter,$numbers);

        if(str_contains($numbers, $delimiter)) {

            return array_sum(explode($delimiter, $numbers));

        }

        return $numbers;
    }
}