<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Factories\UserFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserFactory::new()->count(50)->create();
    }
}
