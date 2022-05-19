<?php

namespace Database\Seeders;

use App\Models\Reservation;
use Illuminate\Database\Seeder;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Reservation::updateOrCreate([
            'client_name' => 'duy',
            'CMND' => '000011110000',
            'phone' => '0999888111',
            'email' => 'duy@gmail.com',
            'category_name' => 'T10',
            'room_name' => '41',
            'checkin' => '2022-05-24 09:00:00',
            'checkout' => '2022-05-25 09:00:00',
            'number_of_adults' => 2,
            'number_of_children' => 1,
            'payment' => 'cash',
            'price' => '150',
            'time' => 1,
        ]);
    }
}
