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

        $numbers = str_replace('\n',',',$numbers);

        if(strpos($numbers, ',')) {

            return array_sum(explode(',', $numbers));

        }

        return $numbers;
    }
}