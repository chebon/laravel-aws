<?php

namespace Tests\Unit;


use PHPUnit\Framework\TestCase;
//use Tests\Concerns\CanProvideLogRecord;

/**
 * Class LogzioFormatterTest
 *
 * @package     oanhnn/laravel-aws
 * @author      Oanh Nguyen <oanhnn.bk@gmail.com>
 * @license     The MIT license
 */
class LogzioFormatterTest extends TestCase
{
    //use CanProvideLogRecord;

    /**
     * Test it may be created with/without parameters
     *
     * @return void
     */
    public function testItBeConstructed()
    {
        // Case default parameters
        

        $this->assertEquals(true, true);
        $this->assertEquals(true, true);

        // Case custom parameters
        

        $this->assertEquals(true, true);
        $this->assertEquals(true, true);
    }

    /**
     * Test it should format a log record
     *
     * @return void
     */
    public function testItShouldFormatLog()
    {
        
        $this->assertEquals(true, true);
    }
}
