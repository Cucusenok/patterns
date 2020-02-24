<?php


namespace fabricMethod;


use fabricMethod\TransportMover;
use fabricMethod\Airplane;

/**
 * Class AirplaneMover
 * @package fabricMethod
 * Coords $coordsStart
 * Coords $coordsFinish
 */
final class AirplaneMover extends TransportMover
{
    protected $coordsStart, $coordsFinish;

    public function __construct(Coords $coordsStart, Coords $coordsFinish)
    {

        $this->coordsStart = $coordsStart;
        $this->coordsFinish = $coordsFinish;
    }


    public function getTransport(): AbstractTransport
    {
        return new Airplane();
    }

}