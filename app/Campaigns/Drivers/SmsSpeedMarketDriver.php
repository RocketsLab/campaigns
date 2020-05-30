<?php


namespace App\Campaigns\Drivers;


use App\Campaigns\Contracts\SmsDriver;

class SmsSpeedMarketDriver implements SmsDriver
{


    protected static $TYPE = 2;

    public function buildMessagesArray($contacts, $campaign): array
    {
        return collect($contacts)->map(function ($contact) use ($campaign) {
            return [
                'nome' => $contact->name,
                'telefone' => $contact->phone,
                'country_code' => '55',
                'campaign_id' => $this->generateMessageId($contact, $campaign),
                'content' => $campaign->title
            ];
        })->toArray();
    }

    protected function generateMessageId($contact, $campaign)
    {
        return md5("{$campaign->id}.{$contact->id}.{$contact->phone}.{$campaign->created_at->toDateString()}");
    }

    public function buildPayload($messages, $campaign): array
    {
        return [
            'defaultValues' => [
                'type' => self::$TYPE,
                'schedule' => $campaign->created_at->toDateTimeString(),
                'timezone' => '-03:00'
            ],
            'messages' => $messages
        ];
    }

    public function buildExtra($contact, $campaign): array
    {
        return [
            'message_id' => $this->generateMessageId($contact, $campaign),
            'status' => '000'
        ];
    }

    public function getMessageStatus($messageId): array
    {
        // TODO: Implement getMessageStatus() method.
    }

    public function getMessageId($contact, $campaign)
    {
        return $this->generateMessageId($contact, $campaign);
    }
}
