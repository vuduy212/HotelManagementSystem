<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'client_name',
        'email',
        'phone',
        'CMND',
        'category_name',
        'room_name',
        'number_of_adults',
        'number_of_children',
        'checkin',
        'checkout',
        'price',
        'payment',
        'created_at',
        'time'
    ];

    public function saveReservation(Request $data)
    {
        //add time
        $sec_checkin = strtotime($data['checkin']);
        $sec_checkout = strtotime($data['checkout']);
        $time = ($sec_checkout - $sec_checkin) / 86400;

        $reservation = $this->create([
            'client_name' => $data['client_name'],
            'CMND' => $data['CMND'],
            'phone' => $data['phone'],
            'email' => $data['email'],
            'category_name' => $data['category_name'],
            'room_name' => $data['room_name'],
            'number_of_adults' => $data['number_of_adults'],
            'number_of_children' => $data['number_of_children'],
            'checkin' => $data['checkin'],
            'checkout' => $data['checkout'],
            'price' => $data['price'],
            'payment' => $data['payment'],
            'time' => $time,
        ]);

        return $reservation;
    }

    public function reservationByRoom($room_name)
    {
        $query = "select * from reservations r
                    join rooms r2 where r.room_name = r2.room_name
                    and r.room_name = " . $room_name;
        $result = DB::select($query);
        return $result;
    }
}
