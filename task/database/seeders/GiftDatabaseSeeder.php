<?php

namespace Database\Seeders;

use App\Models\gifts;
use Illuminate\Database\Seeder;
use Database\Factories\GiftsFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GiftDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GiftsFactory::new()->count(50)->create();
    }
   
}
