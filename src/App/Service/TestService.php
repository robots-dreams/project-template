<?php

declare(strict_types=1);

namespace App\Service;

/**
 * TEST
 */
class TestService
{
    public function invert(bool $value): bool
    {
        return !$value;
    }

    public function methodWithBooleanArgumentFlag($flag = true): bool
    {
        return true;
    }

    function methodWithNotTypedArgument($userId)
    {
        return $userId;
    }
}
