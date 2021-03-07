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
        $this->call(CouriersTableSeeder::class);
        $this->call(LocationsTableSeeder::class);
        // $this->call(UserSeeder::class);
    }
}
