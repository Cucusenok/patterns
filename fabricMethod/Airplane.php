<?php


namespace fabricMethod;


use fabricMethod\AbstractTransport;

final class Airplane extends AbstractTransport
{

    public function name(): string
    {
        return 'Airplane';
    }


    public function move(Coords $coordsStart, Coords $coordsFinish): string {
        $name = 'Self realisation ' . $this->name() ;
        return "$name move from  longitude: $coordsStart->longitude, latitude: $coordsStart->latitude,
               to longitude: $coordsFinish->longitude, latitude: $coordsFinish->latitude";
    }

}