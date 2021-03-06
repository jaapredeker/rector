<?php

declare(strict_types=1);

namespace Rector\CodingStyle\Tests\Rector\FuncCall\FunctionCallToConstantRector;

use Iterator;
use Rector\CodingStyle\Rector\FuncCall\FunctionCallToConstantRector;
use Rector\Testing\PHPUnit\AbstractRectorTestCase;

final class FunctionCallToConstantRectorTest extends AbstractRectorTestCase
{
    /**
     * @dataProvider provideDataForTest()
     */
    public function test(string $file): void
    {
        $this->doTestFile($file);
    }

    public function provideDataForTest(): Iterator
    {
        return $this->yieldFilesFromDirectory(__DIR__ . '/Fixture');
    }

    protected function getRectorsWithConfiguration(): array
    {
        return [
            FunctionCallToConstantRector::class => [
                '$functionsToConstants' => [
                    'php_sapi_name' => 'PHP_SAPI',
                    'pi' => 'M_PI',
                ],
            ],
        ];
    }
}
