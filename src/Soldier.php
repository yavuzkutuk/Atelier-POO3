<?php

/**
 * Soldier class.
 */

namespace Daughter;

require_once 'AbstractUnit.php';
require_once 'Interfaces/SoldierInterface.php';

use Interfaces\SoldierInterface;
use Unit\AbstractUnit;

class Soldier extends AbstractUnit implements SoldierInterface
{
    /**
     * Construct a soldier after calling Unit's construct
     */
    public function __construct()
    {
        /* Calling Unit's constructor */
        parent::__construct();

        echo "Prêt à combattre !" . "\n";
    }

    /**
     * Displaying an attack message
     *
     * @return void None is returned
     */
    public function attack(): void
    {
        echo "A l'attaque !" . "\n";
    }

    /**
     * Displaying object's positions
     *
     * @param string $direction A given direction
     *
     * @throws \Exception Exception if the given direction is false or off map
     * @return void None is returned
     */
    public function walk(string $direction): void
    {
        if ($direction === "right") {
            $this->position[0] += 1;
        } elseif ($direction === "left") {
            $this->position[0] -= 1;
        } elseif ($direction === "top") {
            $this->position[1] += 1;
        } elseif ($direction === "bottom") {
            $this->position[1] -= 1;
        } else {
            throw new \Exception("Given direction is false.");
        }

        if ($this->position[0] < 0 || $this->position[1] < 0)
            throw new \Exception("Hors de la carte !");
    }
}