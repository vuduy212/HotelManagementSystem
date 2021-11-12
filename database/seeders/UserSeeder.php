<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        $adminRole = Role::where('id', '1')->first();
        $room_managerRole = Role::where('id', '2')->first();
        $receptionistRole = Role::where('id', '3')->first();

        $qtv = User::updateOrCreate([
            'name' => 'Quan Tri Vien',
            'email' => 'qtv@gmail.com',
            'password' => bcrypt('12345678'),
        ]);

        $qtv->roles()->attach($adminRole);

        $letan = User::updateOrCreate([
            'name' => 'Le Tan',
            'email' => 'letan@gmail.com',
            'password' => bcrypt('12345678'),
        ]);

        $letan->roles()->attach($receptionistRole);

        $qlp = User::updateOrCreate([
            'name' => 'Quan Ly Phong',
            'email' => 'qlp@gmail.com',
            'password' => bcrypt('12345678'),
        ]);

        $qlp->roles()->attach($room_managerRole);

        $superAdmin = User::updateOrCreate([
            'name' => 'Super Admin',
            'email' => 'super_admin@gmail.com',
            'password' => bcrypt('12345678'),
        ]);

        $superAdmin->roles()->attach($receptionistRole);
        $superAdmin->roles()->attach($room_managerRole);
        $superAdmin->roles()->attach($adminRole);
    }
}
