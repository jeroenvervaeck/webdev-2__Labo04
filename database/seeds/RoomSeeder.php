<?php

use App\Room;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $room = new Room();
        $room->number = rand(100,200) . '_' . Str::random(3);
        $room->name = $faker->company;

        $room->save();
    }
}
