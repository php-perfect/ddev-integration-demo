<?php

declare(strict_types=1);

namespace App\Tests;

use App\World;
use PHPUnit\Framework\TestCase;

final class WorldTest extends TestCase
{
    public function testSomething(): void
    {
        self::assertSame('Hello, World!', (new World())->hello());
    }
}
