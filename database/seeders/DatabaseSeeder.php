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
        $this->call(Bloodseeder::class);
        // $this->call(NationalitiesTableSeeder::class);
        // $this->call(religionTableSeeder::class);

    }
}