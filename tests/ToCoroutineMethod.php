<?php declare(strict_types=1);

namespace WyriHaximus\Tests;

use WyriHaximus\Annotations\Coroutine;

final class ToCoroutineMethod
{
    /**
     * @Coroutine()
     */
    public function method(): void
    {
    }
}
