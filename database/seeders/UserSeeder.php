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
        //User::truncate();
        
        $adminRole = Role::where('id', '1')->first();
        $room_managerRole = Role::where('id', '2')->first();
        $receptionistRole = Role::where('id', '3')->first();
        $clientRole = Role::where('id', '4')->first();
        
        $superAdmin = User::updateOrCreate([
            'name' => 'Bảo',
            'email' => 'super_admin@gmail.com',
            'password' => bcrypt('12345678'),
        ]);

        $superAdmin->roles()->attach($receptionistRole);
        $superAdmin->roles()->attach($room_managerRole);
        $superAdmin->roles()->attach($adminRole);
        $superAdmin->roles()->attach($clientRole);
        
        $qtv = User::updateOrCreate([
            'name' => 'Duy',
            'email' => 'qtv@gmail.com',
            'password' => bcrypt('12345678'),
        ]);

        $qtv->roles()->attach($adminRole);

        $letan = User::updateOrCreate([
            'name' => 'Quế',
            'email' => 'letan@gmail.com',
            'password' => bcrypt('12345678'),
        ]);

        $letan->roles()->attach($receptionistRole);

        $qlp = User::updateOrCreate([
            'name' => 'Thủy',
            'email' => 'qlp@gmail.com',
            'password' => bcrypt('12345678'),
        ]);

        $qlp->roles()->attach($room_managerRole);


        $client = User::updateOrCreate([
            'name' => 'Sơn',
            'email' => 'client@gmail.com',
            'password' => bcrypt('12345678'),
        ]);

        $client->roles()->attach($clientRole);
    }
}
