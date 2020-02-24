<?php

namespace Singleton;

use Singleton\Singleton;

final class Config extends Singleton
{
    private $config = array();


    public function get(string $key):string{
        return $this->config[$key];
    }


    public function set(string $key, string $val):void {
        $this->config[$key] = $val;
    }


}