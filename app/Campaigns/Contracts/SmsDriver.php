<?php


namespace App\Campaigns\Contracts;


interface SmsDriver
{
    public function buildMessagesArray($contacts, $campaign): array ;

    public function buildPayload($messages, $campaign): array ;

    public function buildExtra($contact, $campaign): array ;

    public function getMessageStatus($messageId): array ;

    public function getMessageId($contact, $campaign);

}
