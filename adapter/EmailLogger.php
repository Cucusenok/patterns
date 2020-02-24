<?php


namespace Adapter;

use Adapter\ILogger;


class EmailLogger implements ILogger
{
    /**
     * Количество разделителей между строк \n|<br>
     */
    const DELIMITER_COUNT = 3;

    private $emails;


    /**
     * EmailLogger constructor.
     * @param array $emails - массив строк с адресами куда необходимо отправить уведомление
     */
    public function __construct(array $emails)
    {
        $this->emails = $emails;
    }


    public function log(string $msg, string $level)
    {
        $resultSend = '';

        /**
         * Добавим тип разделителя в зависимости откуда запушен PHP
         */
        $msgDelimiter  = php_sapi_name() == 'cli' ? PHP_EOL : '<br>';

        /**
         * TODO: блокирующая операция
         * Отправка email-а тоже оперерация не мгновенная и блокирующая,
         * тут так же необходимо подумать об очереди
         */
        foreach($this->emails as $email){
            $resultSend .= str_repeat($msgDelimiter, self::DELIMITER_COUNT);
            $resultSend .= "$level: Сообщение '$msg' успешно отправлено по адресу $email";
        }

        return $resultSend . str_repeat($msgDelimiter, self::DELIMITER_COUNT);

    }

}