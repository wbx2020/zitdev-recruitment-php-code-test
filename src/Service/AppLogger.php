<?php

namespace App\Service;

class AppLogger
{

    private $logger;

    public function __construct(LoggerService $logger)
    {
        $this->logger = $logger;
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