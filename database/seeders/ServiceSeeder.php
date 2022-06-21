<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Service::updateOrCreate([
            'service_name' => 'Car rental',
        ]);

        Service::updateOrCreate([
            'service_name' => 'Catering',
        ]);

        Service::updateOrCreate([
            'service_name' => 'Concierge',
        ]);

        Service::updateOrCreate([
            'service_name' => 'Courier',
        ]);

        Service::updateOrCreate([
            'service_name' => 'Doctor on call',
        ]);

        Service::updateOrCreate([
            'service_name' => 'Dry cleaning',
        ]);

        Service::updateOrCreate([
            'service_name' => 'Excursions and guided tours',
        ]);

        Service::updateOrCreate([
            'service_name' => 'Flower arrangement',
        ]);

        Service::updateOrCreate([
            'service_name' => 'Ironing',
        ]);

        Service::updateOrCreate([
            'service_name' => 'Laundry and valet',
        ]);

        Service::updateOrCreate([
            'service_name' => 'Massages',
        ]);

        Service::updateOrCreate([
            'service_name' => 'Shoeshine',
        ]);

        Service::updateOrCreate([
            'service_name' => 'Transfer and chauffeur driven limousine',
        ]);

        Service::updateOrCreate([
            'service_name' => 'Valet parking',
        ]);

        Service::updateOrCreate([
            'service_name' => 'Ticket',
        ]);
    }
}
