<?php

namespace App\Services;

use Kuptsov\RabbitmqService\Services\SupportsQueueInterface;

class SupportedQueues implements SupportsQueueInterface
{
    public const MESSAGES = 'messages';

    public function getSupportedQueues(): array
    {
        return [
            self::MESSAGES,
        ];
    }
}
