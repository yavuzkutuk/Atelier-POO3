<?php

namespace Units;

/**
 * Class AbstractUnit
 * @package Units
 */
abstract class AbstractUnit
{
    /**
     * @var array
     */
    protected $position = [0,0];
    /**
     * @var string
     */
    protected $name;

    protected $speed;

    /**
     * AbstractUnit constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
        $this->speed=1;
    }

    /**
     * @return string
     */
    public function __toString()
    {
       return $this->name." <strong>".get_class($this)."</strong> se positionne a cet emplacement : "
           .$this->position[0]." et ".$this->position[1];
    }

    /**
     * @param string $direction
     * @return mixed
     */
    abstract public function walk(string $direction);
}