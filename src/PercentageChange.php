<?php

/*
 * This file is part of ssx/php-math-helpers
 *
 *  (c) Scott Wilcox <scott@dor.ky>
 *
 *  For the full copyright and license information, please view the LICENSE
 *  file that was distributed with this source code.
 */

namespace SSX\Util\Math;

/**
 * Class PercentageChange
 * @package SSX\Util\Math
 */
class PercentageChange
{
    /**
     * @var int
     */
    private $answer = 0;

    /**
     * PercentageChange constructor.
     *
     * @param $firstNumber
     * @param $secondNumber
     */
    public function __construct($firstNumber, $secondNumber)
    {
        $this->answer = (1-($firstNumber/$secondNumber)) * 100;
    }

    /**
     * @return mixed
     */
    public function getFloat()
    {
        return (float)$this->answer;
    }

    /**
     * @return number
     */
    public function getAbsolute()
    {
        return (int)abs($this->answer);
    }

    /**
     * @param int $decimalPlaces
     * @return string
     */
    public function getRounded($decimalPlaces = 2)
    {
        return (float)number_format($this->answer, $decimalPlaces);
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return (string)$this->answer;
    }
}
