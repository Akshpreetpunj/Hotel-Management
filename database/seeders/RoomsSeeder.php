<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rooms')->insert([
            'room_name' => 'Chelsea Room, 1 Queen Bed', 
            'room_description' => '315-sq-foot room with city views', 
            'max_occupancy' => '2'
        ]);

        DB::table('rooms')->insert([
            'room_name' => 'Chelsea Room, 2 Double Beds', 
            'room_description' => '279-sq-foot room, balcony with city views', 
            'max_occupancy' => '4'
        ]);

        DB::table('rooms')->insert([
            'room_name' => 'Deluxe Room, 1 King Bed', 
            'room_description' => '200-sq-foot room with city views', 
            'max_occupancy' => '3'
        ]);

        DB::table('rooms')->insert([
            'room_name' => 'Deluxe Room, 1 Queen Bed', 
            'room_description' => '315-sq-foot room with city views', 
            'max_occupancy' => '2'
        ]);
    }
}
