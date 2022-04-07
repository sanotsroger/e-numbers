<?php

use PHPUnit\Framework\TestCase;

class RoundTest extends TestCase
{
    /**
     * @test
     */
    public function shouldRoudNumberToTheABNTRule()
    {
        $numberExpected = Round::ruleABNT(0.342);
        $this->assertEquals(0.34, $numberExpected);
    }
}
