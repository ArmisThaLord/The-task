<?php

namespace Database\Seeders;

use App\Models\gifts;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GiftDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(App\gifts::class, 50)->create();
        // gifts::factory()
        // ->count(50)
        // ->create();
        // \App\Models\
        // gifts::factory()
        // ->count(2)
        // ->create()
        // ;
        //\App\Models\gifts::factory(10)->create();
        factory(gifts::class);
    }
   
}
