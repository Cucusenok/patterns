<?php


namespace fabricMethod;

/**
 * Class Coords
 * The class for work with coordinates
 * @package fabricMethod
 * float $longitude
 * float $latitude
 */
class Coords
{

    public $longitude;
    public $latitude;

    public function __construct(float $longitude, float $latitude)
    {
        $this->longitude = $longitude;
        $this->latitude = $latitude;
    }


    public function info() : string{
        return "Longitude: $this->longitude, Latitude: $this->latitude";
    }

}