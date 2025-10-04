<?php

declare(strict_types=1);

namespace RobotsDreams\ProjectTemplate\App\Service;

class TestService
{
    public function invert(bool $value): bool
    {
        return !$value;
    }
}
