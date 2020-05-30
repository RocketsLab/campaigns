<?php


namespace App\Campaigns;


use App\Campaigns\Contracts\EmailDriver;
use Illuminate\Support\ServiceProvider;

class EmailDriverServiceProvider extends ServiceProvider
{
    public function register()
    {
        $emailDriver = config('services.campaigns.email.default');
        $emailDriverClass = config('services.campaigns.drivers.email.'. $emailDriver);
        $this->app->bind(EmailDriver::class, $emailDriverClass);
    }
}
