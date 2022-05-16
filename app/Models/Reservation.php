<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

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
        'check_in',
        'check_out',
        'price',
        'payment',
        'created_at',
    ];

    public function saveReservation(Request $data)
    {
        // dd($data);
        $reservation = $this->create([
            'client_name' => $data['client_name'],
            'CMND' => $data['CMND'],
            'phone' => $data['phone'],
            'email' => $data['email'],
            'category_name' => $data['category_name'],
            'room_name' => $data['room_name'],
            'number_of_adults' => $data['number_of_adults'],
            'number_of_children' => $data['number_of_children'],
            'check_in' => $data['checkin'],
            'check_out' => $data['checkout'],
            'price' => $data['price'],
            'payment' => $data['payment'],
        ]);

        return $reservation;
    }
}
