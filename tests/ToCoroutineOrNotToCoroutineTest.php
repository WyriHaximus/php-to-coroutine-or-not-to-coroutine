<?php declare(strict_types=1);

namespace WyriHaximus\Tests;

use ApiClients\Tools\TestUtilities\TestCase;
use function WyriHaximus\toCoroutineOrNotToCoroutine;

/**
 * @internal
 */
final class ToCoroutineOrNotToCoroutineTest extends TestCase
{
    public function provideTestsAndExpectedResults(): iterable
    {
        yield [
            ToCoroutineMethod::class . '::method',
            true,
        ];

        yield [
            ToNotCoroutineMethod::class . '::method',
            false,
        ];
    }

    /**
     * @dataProvider provideTestsAndExpectedResults
     */
    public function tests(string $callable, bool $expectedResult): void
    {
        self::assertSame($expectedResult, toCoroutineOrNotToCoroutine($callable));
    }
}
