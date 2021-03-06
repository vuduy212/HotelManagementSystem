<?php

namespace App\Models;

use App\Http\Controllers\NotificationController;
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
        'ID_Card',
        'category_name',
        'room_name',
        'number_of_adults',
        'number_of_children',
        'checkin',
        'checkout',
        'price',
        'payment',
        'created_at',
        'time',
        'code',
        'status'
    ];

    public function searchReservation(array $data)
    {
        $phone = array_key_exists('phone', $data) ? $data['phone'] : null;
        $checkin = array_key_exists('checkin', $data) ? $data['checkin'] : null;
        $checkout = array_key_exists('checkout', $data) ? $data['checkout'] : null;
        $status = array_key_exists('filter_status', $data) ? $data['filter_status'] : null;
        $roomCategory = array_key_exists('room_categories', $data) ? $data['room_categories'] : null;
        $room = array_key_exists('rooms', $data) ? $data['rooms'] : null;

        if ($checkin == null and $checkout == null) {
            return $this
                ->SearchRoomCategory($roomCategory)
                ->SearchRoom($room)
                ->SearchStatus($status)
                ->SearchPhone($phone)
                ->latest('id')
                ->paginate(array_key_exists('number', $data) ? $data['number'] : 5);
        } else if ($checkin != null and $checkout == null) {
            return $this
                ->SearchRoomCategory($roomCategory)
                ->SearchRoom($room)
                ->SearchStatus($status)
                ->SearchPhone($phone)
                ->SearchInCheckin($checkin)
                ->latest('id')
                ->paginate(array_key_exists('number', $data) ? $data['number'] : 5);
        } else if ($checkin == null && $checkout != null) {
            return $this
                ->SearchRoomCategory($roomCategory)
                ->SearchRoom($room)
                ->SearchStatus($status)
                ->SearchPhone($phone)
                ->SearchInCheckout($checkout)
                ->latest('id')
                ->paginate(array_key_exists('number', $data) ? $data['number'] : 5);
        } else {
            return $this
                ->SearchRoomCategory($roomCategory)
                ->SearchRoom($room)
                ->SearchStatus($status)
                ->SearchPhone($phone)
                ->SearchCheckin($checkin)
                ->SearchCheckout($checkout)
                ->latest('id')
                ->paginate(array_key_exists('number', $data) ? $data['number'] : 5);
        }
    }

    public function scopeSearchRoomCategory($query, $roomCategory)
    {
        return $query->where('category_name', 'like', '%' . $roomCategory . '%');
    }

    public function scopeSearchRoom($query, $room)
    {
        return $query->where('room_name', 'like', '%' . $room . '%');
    }

    public function scopeSearchStatus($query, $status)
    {
        return $query->where('status', 'like', '%' . $status . '%');
    }

    public function scopeSearchInCheckin($query, $checkin)
    {
        return $query->where('checkin', '>=', $checkin);
    }

    public function scopeSearchInCheckout($query, $checkout)
    {
        return $query->where('checkout', '<=', $checkout);
    }

    public function scopeSearchPhone($query, $phone)
    {
        return $query->where('phone', 'like', '%' . $phone . '%');
    }

    public function scopeSearchCheckin($query, $checkin)
    {
        return $query->where('checkin', 'like', '%' . $checkin . '%');
    }

    public function scopeSearchCheckout($query, $checkout)
    {
        return $query->where('checkout', 'like', '%' . $checkout . '%');
    }

    public function searchReservationByInput($input)
    {
        $query = 'select * from reservations r where r.phone = ' . '\'' . $input . '\'' . ' or r.email = ' . '\'' . $input . '\'' . ' or r.ID_Card = ' . '\'' . $input . '\'';
        $result = DB::select($query);
        return $result;
    }

    public function showDetailReservation($id)
    {
        $query = 'select * from reservations r where r.id = ' . $id . ' limit 1';
        $result = DB::select($query);
        return $result;
    }

    public function saveReservation(Request $data)
    {
        //add time
        $sec_checkin = strtotime($data['checkin']);
        $sec_checkout = strtotime($data['checkout']);
        $time = ($sec_checkout - $sec_checkin) / 86400;

        //count price
        $price = $data['price'] * $time;

        $reservation = $this->create([
            'client_name' => $data['client_name'],
            'ID_Card' => $data['ID_Card'],
            'phone' => $data['phone'],
            'email' => $data['email'],
            'category_name' => $data['category_name'],
            'room_name' => $data['room_name'],
            'number_of_adults' => $data['number_of_adults'],
            'number_of_children' => $data['number_of_children'],
            'checkin' => $data['checkin'],
            'checkout' => $data['checkout'],
            'price' => $price,
            'payment' => $data['payment'],
            'time' => $time,
            // 'code' => $data['code']
            'code' => NotificationController::randomCode(),
            'status' => 'Unconfirm',
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

    public function searchReservationByCode($code)
    {
        $query = "select * from reservations r where r.code = " . '\'' . $code . '\'';
        $result = DB::select($query);
        return $result;
    }

    public function countReservationByRoom($room_name)
    {
        $query = "select count(*) from reservations r where r.room_name = " . '\'' . $room_name . '\'';
        $result = DB::select($query);
        return $result;
    }

    public function countReservationByRoomCategory($category_name)
    {
        $query = "select count(*) from reservations r where r.category_name = " . '\'' . $category_name . '\'';
        $result = DB::select($query);
        return $result;
    }
}
