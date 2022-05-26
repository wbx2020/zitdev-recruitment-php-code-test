<?php

namespace Test\Service;

use App\Service\Log4php;
use App\Service\ThinkLog;
use PHPUnit\Framework\TestCase;
use App\Service\AppLogger;

/**
 * Class ProductHandlerTest
 */
class AppLoggerTest extends TestCase
{

    public function testInfoLog()
    {
        $log4php = new AppLogger(new Log4php());
        $log4php->info('This is Log4php log message');

        $thinkLog = new AppLogger(new ThinkLog());
        $thinkLog->info('This is ThinkLog log message');
    }
}