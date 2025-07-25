<?php

declare(strict_types=1);

namespace Devsstation\HelloDevsstation;

/**
 * HelloDevsstation class
 *
 * This class is used to say hello to the world
 *
 * @package Devsstation\HelloDevsstation
 */
class HelloDevsstation
{
    /**
     * Say hello to the world
     *
     * @param string $name The name to say hello to
     * @return string The hello message
     */
    public function sayHello(string $name = 'DevsStation'): string
    {
        return 'Hello, ' . $name . '!';
    }
}
