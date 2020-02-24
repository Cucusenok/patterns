<?php
require "vendor/autoload.php";


use fabricMethod\Coords;
use fabricMethod\TruckMover;
use fabricMethod\AirplaneMover;
use fabricMethod\TransportMover;

function runTransportation(TransportMover $transport): string{
    return $transport->move();
}


$coordsStart = new Coords(10, 20);
$coordsFinish = new Coords(20, 30);


echo '------ AIRPLANE MOVE ------------';
echo '<br>';

echo runTransportation(new AirplaneMover($coordsStart, $coordsFinish));
echo '<br><br><br>';


echo '------ TRUCK MOVE ------------';
echo '<br>';
echo runTransportation(new TruckMover($coordsStart, $coordsFinish));




