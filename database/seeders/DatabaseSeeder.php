<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(RoomCategoriesSeeder::class);
        $this->call(RoomSeeder::class);
        $this->call(RoomStatusesSeeder::class);
        $this->call(RoomBillsSeeder::class);
        $this->call(StatusesSeeder::class);
    }
}
