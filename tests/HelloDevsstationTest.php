<?php

declare(strict_types=1);

namespace Devsstation\HelloDevsstation\Tests;

use PHPUnit\Framework\TestCase;
use Devsstation\HelloDevsstation\HelloDevsstation;

/**
 * HelloDevsstationTest class
 *
 * This class is used to test the HelloDevsstation class
 *
 * @package Devsstation\HelloDevsstation
 */
class HelloDevsstationTest extends TestCase
{
    /**
     * Test the sayHello method
     *
     * @return void
     */
    public function testSayHello(): void
    {
        // Test the instance method
        $hello = new HelloDevsstation();
        // Test the default name
        $this->assertEquals('Hello, DevsStation!', $hello->sayHello());
        // Test the name as an argument with a different name
        $name = 'SK Paul';
        $this->assertEquals('Hello, ' . $name . '!', $hello->sayHello($name));

        // Test the static method
        $this->assertEquals('Hello, DevsStation!', HelloDevsstation::sayHello());
        $this->assertEquals('Hello, ' . $name . '!', HelloDevsstation::sayHello($name));
    }
}
