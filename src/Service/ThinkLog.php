<?php

namespace App\Service;

use think\facade\Log;

class ThinkLog implements LoggerService
{
//    const TYPE_LOG4PHP = 'think-log';

    private $logger;

    public function __construct()
    {
        Log::init([
            'default'	=>	'file',
            'channels'	=>	[
                'file'	=>	[
                    'type'	=>	'file',
                    'path'	=>	'./logs/',
                ],
            ],
        ]);
    }

    public function info($message = '')
    {
        $message = strtoupper($message);
        Log::info($message);
    }

    public function debug($message = '')
    {
        $message = strtoupper($message);
        Log::debug($message);
    }

    public function error($message = '')
    {
        $message = strtoupper($message);
        Log::error($message);
    }
}