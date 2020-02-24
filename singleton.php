<?php
require "vendor/autoload.php";

use Singleton\Config;


/**
 *
 */
$config1 = Config::getInstance();
$config1->set('key', 'value');
$config2 = Config::getInstance();

if ($config1 === $config2) {
    echo 'Config instances are equal';
    echo  php_sapi_name() == 'cli' ? PHP_EOL : '<br>';
    echo $config2->get('key');
} else {
    echo 'Config instances are different';
}