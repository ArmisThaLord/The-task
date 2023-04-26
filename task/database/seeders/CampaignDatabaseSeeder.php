<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Factories\CampaignFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CampaignDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CampaignFactory::new()->count(50)->create();
    }
}
