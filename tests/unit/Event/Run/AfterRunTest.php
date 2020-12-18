<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Event\Run;

use PHPUnit\Framework\TestCase;

/**
 * @covers \PHPUnit\Event\Run\AfterRun
 */
final class AfterRunTest extends TestCase
{
    public function testConstructorSetsValues(): void
    {
        $run = new Run();

        $event = new AfterRun($run);

        $this->assertSame($run, $event->run());
    }
}
