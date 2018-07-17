<?php declare(strict_types=1);

namespace WyriHaximus;

use Doctrine\Common\Annotations\Reader;
use WyriHaximus\Annotations\Coroutine;

function toCoroutineOrNotToCoroutine(string $callable, Reader $annotationReader = null): bool
{
    return toXOrNotToX(Coroutine::class, $callable, $annotationReader);
}
