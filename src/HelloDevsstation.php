<?php

namespace Devsstation\HelloDevsstation;

class HelloDevsstation
{
    public function sayHello(String $name='DevsStation'): string
    {
        return 'Hello, ' . $name . '!';
    }
} 