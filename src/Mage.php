<?php

namespace Units;

use Interfaces\AttackableInterface;

class Mage extends AbstractUnit implements AttackableInterface
{

    /**
     * Peasant constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {
        parent::__construct($name);
    }

    /**
     * @return string
     */
    public function spell()
    {
        return $this->name." te jette une boule de feu";
    }

    /**
     * @return string
     */
    public function attack()
    {
        return $this->name." attaque!";
    }

    /**
     * @param string $direction
     * @return mixed|void
     * @throws Exception
     */
    public function walk(string $direction)
    {
        if ($direction === "right") {
            $this->position[0] += $this->speed;
        } elseif ($direction === "left") {
            $this->position[0] -= $this->speed;
        } elseif ($direction === "top") {
            $this->position[1] += $this->speed;
        } elseif ($direction === "bottom") {
            $this->position[1] -= $this->speed;
        }else{
            throw new \Exception("Direction pas possible. (Choisir entre Left, Right, Top & Bottom)");
        }
    }
}