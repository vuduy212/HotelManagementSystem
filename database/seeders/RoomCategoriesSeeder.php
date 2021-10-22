<?php

namespace Database\Seeders;

use App\Models\RoomCategories;
use Illuminate\Database\Seeder;

class RoomCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vip = RoomCategories::updateOrCreate(
            ['category_name' => 'VIP'],
            ['description' => 'This is VIP Room'],
            //['price' => 1000.00]
        );

        $normal = RoomCategories::updateOrCreate(
            ['category_name' => 'NORMAL'],
            ['description' => 'This is Normal Room'],
            //['price' => 500.00]
        );
    }
}
