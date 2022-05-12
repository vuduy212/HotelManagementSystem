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
            'check_in' => '2022-12-30 23:59:59',
            'check_out' => '2022-12-31 23:59:59'
        ]);

        Status::updateOrCreate([
            'room_id' => '2',
            'check_in' => '2022-12-20 23:59:59',
            'check_out' => '2022-12-21 23:59:59'
        ]);

        Status::updateOrCreate([
            'room_id' => '3',
            'check_in' => '2022-05-20 23:59:59',
            'check_out' => '2022-05-29 23:59:59'
        ]);

        Status::updateOrCreate([
            'room_id' => '4',
            'check_in' => '2022-12-20 23:59:59',
            'check_out' => '2022-12-21 23:59:59'
        ]);
    }
}
