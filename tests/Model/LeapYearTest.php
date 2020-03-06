<?php

namespace Tests\Model;

use App\Model\LeapYear;
use PHPUnit\Framework\TestCase;



class LeapYearTest extends TestCase
{

    private $leapYear;


    public function setUp()
    {
        parent::setUp();
        $this->leapYear = new LeapYear();
    }


    public function leapYearDataProvider()
    {
        yield [400];
        yield [2000];
        yield [2008];
        yield [2012];
        yield [2016];
    }


    /**
     * @dataProvider leapYearDataProvider
     * @param int $year
     */
    public function testShouldBeLeapYear(int $year)
    {
        $errorMessage = "L'année ${year} devrait etre bissextile";
        $this->assertTrue($this->leapYear->isLeapYear($year), $errorMessage);
    }



    public function notLeapYearDataProvider()
    {
        yield [100];
        yield [1700];
        yield [1800];
        yield [2017];
        yield [2018];
        yield [2019];
        yield [2100];
    }

    /**
     * @dataProvider notLeapYearDataProvider
     * @param int $year
     */
    public function testShouldNotBeLeapYear(int $year)
    {
        $errorMessage = "L'année ${year} ne devrait pas etre bissextile";

        $this->assertFalse($this->leapYear->isLeapYear($year), $errorMessage);
    }



}