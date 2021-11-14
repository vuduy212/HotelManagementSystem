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
        $clientRole = Role::where('id', '4')->first();

        $qtv = User::updateOrCreate([
            'name' => 'Que Anh',
            'email' => 'qtv@gmail.com',
            'password' => bcrypt('12345678'),
        ]);

        $qtv->roles()->attach($adminRole);

        $letan = User::updateOrCreate([
            'name' => 'Mai Anh',
            'email' => 'letan@gmail.com',
            'password' => bcrypt('12345678'),
        ]);

        $letan->roles()->attach($receptionistRole);

        $qlp = User::updateOrCreate([
            'name' => 'Pham Tu',
            'email' => 'qlp@gmail.com',
            'password' => bcrypt('12345678'),
        ]);

        $qlp->roles()->attach($room_managerRole);

        $superAdmin = User::updateOrCreate([
            'name' => 'Tran Kien',
            'email' => 'super_admin@gmail.com',
            'password' => bcrypt('12345678'),
        ]);

        $superAdmin->roles()->attach($receptionistRole);
        $superAdmin->roles()->attach($room_managerRole);
        $superAdmin->roles()->attach($adminRole);
        $superAdmin->roles()->attach($clientRole);

        $client = User::updateOrCreate([
            'name' => 'Vu Duy',
            'email' => 'vuduy@gmail.com',
            'password' => bcrypt('12345678'),
        ]);

        $client->roles()->attach($clientRole);
    }
}
