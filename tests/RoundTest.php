<?php

use PHPUnit\Framework\TestCase;
use SanotsRoger\ENumbers\Round;

class RoundTest extends TestCase
{
    /**
     * @test
     */
    public function shouldRoudNumberToTheABNTRule()
    {
        $numberExpected = Round::ruleABNT(0.342);
        $this->assertEquals(0.34, $numberExpected);

        $numberExpected = Round::ruleABNT(0.346);
        $this->assertEquals(0.35, $numberExpected);

        $numberExpected = Round::ruleABNT(0.3452);
        $this->assertEquals(0.35, $numberExpected);

        $numberExpected = Round::ruleABNT(0.3450);
        $this->assertEquals(0.34, $numberExpected);

        $numberExpected = Round::ruleABNT(0.332);
        $this->assertEquals(0.33, $numberExpected);

        $numberExpected = Round::ruleABNT(0.336);
        $this->assertEquals(0.34, $numberExpected);

        $numberExpected = Round::ruleABNT(0.3352);
        $this->assertEquals(0.34, $numberExpected);

        $numberExpected = Round::ruleABNT(0.3350);
        $this->assertEquals(0.34, $numberExpected);

        $numberExpected = Round::ruleABNT(0.3050);
        $this->assertEquals(0.30, $numberExpected);

        $numberExpected = Round::ruleABNT(0.3150);
        $this->assertEquals(0.32, $numberExpected);

        $numberExpected = Round::ruleABNT(0.31);
        $this->assertEquals(0.31, $numberExpected);

        $numberExpected = Round::ruleABNT(12.3450001);
        $this->assertEquals(12.35, $numberExpected);

        $numberExpected = Round::ruleABNT(12.3420001);
        $this->assertEquals(12.34, $numberExpected);
    }
}
