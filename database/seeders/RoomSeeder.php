<?php

namespace Database\Seeders;

use App\Models\Room;
use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $v1_101 = Room::updateOrCreate([
            'room_name' => '101',
            'description' => 'This is VIP Room for one people - 101',
            'category_id' => '1',
        ]);

        $n1_111 = Room::updateOrCreate([
            'room_name' => '111',
            'description' => 'This is Normal Room for one people - 111',
            'category_id' => '4',
        ]);

        $v2_201 = Room::updateOrCreate([
            'room_name' => '201',
            'description' => 'This is VIP Room for 2 people - 201',
            'category_id' => '2',
        ]);

        $n2_211 = Room::updateOrCreate([
            'room_name' => '211',
            'description' => 'This is Normal Room for 2 people - 211',
            'category_id' => '5',
        ]);

        $v4_301 = Room::updateOrCreate([
            'room_name' => '301',
            'description' => 'This is VIP Room for 4 people - 301',
            'category_id' => '3',
        ]);

        $n4_311 = Room::updateOrCreate([
            'room_name' => '311',
            'description' => 'This is Normal Room for 4 people - 311',
            'category_id' => '6',
        ]);
    }
}
