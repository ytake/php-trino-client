<?php

declare(strict_types=1);

namespace Ytake\TrinoClient;

use InvalidArgumentException;
use Throwable;

final class Preconditions
{
    /**
     * @param bool $condition
     * @param string $message
     * @param int $code
     * @param Throwable|null $previous
     */
    public static function checkArgument(
        bool $condition,
        string $message,
        int $code = 0,
        Throwable $previous = null
    ): void {
        if (!$condition) {
            throw new InvalidArgumentException($message, $code, $previous);
        }
    }
}
