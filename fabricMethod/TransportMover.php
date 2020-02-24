<?php


namespace fabricMethod;


use fabricMethod\AbstractTransport;
use fabricMethod\Coords;

abstract class TransportMover
{
    protected $coordsStart, $coordsFinish;


    public function __construct(Coords $coordsStart, Coords $coordsFinish)
    {
        $this->coordsStart = $coordsStart;
        $this->coordsFinish = $coordsFinish;
    }


    abstract public function getTransport():AbstractTransport;


    public function move():string{
       return $this->getTransport()
            ->move($this->coordsStart, $this->coordsFinish);
    }

}