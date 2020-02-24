<?php

namespace Adapter;

use Adapter\ILogger;

class FileLogger implements ILogger
{
    /**
     * Переменная для полного пути к файлу
     * куда нужно писать в лог
     * в реальных приложениях обчно
     * такие вещи настраивают на уровне
     * конфигурации или окружения
     * @var string
     */
    private $fullPath;

    public function __construct(string $fullPath)
    {
        $this->fullPath = $fullPath;
    }


    /**
     * Функция для записи в файл
     * возвращает строку, только для примера
     * обычно возвращает bool, указывая на
     * успешность выполненной операции
     *
     * @param string $msg
     * @param int $level
     * @return string
     */
    public function log(string $msg, string $level):string
        {
            /**
             * TODO: конфликт записи в файл
             * данные примеры используются только для реализации паттернов
             * в реальной жизни 'нельзя просто так взять и начать писать в файл'
             * он уже может быть открыт на запись, одно из решений - очередь
             */

            return  "$level: Сообщение '$msg' - "
                    . "Успешно записано в файл";

        }
}