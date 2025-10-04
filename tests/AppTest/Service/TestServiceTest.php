<?php

declare(strict_types=1);

namespace RobotsDreams\ProjectTemplate\AppTest\Service;

use App\Service\TestService;
use Generator;
use PHPUnit\Framework\ExpectationFailedException;
use PHPUnit\Framework\MockObject\Exception;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\MockObject\RuntimeException as MockRuntimeException;
use PHPUnit\Framework\TestCase;

class TestServiceTest extends TestCase
{
    public function getTestService(): TestService
    {
        return new TestService();
    }

    public function dataProviderTestInvert(): Generator
    {
        yield [true, false];
        yield [false, true];
    }

    /**
     * @dataProvider dataProviderTestInvert
     */
    public function testFindByEntryId(bool $input, bool $expectedResult): void
    {
        $testService = $this->getTestService();

        $actualResult = $testService->invert($input);

        $this->assertSame($expectedResult, $actualResult);
    }
}
