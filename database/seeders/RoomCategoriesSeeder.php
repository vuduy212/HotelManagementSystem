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
        $vip1 = RoomCategories::updateOrCreate([
            'category_name' => 'VIP1',
            'description' => 'This is VIP Room for one people',
            'price' => 1000.00,
            'images' => 'vip1.jpg'
        ]);

        $vip2 = RoomCategories::updateOrCreate([
            'category_name' => 'VIP2',
            'description' => 'This is VIP Room for two people',
            'price' => 1200.00,
            'images' => 'vip2.png'
        ]);

        $vip4 = RoomCategories::updateOrCreate([
            'category_name' => 'VIP4',
            'description' => 'This is VIP Room for 4 people ',
            'price' => 1500.00,
            'images' => 'vip4.jpeg'
        ]);

        $normal1 = RoomCategories::updateOrCreate([
            'category_name' => 'NORMAL1',
            'description' => 'This is Normal Room for one people',
            'price' => 500.00,
            'images' => 'normal1.jpg'
        ]);

        $normal2 = RoomCategories::updateOrCreate([
            'category_name' => 'NORMAL2',
            'description' => 'This is Normal Room for two people',
            'price' => 700.00,
            'images' => 'normal2.jpg'
        ]);

        $normal4 = RoomCategories::updateOrCreate([
            'category_name' => 'NORMAL4',
            'description' => 'This is Normal Room for 4 people',
            'price' => 1000.00,
            'images' => 'normal4.jpg'
        ]);
    }
}
