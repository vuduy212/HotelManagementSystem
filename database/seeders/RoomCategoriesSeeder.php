<?php

namespace Database\Seeders;

use App\Models\RoomCategories;
use App\Models\Service;
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
        $standard01 = RoomCategories::updateOrCreate([
            'category_name' => 'Standard01',
            'description' => 'Among hotel room types, the standard room (abbreviated as STD) is the most basic standard room type to have. Most hotels from 1 star to 4 star have a certain number of rooms in Standard room class. Only 5-star hotels, depending on the size, may have a small number of standard rooms or sometimes standard rooms are omitted from the investment class and focus on higher class hotel rooms.',
            'double_bed' => 0,
            'single_bed' => 1,
            'price' => 100,
            'area' => 15,
        ]);

        $standard02 = RoomCategories::updateOrCreate([
            'category_name' => 'Standard02',
            'description' => 'Among hotel room types, the standard room (abbreviated as STD) is the most basic standard room type to have. Most hotels from 1 star to 4 star have a certain number of rooms in Standard room class. Only 5-star hotels, depending on the size, may have a small number of standard rooms or sometimes standard rooms are omitted from the investment class and focus on higher class hotel rooms.',
            'double_bed' => 0,
            'single_bed' => 2,
            'price' => 150,
            'area' => 20,
        ]);

        $standard03 = RoomCategories::updateOrCreate([
            'category_name' => 'Standard03',
            'description' => 'Among hotel room types, the standard room (abbreviated as STD) is the most basic standard room type to have. Most hotels from 1 star to 4 star have a certain number of rooms in Standard room class. Only 5-star hotels, depending on the size, may have a small number of standard rooms or sometimes standard rooms are omitted from the investment class and focus on higher class hotel rooms.',
            'double_bed' => 0,
            'single_bed' => 3,
            'price' => 200,
            'area' => 25,
        ]);

        $standard10 = RoomCategories::updateOrCreate([
            'category_name' => 'Standard10',
            'description' => 'Among hotel room types, the standard room (abbreviated as STD) is the most basic standard room type to have. Most hotels from 1 star to 4 star have a certain number of rooms in Standard room class. Only 5-star hotels, depending on the size, may have a small number of standard rooms or sometimes standard rooms are omitted from the investment class and focus on higher class hotel rooms.',
            'double_bed' => 1,
            'single_bed' => 0,
            'price' => 150,
            'area' => 20,
        ]);

        $standard20 = RoomCategories::updateOrCreate([
            'category_name' => 'Standard20',
            'description' => 'Among hotel room types, the standard room (abbreviated as STD) is the most basic standard room type to have. Most hotels from 1 star to 4 star have a certain number of rooms in Standard room class. Only 5-star hotels, depending on the size, may have a small number of standard rooms or sometimes standard rooms are omitted from the investment class and focus on higher class hotel rooms.',
            'double_bed' => 2,
            'single_bed' => 0,
            'price' => 250,
            'area' => 30,
        ]);

        $standard30 = RoomCategories::updateOrCreate([
            'category_name' => 'Standard30',
            'description' => 'Among hotel room types, the standard room (abbreviated as STD) is the most basic standard room type to have. Most hotels from 1 star to 4 star have a certain number of rooms in Standard room class. Only 5-star hotels, depending on the size, may have a small number of standard rooms or sometimes standard rooms are omitted from the investment class and focus on higher class hotel rooms.',
            'double_bed' => 3,
            'single_bed' => 0,
            'price' => 400,
            'area' => 15,
        ]);

        $superior11 =  RoomCategories::updateOrCreate([
            'category_name' => 'Superior11',
            'description' => 'In the term of hotel room types, the superior room is more superior than the standard room. The SUP room construction design also has more items due to the larger area (from 20m2 or more). Materials used can be synchronized with hotel overview or more upscale in some decoration items. Specifically, including many types of beds, view views are also better investment options. Modern investment equipment.',
            'double_bed' => 1,
            'single_bed' => 1,
            'price' => 250,
            'area' => 15,
        ]);

        $superior21 = RoomCategories::updateOrCreate([
            'category_name' => 'Superior21',
            'description' => 'In the term of hotel room types, the superior room is more superior than the standard room. The SUP room construction design also has more items due to the larger area (from 20m2 or more). Materials used can be synchronized with hotel overview or more upscale in some decoration items. Specifically, including many types of beds, view views are also better investment options. Modern investment equipment.',
            'double_bed' => 2,
            'single_bed' => 1,
            'price' => 300,
            'area' => 35,
        ]);

        $superior12 = RoomCategories::updateOrCreate([
            'category_name' => 'Superior12',
            'description' => 'In the term of hotel room types, the superior room is more superior than the standard room. The SUP room construction design also has more items due to the larger area (from 20m2 or more). Materials used can be synchronized with hotel overview or more upscale in some decoration items. Specifically, including many types of beds, view views are also better investment options. Modern investment equipment.',
            'double_bed' => 1,
            'single_bed' => 2,
            'price' => 250,
            'area' => 30,
        ]);

        // -------VIP
        $deluxe01 = RoomCategories::updateOrCreate([
            'category_name' => 'Deluxe01',
            'description' => 'With the types of rooms in the hotel, the deluxe room seems to be a popular choice for mid-range customers and above. Designing and executing more items with interior materials is also in the high-end segment. DLX rooms are usually on the upper floor with a beautiful view, the area of this hotel room is more spacious than superior.',
            'double_bed' => 0,
            'single_bed' => 1,
            'price' => 150,
            'area' => 20,
        ]);

        $deluxe02 = RoomCategories::updateOrCreate([
            'category_name' => 'Deluxe02',
            'description' => 'With the types of rooms in the hotel, the deluxe room seems to be a popular choice for mid-range customers and above. Designing and executing more items with interior materials is also in the high-end segment. DLX rooms are usually on the upper floor with a beautiful view, the area of this hotel room is more spacious than superior.',
            'double_bed' => 0,
            'single_bed' => 2,
            'price' => 200,
            'area' => 250,
        ]);

        $deluxe03 = RoomCategories::updateOrCreate([
            'category_name' => 'Deluxe03',
            'description' => 'With the types of rooms in the hotel, the deluxe room seems to be a popular choice for mid-range customers and above. Designing and executing more items with interior materials is also in the high-end segment. DLX rooms are usually on the upper floor with a beautiful view, the area of this hotel room is more spacious than superior.',
            'double_bed' => 0,
            'single_bed' => 3,
            'price' => 250,
            'area' => 30,
        ]);

        $deluxe10 = RoomCategories::updateOrCreate([
            'category_name' => 'Deluxe10',
            'description' => 'With the types of rooms in the hotel, the deluxe room seems to be a popular choice for mid-range customers and above. Designing and executing more items with interior materials is also in the high-end segment. DLX rooms are usually on the upper floor with a beautiful view, the area of this hotel room is more spacious than superior.',
            'double_bed' => 1,
            'single_bed' => 0,
            'price' => 200,
            'area' => 25,
        ]);

        $deluxe20 = RoomCategories::updateOrCreate([
            'category_name' => 'Deluxe20',
            'description' => 'With the types of rooms in the hotel, the deluxe room seems to be a popular choice for mid-range customers and above. Designing and executing more items with interior materials is also in the high-end segment. DLX rooms are usually on the upper floor with a beautiful view, the area of this hotel room is more spacious than superior.',
            'double_bed' => 2,
            'single_bed' => 0,
            'price' => 300,
            'area' => 35,
        ]);

        $deluxe30 = RoomCategories::updateOrCreate([
            'category_name' => 'Deluxe30',
            'description' => 'With the types of rooms in the hotel, the deluxe room seems to be a popular choice for mid-range customers and above. Designing and executing more items with interior materials is also in the high-end segment. DLX rooms are usually on the upper floor with a beautiful view, the area of this hotel room is more spacious than superior.',
            'double_bed' => 3,
            'single_bed' => 0,
            'price' => 400,
            'area' => 45,
        ]);

        $suite11 = RoomCategories::updateOrCreate([
            'category_name' => 'Suite11',
            'description' => 'Currently, the suite is the most luxurious room in the hotel category. Due to the large area, the interior investment is quite a lot of items, the cost of investment in design and construction is high, so the cost of using the room is also much higher. The suite room is generally quite high-end, so in the item design there is an additional classification of Junior and Executive rooms.',
            'double_bed' => 1,
            'single_bed' => 1,
            'price' => 250,
            'area' => 30,
        ]);

        $suite21 = RoomCategories::updateOrCreate([
            'category_name' => 'Suite21',
            'description' => 'Currently, the suite is the most luxurious room in the hotel category. Due to the large area, the interior investment is quite a lot of items, the cost of investment in design and construction is high, so the cost of using the room is also much higher. The suite room is generally quite high-end, so in the item design there is an additional classification of Junior and Executive rooms.',
            'double_bed' => 2,
            'single_bed' => 1,
            'price' => 350,
            'area' => 40,
        ]);

        $suite12 = RoomCategories::updateOrCreate([
            'category_name' => 'Suite12',
            'description' => 'Currently, the suite is the most luxurious room in the hotel category. Due to the large area, the interior investment is quite a lot of items, the cost of investment in design and construction is high, so the cost of using the room is also much higher. The suite room is generally quite high-end, so in the item design there is an additional classification of Junior and Executive rooms.',
            'double_bed' => 1,
            'single_bed' => 2,
            'price' => 300,
            'area' => 35,
        ]);

        $listStandard = [$standard01, $standard02, $standard03, $standard10, $standard20, $standard30];
        $listSuperior = [$superior11, $superior21, $superior12];
        $listDeluxe = [$deluxe01, $deluxe02, $deluxe03, $deluxe10, $deluxe20, $deluxe30];
        $listSuite = [$suite11, $suite12, $suite21];

        $CarRental = Service::where('id', '1')->first();
        $Catering = Service::where('id', '2')->first();
        $Concierge = Service::where('id', '3')->first();
        $Courier = Service::where('id', '4')->first();
        $Doctor = Service::where('id', '5')->first();
        $DryClean = Service::where('id', '6')->first();
        $Tours = Service::where('id', '7')->first();
        $Flower = Service::where('id', '8')->first();
        $Ironing = Service::where('id', '9')->first();
        $Valet = Service::where('id', '10')->first();
        $Massages = Service::where('id', '11')->first();
        $Shoeshine = Service::where('id', '12')->first();
        $Transfer = Service::where('id', '13')->first();
        $Parking = Service::where('id', '14')->first();
        $Ticket = Service::where('id', '15')->first();

        foreach ($listStandard as $standard) {
            $standard->services()->attach($CarRental);
            $standard->services()->attach($Catering);
            $standard->services()->attach($Concierge);
            $standard->services()->attach($Courier);
            $standard->services()->attach($Doctor);
        }

        foreach ($listSuperior as $superior) {
            $superior->services()->attach($DryClean);
            $superior->services()->attach($Tours);
            $superior->services()->attach($Flower);
            $superior->services()->attach($Ironing);
            $superior->services()->attach($Valet);
        }

        foreach ($listDeluxe as $deluxe) {
            $deluxe->services()->attach($CarRental);
            $deluxe->services()->attach($Catering);
            $deluxe->services()->attach($Concierge);
            $deluxe->services()->attach($Courier);
            $deluxe->services()->attach($Doctor);
        }

        foreach ($listSuite as $suite) {
            $suite->services()->attach($Massages);
            $suite->services()->attach($Shoeshine);
            $suite->services()->attach($Transfer);
            $suite->services()->attach($Parking);
            $suite->services()->attach($Ticket);
        }
    }
}
