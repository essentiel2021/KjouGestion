<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\Cooperative;
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
        // \App\Models\User::factory(10)->create();
        Client::factory(5)->create();
        Cooperative::factory(5)->create();
    }
}
