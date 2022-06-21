<?php

namespace Database\Seeders;

use App\Models\Images;
use Illuminate\Database\Seeder;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //---------------------
        Images::updateOrCreate([
            'value' => 'normal1.jpg',
            'category_name' => 'Standard01',
        ]);

        Images::updateOrCreate([
            'value' => 'normal2.jpg',
            'category_name' => 'Standard01',
        ]);

        Images::updateOrCreate([
            'value' => 'normal1.jpg',
            'category_name' => 'Standard02',
        ]);

        Images::updateOrCreate([
            'value' => 'normal4.jpg',
            'category_name' => 'Standard02',
        ]);

        Images::updateOrCreate([
            'value' => 'normal2.jpg',
            'category_name' => 'Standard03',
        ]);

        Images::updateOrCreate([
            'value' => 'normal4.jpg',
            'category_name' => 'Standard03',
        ]);

        //---------------
        Images::updateOrCreate([
            'value' => 'normal1.jpg',
            'category_name' => 'Standard10',
        ]);

        Images::updateOrCreate([
            'value' => 'normal2.jpg',
            'category_name' => 'Standard10',
        ]);

        Images::updateOrCreate([
            'value' => 'normal1.jpg',
            'category_name' => 'Standard20',
        ]);

        Images::updateOrCreate([
            'value' => 'normal4.jpg',
            'category_name' => 'Standard20',
        ]);

        Images::updateOrCreate([
            'value' => 'normal2.jpg',
            'category_name' => 'Standard30',
        ]);

        Images::updateOrCreate([
            'value' => 'normal4.jpg',
            'category_name' => 'Standard30',
        ]);

        //---------------
        Images::updateOrCreate([
            'value' => 'normal1.jpg',
            'category_name' => 'Superior11',
        ]);

        Images::updateOrCreate([
            'value' => 'normal2.jpg',
            'category_name' => 'Superior11',
        ]);

        Images::updateOrCreate([
            'value' => 'normal1.jpg',
            'category_name' => 'Superior21',
        ]);

        Images::updateOrCreate([
            'value' => 'normal4.jpg',
            'category_name' => 'Superior21',
        ]);

        Images::updateOrCreate([
            'value' => 'normal2.jpg',
            'category_name' => 'Superior12',
        ]);

        Images::updateOrCreate([
            'value' => 'normal4.jpg',
            'category_name' => 'Superior12',
        ]);

        //---------------------
        Images::updateOrCreate([
            'value' => 'vip1.jpg',
            'category_name' => 'Deluxe01',
        ]);

        Images::updateOrCreate([
            'value' => 'vip2.png',
            'category_name' => 'Deluxe01',
        ]);

        Images::updateOrCreate([
            'value' => 'vip1.jpg',
            'category_name' => 'Deluxe02',
        ]);

        Images::updateOrCreate([
            'value' => 'vip4.jpeg',
            'category_name' => 'Deluxe02',
        ]);

        Images::updateOrCreate([
            'value' => 'vip2.png',
            'category_name' => 'Deluxe03',
        ]);

        Images::updateOrCreate([
            'value' => 'vip4.jpeg',
            'category_name' => 'Deluxe03',
        ]);

        //---------------
        Images::updateOrCreate([
            'value' => 'vip1.jpg',
            'category_name' => 'Deluxe10',
        ]);

        Images::updateOrCreate([
            'value' => 'vip2.png',
            'category_name' => 'Deluxe10',
        ]);

        Images::updateOrCreate([
            'value' => 'vip1.jpg',
            'category_name' => 'Deluxe20',
        ]);

        Images::updateOrCreate([
            'value' => 'vip4.jpeg',
            'category_name' => 'Deluxe20',
        ]);

        Images::updateOrCreate([
            'value' => 'vip2.png',
            'category_name' => 'Deluxe30',
        ]);

        Images::updateOrCreate([
            'value' => 'vip4.jpeg',
            'category_name' => 'Deluxe30',
        ]);

        //---------------
        Images::updateOrCreate([
            'value' => 'vip1.jpg',
            'category_name' => 'Suite11',
        ]);

        Images::updateOrCreate([
            'value' => 'vip2.png',
            'category_name' => 'Suite11',
        ]);

        Images::updateOrCreate([
            'value' => 'vip1.jpg',
            'category_name' => 'Suite21',
        ]);

        Images::updateOrCreate([
            'value' => 'vip4.jpeg',
            'category_name' => 'Suite21',
        ]);

        Images::updateOrCreate([
            'value' => 'vip2.png',
            'category_name' => 'Suite12',
        ]);

        Images::updateOrCreate([
            'value' => 'vip4.jpeg',
            'category_name' => 'Suite12',
        ]);
    }
}
