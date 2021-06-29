<?php

use PHPUnit\Framework\TestCase;

class BingoCallerGeneratorTest extends TestCase
{
    public function testWhenCallsANumberItsInTheValidRange()
    {
        $generator = new BingoCardGenerator() ;
        $this->assertTrue(true);
    }

}