<?php


namespace Adapter\Services;


use Adapter\Contract\SquareInterface;
use Adapter\Libraries\SquareAreaLib;


class SquareAreaAdapter implements SquareInterface
{
    /**
     * @var SquareAreaLib
     */
    private $squareAreaLib;

    /**
     * SquareAreaAdapter constructor.
     * @param SquareAreaLib $squareAreaLib
     */
    public function __construct(SquareAreaLib $squareAreaLib)
    {
        $this->squareAreaLib = $squareAreaLib;
    }


    function squareArea(int $sideSquare)
    {
        $diagonal = $sideSquare * sqrt(2);
        return $this->squareAreaLib->getSquareArea($diagonal);
    }
}