<?php

namespace App\Service;

class Log4php implements LoggerService
{

    private $logger;
    public function __construct()
    {

        $this->logger = \Logger::getLogger("Log");

    }

    public function info($message = '')
    {
        $this->logger->info($message);
    }

    public function debug($message = '')
    {
        $this->logger->debug($message);
    }

    public function error($message = '')
    {
        $this->logger->error($message);
    }
}