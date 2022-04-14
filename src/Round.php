<?php

namespace SanotsRoger\ENumbers;

use Decimal\Decimal;

class Round
{
    public static function ruleABNT(float $num)
    {
        $n = new Decimal((string)$num);

        return floatval($n->round(2));
    }
}
