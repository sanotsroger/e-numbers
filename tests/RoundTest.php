<?php

use PHPUnit\Framework\TestCase;
use SanotsRoger\ENumbers\Round;

class RoundTest extends TestCase
{
    /**
     * @test
     *
     * @dataProvider numbersTestCase
     */
    public function shouldRoudNumberToTheABNTRule(float $number, float $numberExpected)
    {
        $numberResult = Round::ruleABNT($number);
        $this->assertEquals($numberExpected, $numberResult);
    }

    public function numbersTestCase()
    {
        return [
            'Test 1' => [0.342, 0.34],
            'Test 2' => [0.346, 0.35],
            'Test 3' => [0.3452, 0.35],
            'Test 4' => [0.3450, 0.34],
            'Test 5' => [0.332, 0.33],
            'Test 6' => [0.336, 0.34],
            'Test 7' => [0.3352, 0.34],
            'Test 8' => [0.3350, 0.34],
            'Test 9' => [0.3050, 0.30],
            'Test 10' => [0.3150, 0.32],
            'Test 11' => [0.31, 0.31],
            'Test 12' => [12.3450001, 12.35],
            'Test 13' => [12.3420001, 12.34],
            'Test 14' => [-0.346, -0.35],
        ];
    }
}
