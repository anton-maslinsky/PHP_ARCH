<?php


namespace Adapter\Services;

use Adapter\Contract\CircleInterface;
use Adapter\Libraries\CircleAreaLib;


class CircleAreaAdapter implements CircleInterface
{
    /**
     * @var CircleAreaLib
     */
    private $circleAreaLib;

    /**
     * CircleAreaAdapter constructor.
     * @param $circleAreaLib
     */
    public function __construct(CircleAreaLib $circleAreaLib)
    {
        $this->circleAreaLib = $circleAreaLib;
    }

    /**
     * @param int $circumference
     * @return float|int
     */
    function circleArea(int $circumference)
    {
        $diagonal = $circumference / M_PI;
        return $this->circleAreaLib->getCircleArea($diagonal);
    }
}