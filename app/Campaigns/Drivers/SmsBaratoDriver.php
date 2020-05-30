<?php


namespace App\Campaigns\Drivers;


use App\Campaigns\Contracts\SmsDriver;

class SmsBaratoDriver implements SmsDriver
{

    public function buildMessagesArray($contacts, $campaign): array
    {
        return [];
    }

    public function buildPayload($messages, $campaign): array
    {
        return [];
    }

    public function buildExtra($contact, $campaign): array
    {
        return [
            'numero_sms' => $contact->phone,
            'status' => 'waiting'
        ];
    }

    public function getMessageStatus($messageId): array
    {
        // TODO: Implement getMessageStatus() method.
    }

    public function getMessageId($contact, $campaign)
    {
        // TODO: Implement getMessageId() method.
    }
}
