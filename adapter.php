<?php
require "vendor/autoload.php";


use Adapter\ILogger;
use Adapter\EmailLogger;
use Adapter\FileLogger;

/**
 * Эмуляция клиентсого кода
 * доступ к необходимому классу можно получить
 * при помощи конфигурации проекта или паттерна Singleton
 * @param ILogger $logger
 */
function client(ILogger $logger){
    echo  $logger->log('Очень важный лог',
                        ILogger::LEVEL_DEBUG);
}


$emailLogger = new EmailLogger(['admin@admin.ru', 'developer@mail.ru']);
$fileLogger = new FileLogger('log.txt');

client($emailLogger);
client($fileLogger);