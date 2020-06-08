<?php

/**
 * Unit abstract class
 *
 * PHP Version 7.2
 *
 * @category Abstract
 * @package  Class
 * @author   Yavuz KUTUK <yavuz@wildcodeschool.fr>
 */

namespace Unit;

/**
 * Unit class.
 *
 * @category Abstract
 * @package  Class
 * @author   Yavuz KUTUK <yavuz@wildcodeschool.fr>
 */
abstract class AbstractUnit
{
    private $lifePoint;
    protected $position;

    /**
     * Mother construct with two declarations
     */
    public function __construct()
    {
        $this->position = [0, 0];
        $this->lifePoint = 0;
    }

    /**
     * Displaying object's positions
     *
     * @return string Returning object name with its positions
     */
    public function __toString(): string
    {
        return get_class($this) . " object position : x ["
            .$this->position[0]."] y ["
            .$this->position[1]."].\n";
    }

    /**
     * Displaying object's positions
     *
     * @param string $direction A given direction
     *
     * @return void None is returned
     */
    abstract public function walk(string $direction): void;
}