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
        // $this->call(UserSeeder::class);
        for ($i=0 ; $i<50 ; $i++) {
            $this->call(RoomSeeder::class);
        }

    }
}
