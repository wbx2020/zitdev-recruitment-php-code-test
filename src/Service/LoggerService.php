<?php


namespace App\Service;


Interface LoggerService
{
    public function info($message = '');

    public function debug($message = '');

    public function error($message = '');
}