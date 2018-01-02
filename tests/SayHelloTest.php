<?php

use Aidenko\HelloWorld\SayHello;

class SayHelloTest extends PHPUnit_Framework_TestCase
{
    public function testSayHelloWorld()
    {
        $this->assertTrue(is_string(SayHello::world()));
    }
}