<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Yajira;
use App\Models\User;
 use App\Database\Factories\YajiraFactory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();

         Yajira::factory()->times(100)->create();

            //  User::factory()
            // ->times(50)
            // ->create();

    }
}
