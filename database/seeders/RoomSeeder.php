<?php

namespace Database\Seeders;

use App\Models\Room;
use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //first
        $v1_101 = Room::updateOrCreate([
            'room_name' => '11',
            'description' => 'This is VIP Room for one people - 101',
            'category_name' => 'T01',
        ]);

        $v1_102 = Room::updateOrCreate([
            'room_name' => '12',
            'description' => 'This is VIP Room for one people - 102',
            'category_name' => 'T01',
        ]);

        $v1_103 = Room::updateOrCreate([
            'room_name' => '13',
            'description' => 'This is VIP Room for one people - 103',
            'category_name' => 'T01',
        ]);

        $v2_201 = Room::updateOrCreate([
            'room_name' => '21',
            'description' => 'This is VIP Room for 2 people - 201',
            'category_name' => 'T02',
        ]);

        $v2_202 = Room::updateOrCreate([
            'room_name' => '22',
            'description' => 'This is VIP Room for 2 people - 202',
            'category_name' => 'T02',
        ]);

        $v2_203 = Room::updateOrCreate([
            'room_name' => '23',
            'description' => 'This is VIP Room for 2 people - 203',
            'category_name' => 'T02',
        ]);

        $v4_301 = Room::updateOrCreate([
            'room_name' => '31',
            'description' => 'This is VIP Room for 4 people - 301',
            'category_name' => 'T03',
        ]);

        $v4_302 = Room::updateOrCreate([
            'room_name' => '32',
            'description' => 'This is VIP Room for 4 people - 302',
            'category_name' => 'T03',
        ]);

        $v4_303 = Room::updateOrCreate([
            'room_name' => '33',
            'description' => 'This is VIP Room for 4 people - 303',
            'category_name' => 'T03',
        ]);

        $n1_111 = Room::updateOrCreate([
            'room_name' => '41',
            'description' => 'This is Normal Room for one people - 111',
            'category_name' => 'T10',
        ]);

        $n1_112 = Room::updateOrCreate([
            'room_name' => '42',
            'description' => 'This is Normal Room for one people - 112',
            'category_name' => 'T10',
        ]);

        $n1_113 = Room::updateOrCreate([
            'room_name' => '43',
            'description' => 'This is Normal Room for one people - 113',
            'category_name' => 'T10',
        ]);

        $n2_211 = Room::updateOrCreate([
            'room_name' => '51',
            'description' => 'This is Normal Room for 2 people - 211',
            'category_name' => 'T20',
        ]);

        $n2_212 = Room::updateOrCreate([
            'room_name' => '52',
            'description' => 'This is Normal Room for 2 people - 212',
            'category_name' => 'T20',
        ]);

        $n2_213 = Room::updateOrCreate([
            'room_name' => '53',
            'description' => 'This is Normal Room for 2 people - 213',
            'category_name' => 'T20',
        ]);

        $n4_311 = Room::updateOrCreate([
            'room_name' => '61',
            'description' => 'This is Normal Room for 4 people - 311',
            'category_name' => 'T30',
        ]);

        $n4_312 = Room::updateOrCreate([
            'room_name' => '62',
            'description' => 'This is Normal Room for 4 people - 312',
            'category_name' => 'T30',
        ]);

        $n4_313 = Room::updateOrCreate([
            'room_name' => '63',
            'description' => 'This is Normal Room for 4 people - 313',
            'category_name' => 'T30',
        ]);

        //first
        $v1_101 = Room::updateOrCreate([
            'room_name' => '71',
            'description' => 'This is VIP Room for one people - 101',
            'category_name' => 'T11',
        ]);

        $v1_102 = Room::updateOrCreate([
            'room_name' => '72',
            'description' => 'This is VIP Room for one people - 102',
            'category_name' => 'T11',
        ]);

        $v1_103 = Room::updateOrCreate([
            'room_name' => '73',
            'description' => 'This is VIP Room for one people - 103',
            'category_name' => 'T11',
        ]);

        $v2_201 = Room::updateOrCreate([
            'room_name' => '81',
            'description' => 'This is VIP Room for 2 people - 201',
            'category_name' => 'T21',
        ]);

        $v2_202 = Room::updateOrCreate([
            'room_name' => '82',
            'description' => 'This is VIP Room for 2 people - 202',
            'category_name' => 'T21',
        ]);

        $v2_203 = Room::updateOrCreate([
            'room_name' => '83',
            'description' => 'This is VIP Room for 2 people - 203',
            'category_name' => 'T21',
        ]);

        $v4_301 = Room::updateOrCreate([
            'room_name' => '91',
            'description' => 'This is VIP Room for 4 people - 301',
            'category_name' => 'T12',
        ]);

        $v4_302 = Room::updateOrCreate([
            'room_name' => '92',
            'description' => 'This is VIP Room for 4 people - 302',
            'category_name' => 'T12',
        ]);

        $v4_303 = Room::updateOrCreate([
            'room_name' => '93',
            'description' => 'This is VIP Room for 4 people - 303',
            'category_name' => 'T12',
        ]);

        $n1_111 = Room::updateOrCreate([
            'room_name' => '101',
            'description' => 'This is Normal Room for one people - 111',
            'category_name' => 'V01',
        ]);

        $n1_112 = Room::updateOrCreate([
            'room_name' => '102',
            'description' => 'This is Normal Room for one people - 112',
            'category_name' => 'V01',
        ]);

        $n1_113 = Room::updateOrCreate([
            'room_name' => '103',
            'description' => 'This is Normal Room for one people - 113',
            'category_name' => 'V01',
        ]);

        $n2_211 = Room::updateOrCreate([
            'room_name' => '111',
            'description' => 'This is Normal Room for 2 people - 211',
            'category_name' => 'V02',
        ]);

        $n2_212 = Room::updateOrCreate([
            'room_name' => '112',
            'description' => 'This is Normal Room for 2 people - 212',
            'category_name' => 'V02',
        ]);

        $n2_213 = Room::updateOrCreate([
            'room_name' => '113',
            'description' => 'This is Normal Room for 2 people - 213',
            'category_name' => 'V02',
        ]);

        $n4_311 = Room::updateOrCreate([
            'room_name' => '121',
            'description' => 'This is Normal Room for 4 people - 311',
            'category_name' => 'V03',
        ]);

        $n4_312 = Room::updateOrCreate([
            'room_name' => '122',
            'description' => 'This is Normal Room for 4 people - 312',
            'category_name' => 'V03',
        ]);

        $n4_313 = Room::updateOrCreate([
            'room_name' => '123',
            'description' => 'This is Normal Room for 4 people - 313',
            'category_name' => 'V03',
        ]);

        //first
        $v1_101 = Room::updateOrCreate([
            'room_name' => '131',
            'description' => 'This is VIP Room for one people - 101',
            'category_name' => 'V10',
        ]);

        $v1_102 = Room::updateOrCreate([
            'room_name' => '132',
            'description' => 'This is VIP Room for one people - 102',
            'category_name' => 'V10',
        ]);

        $v1_103 = Room::updateOrCreate([
            'room_name' => '133',
            'description' => 'This is VIP Room for one people - 103',
            'category_name' => 'V10',
        ]);

        $v2_201 = Room::updateOrCreate([
            'room_name' => '141',
            'description' => 'This is VIP Room for 2 people - 201',
            'category_name' => 'V20',
        ]);

        $v2_202 = Room::updateOrCreate([
            'room_name' => '142',
            'description' => 'This is VIP Room for 2 people - 202',
            'category_name' => 'V20',
        ]);

        $v2_203 = Room::updateOrCreate([
            'room_name' => '143',
            'description' => 'This is VIP Room for 2 people - 203',
            'category_name' => 'V20',
        ]);

        $v4_301 = Room::updateOrCreate([
            'room_name' => '151',
            'description' => 'This is VIP Room for 4 people - 301',
            'category_name' => 'V30',
        ]);

        $v4_302 = Room::updateOrCreate([
            'room_name' => '152',
            'description' => 'This is VIP Room for 4 people - 302',
            'category_name' => 'V30',
        ]);

        $v4_303 = Room::updateOrCreate([
            'room_name' => '153',
            'description' => 'This is VIP Room for 4 people - 303',
            'category_name' => 'V30',
        ]);

        $n1_111 = Room::updateOrCreate([
            'room_name' => '161',
            'description' => 'This is Normal Room for one people - 111',
            'category_name' => 'V11',
        ]);

        $n1_112 = Room::updateOrCreate([
            'room_name' => '162',
            'description' => 'This is Normal Room for one people - 112',
            'category_name' => 'V11',
        ]);

        $n1_113 = Room::updateOrCreate([
            'room_name' => '163',
            'description' => 'This is Normal Room for one people - 113',
            'category_name' => 'V11',
        ]);

        $n2_211 = Room::updateOrCreate([
            'room_name' => '171',
            'description' => 'This is Normal Room for 2 people - 211',
            'category_name' => 'V21',
        ]);

        $n2_212 = Room::updateOrCreate([
            'room_name' => '172',
            'description' => 'This is Normal Room for 2 people - 212',
            'category_name' => 'V21',
        ]);

        $n2_213 = Room::updateOrCreate([
            'room_name' => '173',
            'description' => 'This is Normal Room for 2 people - 213',
            'category_name' => 'V21',
        ]);

        $n4_311 = Room::updateOrCreate([
            'room_name' => '181',
            'description' => 'This is Normal Room for 4 people - 311',
            'category_name' => 'V12',
        ]);

        $n4_312 = Room::updateOrCreate([
            'room_name' => '182',
            'description' => 'This is Normal Room for 4 people - 312',
            'category_name' => 'V12',
        ]);

        $n4_313 = Room::updateOrCreate([
            'room_name' => '183',
            'description' => 'This is Normal Room for 4 people - 313',
            'category_name' => 'V12',
        ]);
    }
}
