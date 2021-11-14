<?php

namespace Database\Seeders;

use App\Models\RoomBill;
use Illuminate\Database\Seeder;

class RoomBillsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bill1 = RoomBill::updateOrCreate([
            'category_id' => '1',
            'date_start' => '2021-11-01',
            'date_finish' => '2021-11-02',
            'client_name' => 'duy',
            'CMND' => '033200001234',
            'phone' => '0968885035',
            'email' => 'duy@gmail.com',
            'payment' => '0',
            'bill_status' => '2',
        ]);

        $bill2 = RoomBill::updateOrCreate([
            'category_id' => '2',
            'date_start' => '2021-12-10',
            'date_finish' => '2021-12-15',
            'client_name' => 'duy',
            'CMND' => '033200001234',
            'phone' => '0968885035',
            'email' => 'duy@gmail.com',
            'payment' => '0',
            'bill_status' => '0',
        ]);

        $bill3 = RoomBill::updateOrCreate([
            'category_id' => '3',
            'date_start' => '2021-11-19',
            'date_finish' => '2021-11-20',
            'client_name' => 'duy',
            'CMND' => '033200001234',
            'phone' => '0968885035',
            'email' => 'duy@gmail.com',
            'payment' => '1',
            'bill_status' => '1',
        ]);

        $bill4 = RoomBill::updateOrCreate([
            'category_id' => '4',
            'date_start' => '2021-11-01',
            'date_finish' => '2021-11-05',
            'client_name' => 'son',
            'CMND' => '033200005678',
            'phone' => '0967778088',
            'email' => 'som@gmail.com',
            'payment' => '1',
            'bill_status' => '3',
        ]);

        $bill5 = RoomBill::updateOrCreate([
            'category_id' => '5',
            'date_start' => '2021-11-27',
            'date_finish' => '2021-11-28',
            'client_name' => 'son',
            'CMND' => '033200005678',
            'phone' => '0967778088',
            'email' => 'som@gmail.com',
            'payment' => '1',
            'bill_status' => '2',
        ]);

        $bill6 = RoomBill::updateOrCreate([
            'category_id' => '6',
            'date_start' => '2021-11-15',
            'date_finish' => '2021-11-20',
            'client_name' => 'bao',
            'CMND' => '033200004567',
            'phone' => '0386665035',
            'email' => 'bao@gmail.com',
            'payment' => '0',
            'bill_status' => '1',
        ]);
    }
}
