<?php

require_once __DIR__."/../src/AbstractUnit.php";
require_once __DIR__."/../src/Interfaces/WorkerableInterface.php";
require_once __DIR__."/../src/Interfaces/AttackableInterface.php";
require_once __DIR__."/../src/Peasant.php";
require_once __DIR__."/../src/Builder.php";
require_once __DIR__."/../src/Archer.php";
require_once __DIR__."/../src/Mage.php";

use Units\Peasant;
use Units\Builder;
use Units\Archer;
use Units\Mage;

$bruno = new Peasant('Bruno');
$regis = new Builder('Régis');
$gaspard = new Archer('Gaspard');
$rene = new Mage('René');

try{
    $bruno->walk("right");
    $regis->walk("top");
    $gaspard->walk("right");
    $rene->walk("top");
}catch(\Exception $e){
    echo "<br/>Catch: ".$e->getMessage();
}finally{
    echo "<br/>".$bruno;
    echo "<br/>".$regis;
    echo "<br/>".$gaspard;
    echo "<br/>".$rene;
}
