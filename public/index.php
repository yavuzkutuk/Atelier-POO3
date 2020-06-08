<?php

/* Including both daughter classes */
require_once 'Worker.php';
require_once 'Soldier.php';

/* Use them to create objects after */
use Daughter\Worker;
use Daughter\Soldier;

/* Creating array for new objects */
$workerCollection = [];
$soldierCollection = [];

/* Use walk() method with different direction and catch Exception
 * To try it, let's give a bad direction like to put an object off the map;
 */
try {
    /* Creating two object collections */
    for ($i = 0; $i < 11; $i++)
        $workerCollection[] = new Worker();
    for ($i = 0; $i < 11; $i++)
        $soldierCollection[] = new Soldier();

    $soldierCollection[1]->walk("right");
    $soldierCollection[1]->walk("top");
    $soldierCollection[1]->walk("left");
    /* Displaying "A l'attaque !" */
    $soldierCollection[7]->attack();
    /* Displaying "Je travaille !" */
    $workerCollection[8]->work();
    /* Launch Exception "Hors de la carte !" */
    $soldierCollection[1]->walk("left");
}
catch (\Exception $e) {
    echo "Exception from daughter classes : ". $e->getMessage() . "\n";
}
finally {
    echo "Script ending." . "\n";
}