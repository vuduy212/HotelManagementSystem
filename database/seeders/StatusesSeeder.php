<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Seeder;

class StatusesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Status::updateOrCreate([
            'room_id' => '1',
            'checkin' => '2022-12-30 23:59:59',
            'checkout' => '2022-12-31 23:59:59'
        ]);

        Status::updateOrCreate([
            'room_id' => '2',
            'checkin' => '2022-12-20 23:59:59',
            'checkout' => '2022-12-21 23:59:59'
        ]);

        Status::updateOrCreate([
            'room_id' => '3',
            'checkin' => '2022-05-20 23:59:59',
            'checkout' => '2022-05-29 23:59:59'
        ]);

        Status::updateOrCreate([
            'room_id' => '4',
            'checkin' => '2022-12-20 23:59:59',
            'checkout' => '2022-12-21 23:59:59'
        ]);
    }
}
