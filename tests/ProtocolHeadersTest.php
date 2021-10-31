<?php

declare(strict_types=1);

namespace Tests;

use InvalidArgumentException;
use PHPUnit\Framework\TestCase;
use Ytake\TrinoClient\ProtocolHeaders;

final class ProtocolHeadersTest extends TestCase
{
    public function testShouldBeSameHeaders(): void
    {
        $headers = new ProtocolHeaders();
        $this->assertSame("PHPTrino", $headers->getProtocolName());
        $this->assertSame("X-PHPTrino-User", $headers->requestUser());
    }

    public function testShouldBeRaisedForUnexpectedValues(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $headers = new ProtocolHeaders("");
    }
}
