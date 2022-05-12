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
        RoomCategories::updateOrCreate([
            'category_name' => 'T01',
            'description' => 'This is T01 room',
            'double_bed' => 0,
            'single_bed' => 1,
            'price' => 100,
            'area' => 15,
        ]);

        RoomCategories::updateOrCreate([
            'category_name' => 'T02',
            'description' => 'This is T02 room',
            'double_bed' => 0,
            'single_bed' => 2,
            'price' => 150,
            'area' => 20,
        ]);

        RoomCategories::updateOrCreate([
            'category_name' => 'T03',
            'description' => 'This is T03 room',
            'double_bed' => 0,
            'single_bed' => 3,
            'price' => 200,
            'area' => 25,
        ]);

        RoomCategories::updateOrCreate([
            'category_name' => 'T10',
            'description' => 'This is T10 room',
            'double_bed' => 1,
            'single_bed' => 0,
            'price' => 150,
            'area' => 20,
        ]);

        RoomCategories::updateOrCreate([
            'category_name' => 'T20',
            'description' => 'This is T20 room',
            'double_bed' => 2,
            'single_bed' => 0,
            'price' => 250,
            'area' => 30,
        ]);

        RoomCategories::updateOrCreate([
            'category_name' => 'T30',
            'description' => 'This is T30 room',
            'double_bed' => 3,
            'single_bed' => 0,
            'price' => 40,
            'area' => 15,
        ]);

        RoomCategories::updateOrCreate([
            'category_name' => 'T11',
            'description' => 'This is T11 room',
            'double_bed' => 1,
            'single_bed' => 1,
            'price' => 25,
            'area' => 15,
        ]);

        RoomCategories::updateOrCreate([
            'category_name' => 'T21',
            'description' => 'This is T21 room',
            'double_bed' => 2,
            'single_bed' => 1,
            'price' => 300,
            'area' => 35,
        ]);

        RoomCategories::updateOrCreate([
            'category_name' => 'T12',
            'description' => 'This is T12 room',
            'double_bed' => 1,
            'single_bed' => 2,
            'price' => 250,
            'area' => 30,
        ]);

        // -------VIP
        RoomCategories::updateOrCreate([
            'category_name' => 'V01',
            'description' => 'This is V01 room',
            'double_bed' => 0,
            'single_bed' => 1,
            'price' => 150,
            'area' => 20,
        ]);

        RoomCategories::updateOrCreate([
            'category_name' => 'V02',
            'description' => 'This is V02 room',
            'double_bed' => 0,
            'single_bed' => 2,
            'price' => 200,
            'area' => 25,
        ]);

        RoomCategories::updateOrCreate([
            'category_name' => 'V03',
            'description' => 'This is V03 room',
            'double_bed' => 0,
            'single_bed' => 3,
            'price' => 250,
            'area' => 30,
        ]);

        RoomCategories::updateOrCreate([
            'category_name' => 'V10',
            'description' => 'This is V10 room',
            'double_bed' => 1,
            'single_bed' => 0,
            'price' => 200,
            'area' => 25,
        ]);

        RoomCategories::updateOrCreate([
            'category_name' => 'V20',
            'description' => 'This is V20 room',
            'double_bed' => 2,
            'single_bed' => 0,
            'price' => 300,
            'area' => 35,
        ]);

        RoomCategories::updateOrCreate([
            'category_name' => 'V30',
            'description' => 'This is V30 room',
            'double_bed' => 3,
            'single_bed' => 0,
            'price' => 400,
            'area' => 45,
        ]);

        RoomCategories::updateOrCreate([
            'category_name' => 'V11',
            'description' => 'This is V11 room',
            'double_bed' => 1,
            'single_bed' => 1,
            'price' => 250,
            'area' => 30,
        ]);

        RoomCategories::updateOrCreate([
            'category_name' => 'V21',
            'description' => 'This is V21 room',
            'double_bed' => 2,
            'single_bed' => 1,
            'price' => 350,
            'area' => 40,
        ]);

        RoomCategories::updateOrCreate([
            'category_name' => 'V12',
            'description' => 'This is V12 room',
            'double_bed' => 1,
            'single_bed' => 2,
            'price' => 300,
            'area' => 35,
        ]);
    }
}
