<?php

namespace SanotsRoger\ENumbers;

class Round
{
    public static function ruleABNT(float $num): float
    {
        $num_arr = explode('.', $num);

        if (!isset($num_arr[1]) || (strlen($num_arr[1]) < 3)) {
            return $num;
        }

        $units = ltrim($num_arr[0], 0);
        $cents = substr($num_arr[1], 0, 2);
        $extra = rtrim(substr($num_arr[1], 2), 0);
        $mils = substr($extra, 0, 1);

        if (($mils < 5) || (($extra == 5) && !($cents % 2))) {
            $number_round = $units . '.' . $cents;
        } else {
            $number_round = round($num, 2, PHP_ROUND_HALF_UP);
        }

        return number_format($number_round, 2, '.', '');
    }
}
