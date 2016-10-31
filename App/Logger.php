<?php

namespace App;

use Psr\Log\LoggerInterface;
use Psr\Log\LoggerTrait;

class Logger
    implements LoggerInterface
{
    use LoggerTrait;

    /**
     * Logs with an arbitrary level.
     *
     * @param mixed $level
     * @param string $message
     * @param array $context
     *
     * @return void
     */
    public function log($level, $message, array $context = array())
    {
        // TODO: Implement log() method.
    }
}