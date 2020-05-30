<?php

use Illuminate\Database\Seeder;

class PivotTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        $smsDriver = new \App\Campaigns\Drivers\SmsSpeedMarketDriver();
        $smsDriver = new \App\Campaigns\Drivers\SmsBaratoDriver();

        // NAO PODE MEXER NESSE CODIGO

        $campaign = \App\Campaign::find(1);
        // array
        $contact = App\Contact::find(1);
        $campaign->contacts()->attach($contact, ['extra' => json_encode($smsDriver->buildExtra($contact, $campaign))]);

    }
}
