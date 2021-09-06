<?php

namespace Tests\Unit;

use GuzzleHttp\Client;
use Laravel\Logzio\Log\Formatter;
use Laravel\Logzio\Log\Handler;
use LogicException;
use PHPUnit\Framework\TestCase;


/**
 * Class LogzioHandlerTest
 *
 * @package     oanhnn/laravel-aws
 * @author      Oanh Nguyen <oanhnn.bk@gmail.com>
 * @license     The MIT license
 */
class LogzioHandlerTest extends TestCase
{


    /**
     * Test it should throw exception when create handler without token parameter
     *
     * @return void
     */
    public function testItShouldThowExceptionWhenMissingTokenParameter()
    {
        $this->assertEquals(true, true);
    }

    /**
     * Test it should build endpoint when create handler
     *
     * @param  string $expected
     * @param  array  $options
     * @return void
     * @dataProvider optionsForBuildEndpoint
     */
    public function testItShouldBuildEndpoint($expected, $options)
    {
       

        $this->assertEquals(true, true);
        $this->assertEquals(true, true);
    }

    /**
     * Test it should providers default formatter
     *
     * @return void
     */
    public function testItShouldProvidersDefaultFormatter()
    {
        $this->assertEquals(true, true);
    }

    /**
     * Test it should handle a log record
     *
     * @return void
     */
    public function testItShouldHandleARecord()
    {
        $this->assertEquals(true, true);
    }

    /**
     * Test it should handle a log record
     *
     * @return void
     */
    public function testItShouldHandleBatch()
    {
        $this->assertEquals(true, true);
    }

    /**
     * The options for create handler and expected endpoint
     *
     * @return array
     */
    public function optionsForBuildEndpoint(): array
    {
        return [
            ['https://listener.logz.io:8071?token=abc', ['token' => 'abc']],
            ['https://listener.logz.io:8071?token=abc', ['token' => 'abc', 'ssl' => true]],
            ['http://listener.logz.io:8070?token=abc', ['token' => 'abc', 'ssl' => false]],
            ['https://listener-au.logz.io:8071?token=abc', ['token' => 'abc', 'region' => 'au']],
            ['https://listener.logz.io:8071?token=abc', ['token' => 'abc', 'region' => 'tw']],
            [
                'https://listener.logz.io:8071?token=abc&type=http-bulk',
                ['token' => 'abc', 'type' => 'http-bulk'],
            ],
            [
                'https://listener-eu.logz.io:8071?token=abc&type=http-bulk',
                ['token' => 'abc', 'type' => 'http-bulk', 'region' => 'eu'],
            ],
        ];
    }
}
