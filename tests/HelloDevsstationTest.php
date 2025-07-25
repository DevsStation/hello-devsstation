<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Devsstation\HelloDevsstation\HelloDevsstation;

class HelloDevsstationTest extends TestCase
{
    public function testSayHello()
    {
        $hello = new HelloDevsstation();
        $this->assertEquals('Hello, DevsStation!', $hello->sayHello());
        $this->assertEquals('Hello, SK Paul!', $hello->sayHello('SK Paul'));
    }
} 