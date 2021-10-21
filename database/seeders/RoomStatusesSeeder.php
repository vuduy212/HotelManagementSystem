<?php

namespace Database\Seeders;

use App\Models\RoomStatus;
use Illuminate\Database\Seeder;

class RoomStatusesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $v101_01_01_2021 = RoomStatus::updateOrCreate([
            'room_name' => 'V101',
            'status_name' => 'empty',
            'time' => '2021-01-01'
        ]);

        $v101_02_01_2021 = RoomStatus::updateOrCreate([
            'room_name' => 'V101',
            'status_name' => 'fill',
            'time' => '2021-01-02'
        ]);
    }
}
