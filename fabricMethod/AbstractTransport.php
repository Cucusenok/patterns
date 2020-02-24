<?php


namespace fabricMethod;
use fabricMethod\Coords;

abstract class AbstractTransport
{
    abstract function name():string;

    public function move(Coords $coordsStart, Coords $coordsFinish): string {
        $name = $this->name();
        return "$name move from  longitude: $coordsStart->longitude, latitude: $coordsStart->latitude,
               to longitude: $coordsFinish->longitude, latitude: $coordsFinish->latitude";
    }
}