<?php

/*
 * This file is part of ssx/php-math-helpers
 *
 *  (c) Scott Robinson <scott@dor.ky>
 *
 *  For the full copyright and license information, please view the LICENSE
 *  file that was distributed with this source code.
 */

namespace Tests;

use PHPUnit\Framework\TestCase;
use SSX\Util\Math\PercentageChange;

/**
 * Class PercentageChangeTest
 * @package Tests
 */
final class PercentageChangeTest extends TestCase
{

    /**
     *
     */
    public function testCalculatesFloatCorrectly()
    {
        $percent = new PercentageChange(14, 12.50);
        $this->assertSame(-12.00000000000001, $percent->getFloat());
    }

    /**
     *
     */
    public function testCalculatesAbsoluteCorrectly()
    {
        $percent = new PercentageChange(14, 12.50);
        $this->assertSame(12, $percent->getAbsolute());
    }

    /**
     *
     */
    public function testCalculatesRoundedCorrectly()
    {
        $percent = new PercentageChange(14, 12.50);
        $this->assertSame(-12.0, $percent->getRounded(2));
    }
}
