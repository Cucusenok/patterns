<?php


namespace fabricMethod;

use fabricMethod\AbstractTransport;
use fabricMethod\Truck;

final class TruckMover extends TransportMover
{

    public function getTransport(): AbstractTransport
    {
        return new Truck();
    }

}