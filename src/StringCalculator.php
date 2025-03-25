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

        if(strpos($numbers, ',')) {
            $numbers = explode(',\n', $numbers);
            return array_sum($numbers);

        }

        return $numbers;
    }
}