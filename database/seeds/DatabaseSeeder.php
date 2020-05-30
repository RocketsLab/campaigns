<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UserTableSeeder::class);
         $this->call(ContactTableSeeder::class);
         $this->call(CampaignTableSeeder::class);
         $this->call(PivotTableSeeder::class);
    }
}
