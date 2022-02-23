<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\Pokemon;




class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Pokemon::factory(10)->create();
    }
}
