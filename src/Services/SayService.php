<?php

declare(strict_types=1);

namespace App\Services;

class SayService
{
    /**
     * @param string $message
     * @return string
     */
    public function say(string $message): string
    {
        return $message;
    }
}
