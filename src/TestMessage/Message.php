<?php

namespace TestMessage;

class Message
{
    /**
     * @param string $message
     * @return string
     */
    public static function write(string $message = "Hello world!!!"): string
    {
        return $message;
    }
}