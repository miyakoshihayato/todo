<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $config = new \Bbs\Config\Config();
        $this->assertEquals('/Users/miyakoshihayato/Desktop/workspace3/todo/bbs/text/', $config->get_file_directory());
    }
}
