<?php

namespace Adapter;


interface ILogger
{

    const LEVEL_INFO = 'INFO';
    const LEVEL_ERROR = 'ERROR';
    const LEVEL_DEBUG = 'DEBUG';
    const LEVEL_TRACE = 'TRACE';
    const LEVEL_WARNING = 'WARNING';
    const LEVEL_FATAL = 'FATAL';


    /**
     * @param string $msg
     * @param int $level уровень логгирования
     * @return mixed
     */
    public function log(string $msg, string $level);
}