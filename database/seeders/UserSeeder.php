<?php

namespace Database\Seeders;

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
        $qtv = User::updateOrCreate([
            'name' => 'Quan Tri Vien',
            'email' => 'qtv@gmail.com',
            'password' => bcrypt('12345678'),
            'role' => 'QuanTriVien'
        ]);

        $letan = User::updateOrCreate([
            'name' => 'Le Tan',
            'email' => 'letan@gmail.com',
            'password' => bcrypt('12345678'),
            'role' => 'LeTan'
        ]);

        $qlp = User::updateOrCreate([
            'name' => 'Quan Ly Phong',
            'email' => 'qlp@gmail.com',
            'password' => bcrypt('12345678'),
            'role' => 'QuanLyPhong'
        ]);
    }
}
