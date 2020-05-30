<?php


namespace App\Campaigns\Contracts;


interface EmailDriver
{
    public function registerCredentials($name, $sender, $receiver);
}
