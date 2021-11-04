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
        $v101 = Room::updateOrCreate([
            'room_name' => 'V101',
            'description' => 'This is VIP Room - 101',
            'category_name' => 'VIP',
        ]);

        $n101 = Room::updateOrCreate([
            'room_name' => 'N101',
            'description' => 'This is Normal Room - 101',
            'category_name' => 'NORMAL',
        ]);
    }
}
