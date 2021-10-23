<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $amdinRole = Role::updateOrCreate(
            ['name' => 'admin'],
        );

        $roomManagerRole = Role::updateOrCreate(
            ['name' => 'room_manager'],
        );

        $receptionistRole = Role::updateOrCreate(
            ['name' => 'receptionist'],
        );

        $clientRole = Role::updateOrCreate(
            ['name' => 'client'],
        );
    }
}
