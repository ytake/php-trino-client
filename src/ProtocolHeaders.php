<?php

declare(strict_types=1);

namespace Ytake\TrinoClient;

use InvalidArgumentException;

use function strlen;
use function sprintf;

final class ProtocolHeaders
{
    private string $name;
    private string $prefix;

    /**
     * @param string $name
     */
    public function __construct(
        string $name = "PHPTrino"
    ) {
        $this->name = match (strlen($name)) {
            0 => throw new InvalidArgumentException("name is empty"),
            default => $name
        };
        $this->prefix = sprintf("X-%s-", $name);
    }

    public function getProtocolName(): string
    {
        return $this->name;
    }

    public function requestUser(): string
    {
        return $this->prefix . "User";
    }
}
